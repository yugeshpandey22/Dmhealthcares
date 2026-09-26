<?php
/**
 * SMTP & Mail Configuration for DM Healthcare
 * Configure your email server details here.
 */

// Set to true to enable SMTP sending, false for PHP standard mail() fallback
defined('SMTP_ENABLED') or define('SMTP_ENABLED', true);

// SMTP Server Settings
// For cPanel / Webmail: Host = 'mail.dmhealthcares.com', Port = 465 (ssl) or 587 (tls)
// For Office365 / Outlook: Host = 'smtp.office365.com', Port = 587 (tls)
defined('SMTP_HOST') or define('SMTP_HOST', 'mail.dmhealthcares.com');
defined('SMTP_PORT') or define('SMTP_PORT', 465);
defined('SMTP_SECURE') or define('SMTP_SECURE', 'ssl'); // 'ssl' (Port 465) or 'tls' (Port 587)
defined('SMTP_AUTH') or define('SMTP_AUTH', true);

// SMTP Account Credentials
defined('SMTP_USER') or define('SMTP_USER', 'info@dmhealthcares.com');
defined('SMTP_PASS') or define('SMTP_PASS', ''); // info@dmhealthcares.com का पासवर्ड यहाँ डालें

// Sender Info
defined('SMTP_FROM_EMAIL') or define('SMTP_FROM_EMAIL', 'info@dmhealthcares.com');
defined('SMTP_FROM_NAME') or define('SMTP_FROM_NAME', 'DM Healthcare Careers');

// Target Receiver Email for HR / Admin (Where resumes and applications are received)
defined('HR_NOTIFICATION_EMAIL') or define('HR_NOTIFICATION_EMAIL', 'info@dmhealthcares.com');

