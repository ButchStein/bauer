<?php
$to = 'butchbs1982@gmail.com';
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$text = $_POST['message'];



$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$message = '<table style="width:100%">
        <tr>
            <td>' . $firstname . '  ' . $lastname . '</td>
        </tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>Телефон: ' . $tel . '</td></tr>
        <tr><td>Сообщение: ' . $text . '</td></tr>
        
        
    </table>';

if (@mail($to, $email, $tel, $message, $headers)) {
	echo "Ваше сообщение успешно отправлено!";
} else {
	echo 'Ошибка отправки';
}
