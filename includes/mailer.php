<?php
/**
 * PHPMailer Helper for DM Healthcare
 */

require_once __DIR__ . '/../config/mail.php';
require_once __DIR__ . '/PHPMailer/Exception.php';
require_once __DIR__ . '/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

/**
 * Send an email using PHPMailer (SMTP or fallback)
 * 
 * @param string|array $to Single recipient email string or array of emails
 * @param string $subject Email subject
 * @param string $htmlBody HTML content of email
 * @param string $replyTo Optional reply-to email
 * @param string $replyToName Optional reply-to name
 * @param array $attachments Array of file paths or [['path' => '...', 'name' => '...']]
 * @return array ['success' => bool, 'message' => string]
 */
function sendHealthcareEmail($to, $subject, $htmlBody, $replyTo = '', $replyToName = '', $attachments = []) {
    $mail = new PHPMailer(true);

    try {
        if (defined('SMTP_ENABLED') && SMTP_ENABLED) {
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = SMTP_AUTH;
            $mail->Username   = SMTP_USER;
            $mail->Password   = SMTP_PASS;
            
            if (SMTP_SECURE === 'ssl') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } elseif (SMTP_SECURE === 'tls') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            } else {
                $mail->SMTPSecure = false;
                $mail->SMTPAutoTLS = false;
            }
            
            $mail->Port       = SMTP_PORT;

            // Relax SSL verification options for localhost / shared hosting compatibility if needed
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ];
        }

        // Sender
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);

        // Recipients
        if (is_array($to)) {
            foreach ($to as $recipient) {
                if (!empty($recipient)) $mail->addAddress($recipient);
            }
        } else {
            $mail->addAddress($to);
        }

        // Reply-To
        if (!empty($replyTo)) {
            $mail->addReplyTo($replyTo, $replyToName ?: $replyTo);
        }

        // Attachments
        if (!empty($attachments)) {
            foreach ($attachments as $att) {
                if (is_array($att) && isset($att['path'])) {
                    if (file_exists($att['path'])) {
                        $name = $att['name'] ?? basename($att['path']);
                        $mail->addAttachment($att['path'], $name);
                    }
                } elseif (is_string($att) && file_exists($att)) {
                    $mail->addAttachment($att);
                }
            }
        }

        // Content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->Body    = $htmlBody;
        $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />', '</p>'], "\n", $htmlBody));

        $mail->send();
        return ['success' => true, 'message' => 'Email sent successfully via PHPMailer.'];
    } catch (Exception $e) {
        error_log("PHPMailer Error: " . $mail->ErrorInfo);
        return ['success' => false, 'message' => $mail->ErrorInfo];
    }
}
