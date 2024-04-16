<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'includes/PHPMailer/src/Exception.php';
    require 'includes/PHPMailer/src/PHPMailer.php';
    require 'includes/PHPMailer/src/SMTP.php';

    
    
    $mail = new PHPMailer();
    $mail->isSMTP();                   // Отправка через SMTP
    $mail->Host   = 'smtp.yandex.ru';  // Адрес SMTP сервера
    $mail->SMTPAuth   = true;   
    $mail->Username   = 'Shamar.Jar';       // ваше имя пользователя (без домена и @)
    $mail->Password   = 'yboeiorclxgsnrdz';    // ваш пароль
    $mail->SMTPSecure = 'SSL';         // шифрование ssl
    $mail->Port   = 587;               // порт подключения
     
    $mail->setFrom('Shamar.Jar@yandex.ru', 'Конкурс Смолмаш');    // от кого
    $mail->addAddress('Shamar.Jar@yandex.ru', 'Участник записался'); // кому
     
    $mail->Subject = 'Участник записался';
    $mail->msgHTML("<html><body>
                    <h1>Здравствуйте!</h1>
                    <p>Это тестовое письмо.</p>
                    </html></body>");
    // Отправляем
    if ($mail->send()) {
      echo 'Письмо отправлено!';
    } else {
      echo 'Ошибка: ' . $mail->ErrorInfo;
    }
?>