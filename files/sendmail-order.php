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


$mail->setFrom('send@iwaygroup.ru', 'Заявка на подключение');
// $mail->setFrom('dp@iwaygroup.ru', 'Заявка на подключение');
// $mail->setFrom('bekmirzo@bekmirzo.com', 'Заявка на подключение');
// $mail->setFrom('sent@upstroke.ru', 'Заявка на подключение');
// $mail->setFrom('up.stroke-clients@mail.ru', 'Заявка на подключение');
// $mail->addAddress('up.stroke-clients@mail.ru');
// $mail->addAddress('ivi@iwaygroup.ru');
$mail->addAddress('i-way@internet.ru');

$mail->Subject = 'Заявка на подключение';

$body = '<h1>Заявка на подключение</h1>';

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

if (trim(!empty($_POST['orderOption']))) {
    $body .= '<p><strong>Лицо:</strong> ' . $_POST['orderOption'] . '</p>';
}
if (trim(!empty($_POST['individuals']))) {
    $body .= '<p><strong>Услуга:</strong> ' . $_POST['individuals'] . '</p>';
}
if (trim(!empty($_POST['entity']))) {
    $body .= '<p><strong>Услуга:</strong> ' . $_POST['entity'] . '</p>';
}
if (trim(!empty($_POST['city']))) {
    $body .= '<p><strong>Город:</strong> ' . $_POST['city'] . '</p>';
}
if (trim(!empty($_POST['street']))) {
    $body .= '<p><strong>Улица:</strong> ' . $_POST['street'] . '</p>';
}
if (trim(!empty($_POST['building']))) {
    $body .= '<p><strong>Дом:</strong> ' . $_POST['building'] . '</p>';
}
if (trim(!empty($_POST['corp']))) {
    $body .= '<p><strong>Корпус:</strong> ' . $_POST['corp'] . '</p>';
}
if (trim(!empty($_POST['apartment']))) {
    $body .= '<p><strong>Квартира:</strong> ' . $_POST['apartment'] . '</p>';
}
if (trim(!empty($_POST['entrance']))) {
    $body .= '<p><strong>Подъезд:</strong> ' . $_POST['entrance'] . '</p>';
}
if (trim(!empty($_POST['floor']))) {
    $body .= '<p><strong>Этаж:</strong> ' . $_POST['floor'] . '</p>';
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
