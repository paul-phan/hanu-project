<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 24/11/2016
 * Time: 3:42 CH
 */

namespace Library\Tools;
require WEB_ROOT . '/vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

class Mmail
{
    /**
     * @param string $toMail send to email address, '' to self sending
     * @param string $subject subject or header of mail
     * @param string $body body of your mail
     * @param null $attactmentUrl
     * @return array(boolean,string) return an array[0] is true or false and email status message
     */
    public static function send($toMail = null, $subject = null, $body = null, $attactmentUrl = null)
    {
        $mail = new \PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ptm4c13@gmail.com';                 // SMTP username
        $mail->Password = 'ptm123456';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;
        $toMail = ($toMail != null) ? $toMail : 'ptm4c13@gmail.com';
        $subject = ($subject != null) ? $subject : 'Here is the subject';
        $body = ($body != null) ? $body : 'This is a testing HTML message body <b>in bold!</b>';
        $mail->setFrom('ptm4c13@gmail.com', 'Minh Mailer');
        $mail->addAddress($toMail, $toMail);     // Add a recipient
        $mail->addReplyTo('ptm4c13@gmail.com', 'Reply Information');

        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if ($attactmentUrl != null) {
            $mail->addAttachment($attactmentUrl);
        }
        if (!$mail->send()) {
            return [false, 'Mailer Error: ' . $mail->ErrorInfo];
        } else {
            return [true, 'Message has been sent'];
        }
    }
}