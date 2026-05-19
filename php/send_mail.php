<?php
/**
 * Contact form handler — sends mail via PHPMailer over SMTP.
 * Requires PHPMailer in /vendor/phpmailer/ (already bundled).
 */
require __DIR__ . '/../vendor/phpmailer/PHPMailer.php';
require __DIR__ . '/../vendor/phpmailer/SMTP.php';
require __DIR__ . '/../vendor/phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$config = require __DIR__ . '/mail_config.php';

function respond($ok, $msg){
    $_SESSION['cs_flash'] = ['ok'=>$ok,'msg'=>$msg];
    header('Location: ../contact.php#contact-form');
    exit;
}

session_start();

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    respond(false, 'Invalid request.');
}

// Honeypot anti-spam
if(!empty($_POST['website'])){
    respond(true, 'Thanks!'); // silently drop bots
}

// Validate inputs
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$phone   = trim($_POST['phone']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if($name === '' || strlen($name) > 100){
    respond(false, 'Please enter a valid name (max 100 characters).');
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 255){
    respond(false, 'Please enter a valid email address.');
}
if($subject === '' || strlen($subject) > 200){
    respond(false, 'Please enter a subject (max 200 characters).');
}
if($message === '' || strlen($message) > 5000){
    respond(false, 'Please enter a message (max 5000 characters).');
}
if($phone !== '' && (strlen($phone) > 40 || !preg_match('/^[\d\s\+\-\(\)]+$/', $phone))){
    respond(false, 'Please enter a valid phone number.');
}

// Send
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = $config['host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['username'];
    $mail->Password   = $config['password'];
    $mail->SMTPSecure = $config['encryption'] === 'tls'
                        ? PHPMailer::ENCRYPTION_STARTTLS
                        : PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = (int)$config['port'];
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email'], $config['to_name']);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "New enquiry: " . $subject;

    $safe = fn($v) => htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
    $mail->Body = "
      <div style='font-family:Arial,sans-serif;background:#f4f7fb;padding:24px'>
        <div style='max-width:560px;margin:auto;background:#fff;border-radius:12px;overflow:hidden;border:1px solid #e0e7f1'>
          <div style='background:linear-gradient(135deg,#00d4ff,#0a1f44);padding:20px 24px;color:#fff'>
            <h2 style='margin:0;font-size:18px'>New Contact Form Submission</h2>
            <p style='margin:6px 0 0;font-size:13px;opacity:.9'>Clock Skew Software Solutions</p>
          </div>
          <div style='padding:24px;color:#1a2540;font-size:14px;line-height:1.7'>
            <p><strong>Name:</strong> {$safe($name)}</p>
            <p><strong>Email:</strong> {$safe($email)}</p>
            <p><strong>Phone:</strong> " . ($phone? $safe($phone) : '-') . "</p>
            <p><strong>Subject:</strong> {$safe($subject)}</p>
            <p><strong>Message:</strong></p>
            <div style='background:#f4f7fb;padding:14px;border-radius:8px;white-space:pre-wrap'>{$safe($message)}</div>
            <p style='color:#8b9bb4;font-size:12px;margin-top:24px'>Sent from clockskew.dev contact form</p>
          </div>
        </div>
      </div>";
    $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\n$message";

    $mail->send();
    respond(true, 'Thanks! Your message has been sent — we will reply within 1 business day.');
} catch (Exception $e) {
    error_log('Mailer Error: ' . $mail->ErrorInfo);
    respond(false, 'Sorry, the message could not be sent right now. Please try again later.');
}
