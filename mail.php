<?php 

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$email = $_POST['user_email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'diamond_ray_nsk@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Passw0rd1488'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('diamond_ray_nsk@mail.ru', 'Diamond Ray'); // от кого будет уходить письмо?
$mail->addAddress($email);  
$mail->addAttachment("dogovor-o-rezervirovanii-shenka.doc");   // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Ссылка на скачивание договора о резервировании щенка';
$mail->Body    = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel porttitor erat. Duis elementum massa a tellus cursus mattis. Donec id pharetra lorem. Sed in sodales arcu';
$mail->AltBody = '';

if ($mail->send()) {
  echo 'Письмо отправлено!';
} else {
  echo 'Ошибка: ' . $mail->ErrorInfo;
}  
?>