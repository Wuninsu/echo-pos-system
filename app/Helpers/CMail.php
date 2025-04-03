<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

use function Illuminate\Log\log;

class CMail
{
    public static function send($config)
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = config('services.mail.host');
            $mail->SMTPAuth   = true;
            $mail->Username   = config('services.mail.username');
            $mail->Password   = config('services.mail.password');
            $mail->SMTPSecure = config('services.mail.encryption');
            $mail->Port       = config('services.mail.port');

            //Recipients
            $mail->setFrom(
                isset($config['from_address']) ? $config['from_address'] : config('services.mail.from_address'),
                isset($config['from_name']) ? $config['from_name'] : config('services.mail.from_name'),
            );
            $mail->addAddress($config['recipient_address'], isset($config['recipient_name']) ? $config['recipient_name'] : null);
            // $mail->addAddress($config['recipient_email']);

            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');

            //Content
            $mail->isHTML(true);                              
            $mail->Subject = $config['subject'];
            $mail->Body    = $config['body'];
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if (!$mail->send()) {
                return false;
            }
            return true;
        } catch (Exception $e) {
            log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            return false;
        }
    }
}
