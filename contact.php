<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

header('Content-Type: application/json; charset=UTF-8');

require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

function respond(int $statusCode, bool $success, string $message): never
{
    http_response_code($statusCode);
    echo json_encode([
        'success' => $success,
        'message' => $message,
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, false, 'Invalid request method.');
}

$fullName = trim((string) ($_POST['full_name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$company = trim((string) ($_POST['company'] ?? ''));
$interest = trim((string) ($_POST['interest'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if (
    $fullName === '' ||
    $email === '' ||
    $company === '' ||
    $interest === '' ||
    $message === ''
) {
    respond(422, false, 'Please complete all required fields.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(422, false, 'Please enter a valid email address.');
}

$mail = new PHPMailer(true);

try {
    $smtpHost = trim((string) (getenv('MAIL_HOST') ?: 'mail.rabshashakeel.com'));
    $smtpUsername = trim((string) (getenv('MAIL_USERNAME') ?: 'demo@rabshashakeel.com'));
    $smtpPassword = (string) (getenv('MAIL_PASSWORD') ?: ')+4B&dP1JdBfsytw');
    $smtpPort = (int) (getenv('MAIL_PORT') ?: 465);
    $smtpEncryption = strtolower(trim((string) (getenv('MAIL_ENCRYPTION') ?: 'ssl')));

    if ($smtpHost !== '') {
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->Port = $smtpPort;
        $mail->SMTPAuth = $smtpUsername !== '' && $smtpPassword !== '';
        $mail->Username = $smtpUsername;
        $mail->Password = $smtpPassword;

        if ($smtpEncryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($smtpEncryption === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }
    }

    $fromEmail = trim((string) (getenv('MAIL_FROM_ADDRESS') ?: 'demo@rabshashakeel.com'));
    $fromName = trim((string) (getenv('MAIL_FROM_NAME') ?: 'Rabsha Shakeel'));
    $toEmail = trim((string) (getenv('MAIL_TO_ADDRESS') ?: 'info@venzongroup.com'));
    $toName = trim((string) (getenv('MAIL_TO_NAME') ?: 'Venzon New Inquiry'));

    $safeName = htmlspecialchars($fullName, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeEmail = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeCompany = htmlspecialchars($company, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeInterest = htmlspecialchars($interest, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail, $toName);
    $mail->addReplyTo($email, $fullName);
    $mail->addEmbeddedImage(__DIR__ . '/assets/images/white-logo-maindatee.png', 'venzon-logo', 'venzon-logo.png');
    $mail->isHTML(true);
    $mail->Subject = 'New Briefing Request from Venzon Website';
    $mail->Body = <<<HTML
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>New Briefing Request</title>
        </head>
        <body style="margin:0; padding:0; background:#0a0a0c; font-family:Arial, Helvetica, sans-serif; color:#f5f5f5;">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#0a0a0c; padding:32px 16px;">
                <tr>
                    <td align="center">
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:640px; background:#141419; border:1px solid #434820;">
                            <tr>
                                <td style="padding:28px 30px; border-bottom:1px solid #434820; background:#101014;">
                                    <img src="cid:venzon-logo" alt="Venzon" width="170" style="display:block; width:170px; max-width:100%; height:auto; margin:0 0 22px;">
                                    <p style="margin:0 0 10px; color:#a6b360; font-size:11px; letter-spacing:3px; text-transform:uppercase; font-weight:bold;">Venzon Development</p>
                                    <h1 style="margin:0; color:#ffffff; font-family:Georgia, 'Times New Roman', serif; font-size:30px; line-height:1.2; font-weight:400;">New Briefing Request</h1>
                                    <p style="margin:12px 0 0; color:#b8b8b8; font-size:14px; line-height:1.6;">A new investor briefing inquiry has been submitted from the website contact form.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:30px;">
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td style="padding:14px 0; border-bottom:1px solid #2a2a30;">
                                                <p style="margin:0 0 6px; color:#a6b360; font-size:10px; letter-spacing:2px; text-transform:uppercase; font-weight:bold;">Full Legal Name</p>
                                                <p style="margin:0; color:#ffffff; font-size:16px;">{$safeName}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:14px 0; border-bottom:1px solid #2a2a30;">
                                                <p style="margin:0 0 6px; color:#a6b360; font-size:10px; letter-spacing:2px; text-transform:uppercase; font-weight:bold;">Private Email</p>
                                                <p style="margin:0; color:#ffffff; font-size:16px;"><a href="mailto:{$safeEmail}" style="color:#dde2bd; text-decoration:none;">{$safeEmail}</a></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:14px 0; border-bottom:1px solid #2a2a30;">
                                                <p style="margin:0 0 6px; color:#a6b360; font-size:10px; letter-spacing:2px; text-transform:uppercase; font-weight:bold;">Corporate Entity</p>
                                                <p style="margin:0; color:#ffffff; font-size:16px;">{$safeCompany}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:14px 0; border-bottom:1px solid #2a2a30;">
                                                <p style="margin:0 0 6px; color:#a6b360; font-size:10px; letter-spacing:2px; text-transform:uppercase; font-weight:bold;">Area Of Interest</p>
                                                <p style="margin:0; color:#ffffff; font-size:16px;">{$safeInterest}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:18px 0 0;">
                                                <p style="margin:0 0 10px; color:#a6b360; font-size:10px; letter-spacing:2px; text-transform:uppercase; font-weight:bold;">Inquiry Details</p>
                                                <div style="margin:0; padding:18px; background:#0f0f13; border-left:3px solid #869244; color:#e8e8e8; font-size:15px; line-height:1.7;">{$safeMessage}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:18px 30px; background:#101014; border-top:1px solid #434820;">
                                    <p style="margin:0; color:#888888; font-size:12px; line-height:1.6;">This message was generated by the Venzon website contact form.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>
    HTML;
    $mail->AltBody = "New Contact Request\n"
        . "Full Name: {$fullName}\n"
        . "Email: {$email}\n"
        . "Company: {$company}\n"
        . "Area of Interest: {$interest}\n"
        . "Inquiry Details:\n{$message}";

    $mail->send();

    respond(200, true, 'Your briefing request has been sent successfully.');
} catch (Exception $exception) {
    $errorMessage = 'Mail could not be sent. Please verify your SMTP configuration and try again.';

    if (trim((string) getenv('MAIL_HOST')) !== '') {
        $errorMessage = 'Mail could not be sent right now. Please try again in a moment.';
    }

    respond(500, false, $errorMessage);
}
