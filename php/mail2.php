<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require '../vendor/autoload.php';

//traemos los datos del formulario.
$nombre=$_POST["nombre"];
$from=$_POST["email"];
$telefono = $_POST["telefono"];
$text=$_POST["texto"];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.oxisteel.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'admin@oxisteel.com';                 // SMTP username
    $mail->Password = 'Cordoba0502';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($from, 'Consulta Web');
    $mail->addAddress('roldancristian86@gmail.com', 'Cris');     // Add a recipient
//  $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($from, 'Consulta Web');
//  $mail->addCC('cdroldan1@hotmail.com');
//  $mail->addBCC('bcc@example.com');

    //Attachments
//  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contacto';
    $mail->Body    = $text;
    $mail->AltBody = $text;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
