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
    // Configure these on the server if you want PHPMailer to send through SMTP.
    $smtpHost = trim((string) getenv('mail.rabshashakeel.com'));
    $smtpUsername = trim((string) getenv('demo@rabshashakeel.com'));
    $smtpPassword = (string) getenv(')+4B&dP1JdBfsytw');
    $smtpPort = (int) (getenv('465') ?: 587);
    $smtpEncryption = strtolower(trim((string) (getenv('MAIL_ENCRYPTION') ?: 'tls')));

    if ($smtpHost !== '') {
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->Port = $smtpPort;
        $mail->SMTPAuth = $smtpUsername !== '' || $smtpPassword !== '';
        $mail->Username = $smtpUsername;
        $mail->Password = $smtpPassword;

        if ($smtpEncryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($smtpEncryption === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }
    }

    $fromEmail = trim((string) (getenv('demo@rabshashakeel.com') ?: 'noreply@venzoncorporation.com'));
    $fromName = trim((string) (getenv('Rabsha Shakeel') ?: 'Venzon Website'));
    $toEmail = trim((string) (getenv('rabshasiddiqui@gmail.com') ?: 'invest@venzoncorporation.com'));
    $toName = trim((string) (getenv('Rabsha') ?: 'Venzon Investor Relations'));

    $safeName = htmlspecialchars($fullName, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeEmail = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeCompany = htmlspecialchars($company, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeInterest = htmlspecialchars($interest, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail, $toName);
    $mail->addReplyTo($email, $fullName);
    $mail->isHTML(true);
    $mail->Subject = 'New Briefing Request from Venzon Website';
    $mail->Body = "
        <h2>New Contact Request</h2>
        <p><strong>Full Name:</strong> {$safeName}</p>
        <p><strong>Email:</strong> {$safeEmail}</p>
        <p><strong>Company:</strong> {$safeCompany}</p>
        <p><strong>Area of Interest:</strong> {$safeInterest}</p>
        <p><strong>Inquiry Details:</strong><br>{$safeMessage}</p>
    ";
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
