<?php
/**
 * Mail configuration for PHPMailer.
 * IMPORTANT: Fill in your Gmail (or other SMTP) credentials below.
 * For Gmail, generate an App Password: https://myaccount.google.com/apppasswords
 */
return [
    // SMTP Host (Gmail = smtp.gmail.com, Outlook = smtp.office365.com)
    'host'        => 'smtp.gmail.com',

    // Your sending email address (e.g. yourname@gmail.com)
    'username'    => 'YOUR_EMAIL@gmail.com',

    // Your APP PASSWORD (NOT your normal Gmail password)
    'password'    => 'YOUR_APP_PASSWORD',

    // 465 for SMTPS (ssl) or 587 for STARTTLS (tls)
    'port'        => 465,
    'encryption'  => 'ssl',   // 'ssl' or 'tls'

    // From details
    'from_email'  => 'YOUR_EMAIL@gmail.com',
    'from_name'   => 'Clock Skew Website',

    // Where contact-form submissions should be delivered
    'to_email'    => 'YOUR_EMAIL@gmail.com',
    'to_name'     => 'Clock Skew Team',
];
