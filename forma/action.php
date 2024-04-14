<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'includes/PHPMailer/src/Exception.php';
    require 'includes/PHPMailer/src/PHPMailer.php';
    require 'includes/PHPMailer/src/SMTP.php';
    
    mail('Shamar.Jar@yandex.ru','123','12345');
?>