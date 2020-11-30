<?php

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;


    $mail = new PHPMailer;
    $mail->CharSet = 'utf-8';

    $user_message = $_POST['user-message'];
    $user_name = $_POST['user-name'];
    $user_phone = $_POST['user-phone'];

try {
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'beslanthashokov@mail.ru';                 // Наш логин
    $mail->Password = '22022016Bes';                           // Наш пароль от ящика
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('beslanthashokov@mail.ru', 'Беслан Тхашоков');   // От кого письмо 
    $mail->addAddress('besik0307@mail.ru');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Тема сообщения!!!';
    $mail->Body    = 'Сообщение от'.$user_name.'<br> Телефон:'.$user_phone.'<br>Сообщение:'.$user_message;
    $mail->AltBody = 'Альтернативный текст';

    // $mail->send();
    echo 'Сообщение от'.$user_name.'<br> Телефон:'.$user_phone.'<br>Сообщение:'.$user_message;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>