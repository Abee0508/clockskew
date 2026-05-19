# Clock Skew Software Solutions — Website

Custom HTML / CSS / JS / Bootstrap 5 + PHP website with PHPMailer contact form.

## 📂 Folder Structure
```
clockskew/
├── index.php              Home
├── about.php              About page
├── services.php           Services page
├── portfolio.php          Portfolio page
├── pricing.php            Pricing page
├── contact.php            Contact page (with form)
├── privacy.php            Privacy Policy
├── terms.php              Terms & Conditions
├── 404.php                Not Found page
├── css/style.css          All custom styles
├── js/main.js             jQuery interactions (preloader, popup, reveal, counter)
├── images/                Logo, favicon, hero bg & project mockups
├── includes/
│   ├── header.php         Reusable navbar (loaded by every page)
│   └── footer.php         Reusable footer + WhatsApp + scripts
├── php/
│   ├── mail_config.php    👈 EDIT THIS — your email + Gmail App Password
│   └── send_mail.php      Contact form handler (uses PHPMailer)
└── vendor/phpmailer/      PHPMailer 6.9.1 (bundled — no Composer needed)
```

## 🚀 How to Run
1. Upload the entire `clockskew/` folder to any PHP-enabled host (cPanel, XAMPP, etc.).
2. Open `php/mail_config.php` and fill in:
   - `username` → your Gmail address
   - `password` → your **Gmail App Password** (https://myaccount.google.com/apppasswords)
   - `from_email`, `to_email` → your address(es)
3. Visit `index.php` in the browser. Done.

> Local testing: run `php -S localhost:8000` inside the folder.

## ✉️ Gmail App Password (required for SMTP)
- Enable 2-Step Verification on your Google Account.
- Visit https://myaccount.google.com/apppasswords → create a password for "Mail".
- Paste that 16-char password into `php/mail_config.php`.

## 🎨 Features Included
- Animated preloader
- Welcome popup on first load (session-based)
- Floating WhatsApp button (bottom-right, pulse animation)
- Sticky glass navbar with mobile hamburger
- Scroll-reveal animations on every section
- Animated stat counters
- Hover effects on services, projects, pricing cards
- Custom 404 page
- Honeypot anti-spam on contact form
- Server-side input validation in `send_mail.php`

## 🔗 WhatsApp Number
Edit `includes/footer.php` and change the number in:
```html
<a href="https://wa.me/923000000000?text=...">
```

## 📝 All content is original — no copyrighted text was used.
```
```
Enjoy! — Clock Skew Software Solutions
