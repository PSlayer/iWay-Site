<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setFrom('send@iwaygroup.ru', 'Запрос в техническую поддержку');
// $mail->setFrom('bekmirzo@bekmirzo.com', 'Запрос в техническую поддержку');
// $mail->setFrom('sent@upstroke.ru', 'Запрос в техническую поддержку');
// $mail->setFrom('up.stroke-clients@mail.ru', 'Запрос в техническую поддержку');
// $mail->addAddress('up.stroke-clients@mail.ru');
// $mail->addAddress('ivi@iwaygroup.ru');
$mail->addAddress('i-way@internet.ru');

$mail->Subject = 'Запрос в техническую поддержку';

$body = '<h1>Запрос в техническую поддержку</h1>';

if (trim(!empty($_POST['fullname']))) {
	$body .= '<p><strong>Имя:</strong> ' . $_POST['fullname'] . '</p>';
} else {
	$message = 'Ошибка';
	$response = ['message' => $message];
	header('Content-type: application/json');
	echo json_encode($response);
	exit;
}
if (trim(!empty($_POST['email']))) {
	$body .= '<p><strong>E-mail:</strong> ' . $_POST['email'] . '</p>';
}
if (trim(!empty($_POST['phone']))) {
	$body .= '<p><strong>Номер:</strong> ' . $_POST['phone'] . '</p>';
}
if (trim(!empty($_POST['text']))) {
	$body .= '<p><strong>Текст:</strong> ' . $_POST['text'] . '</p>';
}
if (trim(!empty($_POST['connection']))) {
	$body .= '<p><strong>Связь:</strong> ' . $_POST['connection'] . '</p>';
}


if (!empty($_FILES['file']['tmp_name'])) {
	//путь загрузки файла
	$filePath = __DIR__ . "/tempfiles/" . $_FILES['file']['name'];
	// $filePath = __DIR__ . "/files/sendmail/attachments/" . $_FILES['file']['name'];
	//грузим файл
	if (copy($_FILES['file']['tmp_name'], $filePath)) {
		$fileAttach = $filePath;
		$body .= '<p><strong>Файл в приложении</strong>';
		$mail->addAttachment($fileAttach);
	}
}

$mail->Body = $body;

if (!$mail->send()) {
	$message = 'Ошибка';
} else {
	$message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
