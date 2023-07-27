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


$mail->setFrom('send@iwaygroup.ru', 'Поверка на подключение');
// $mail->setFrom('bekmirzo@bekmirzo.com', 'Поверка на подключение');
// $mail->setFrom('sent@upstroke.ru', 'Поверка на подключение');
// $mail->setFrom('up.stroke-clients@mail.ru', 'Поверка на подключение');
// $mail->addAddress('up.stroke-clients@mail.ru');
// $mail->addAddress('ivi@iwaygroup.ru');
$mail->addAddress('i-way@internet.ru');

$mail->Subject = 'Поверка на подключение';

$body = '<h1>Поверка на подключение</h1>';

if (trim(!empty($_POST['adressOption']))) {
    $body .= '<p><strong>Куда:</strong> ' . $_POST['adressOption'] . '</p>';
}

if (trim(!empty($_POST['fio']))) {
	$body .= '<p><strong>ФИО:</strong> ' . $_POST['fio'] . '</p>';
}
if (trim(!empty($_POST['city']))) {
	$body .= '<p><strong>Город:</strong> ' . $_POST['city'] . '</p>';
} else {
	$message = 'Ошибка';
	$response = ['message' => $message];
	header('Content-type: application/json');
	echo json_encode($response);
	exit;
}
if (trim(!empty($_POST['street']))) {
	$body .= '<p><strong>Улица:</strong> ' . $_POST['street'] . '</p>';
}
if (trim(!empty($_POST['building']))) {
	$body .= '<p><strong>Дом:</strong> ' . $_POST['building'] . '</p>';
}
if (trim(!empty($_POST['phone']))) {
	$body .= '<p><strong>Номер телефона:</strong> ' . $_POST['phone'] . '</p>';
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