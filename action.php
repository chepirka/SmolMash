<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'includes/PHPMailer/src/Exception.php';
    require 'includes/PHPMailer/src/PHPMailer.php';
    require 'includes/PHPMailer/src/SMTP.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $school = $_POST['school'];
    $class = $_POST['class'];
    
    $mail = new PHPMailer();
    $mail->isSMTP();                   // Отправка через SMTP
    $mail->Host = 'smtp.yandex.ru';  // Адрес SMTP сервера
    $mail->SMTPAuth = true;   
    $mail->Username = 'K-ANDre-A';       // ваше имя пользователя (без домена и @)
    $mail->Password = 'meingzfbsgcjwfmv';    // ваш пароль
    $mail->SMTPSecure = 'SSL';         // шифрование ssl
    $mail->Port = 587;               // порт подключения
     
    $mail->setFrom('K-ANDre-A@yandex.ru', 'Конкурс Смолмаш');    // от кого
    $mail->addAddress('K-ANDre-A@yandex.ru', 'Участник записался'); // кому
     
    $mail->Subject = 'Участник записался';
    $mail->msgHTML("<html><body>
                    <h1>Здравствуйте!</h1>
                    <p>ФИО: $name<br>
                      Телефон: $phone<br>
                      Почта: $email<br>
                      Город: $city<br>
                      Школа: $school<br>
                      Класс: $class
                    </p>
                    </html></body>");
    // Отправляем
    if ($mail->send()) {
      header('location: index.html');
    } else {
      echo 'Ошибка: ' . $mail->ErrorInfo;
    }
?>