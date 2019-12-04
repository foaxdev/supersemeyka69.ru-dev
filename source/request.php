<?php
require_once("helpers.php");
require_once("PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'supersemeyka69@yandex.ru';
$mail->Password = 'Super_69';

$faculties = array(
    "Английский язык",
    "Актерское мастерство",
    "Творческая мастерская",
    "Общеобразовательная гимнастика",
    "Кикбоксинг",
    "Детский фитнес",
    "Подготовка к школе",
    "Весёлая наука",
    "Карапузики",
    "Пилатес",
    "Свободные родители"
);

$required_fields = ["name", "tel", "faculty", "email"];
$errors = [];

function getPostValue($name) {
    return $_POST[$name] ? $_POST[$name] : "";
}

function isFacultySelected($faculty) {
    return $_POST["faculty"] == $faculty;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = "Поле не заполнено";
        }
    }

    foreach ($_POST as $key => $value) {
        if ($key == "email" && !$errors["email"]) {
            if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $errors[$key] = "Email должен быть корректным";
            }
        }

        if ($key == "faculty") {
            if (!in_array($_POST[$key], $faculties)) {
                $errors[$key] = "Направление не существует";
            }
        }
    }

    if (count($errors) === 0) {
        $user_name = $_POST["name"];
        $faculty = $_POST["faculty"];
        $user_phone = $_POST["tel"];
        $user_email = $_POST["email"];
        $text = $_POST["text"];
        $text_for_user = "Ваша заявка принята. Спасибо за обращение!";
        $text_subject = 'Заявка';

        $user_text = 'Сообщение от пользователя: ' . $text;
        if (sizeof($text) == 0) {
            $user_text = '';
        }
        $text_message = wordwrap("Имя: " . $user_name . "\r\n" . "Желаемое направление: " . $faculty . "\r\n" . "Телефон: " . $user_phone . "\r\n" . "Email: " . $user_email . "\r\n" . $user_text, 70);

        $mail->setFrom('supersemeyka69@yandex.ru', 'supersemeyka');
        $mail->addAddress('supersemeyka69@yandex.ru', 'supersemeyka');
        $mail->Subject = $text_subject;
        $mail->msgHTML($text_message);
        $mail->send();

        $mail->addAddress($user_email , 'supersemeyka');
        $mail->msgHTML($text_for_user);
        $mail->send();

        header("Location: /");
    }
}

$form_content = include_template("form.php", [
    "arr_faculties" => $faculties,
    "errors" => $errors
]);

print($form_content);
