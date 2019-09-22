<?php
require_once("helpers.php");

$faculties = array(
    "Английский язык",
    "Актерское мастерство",
    "Творческая мастерская",
    "Fitness training",
    "Общеобразовательная гимнастика",
    "Кикбоксинг",
    "Детский фитнес",
    "Подготовка к школе",
    "Весёлая наука"
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

        $user_text = 'Сообщение от пользователя: ' . $text;
        if (sizeof($text) == 0) {
            $user_text = '';
        }
        $text_message = wordwrap("Имя: " . $user_name . "\r\n" . "Желаемое направление: " . $faculty . "\r\n" . "Телефон: " . $user_phone . "\r\n" . "Email: " . $user_email . "\r\n" . $user_text, 70);


        mail("irinamist4@gmail.com", "Заявка на запись", $text_message);
        mail($user_email, "Суперсемейка", $text_for_user);
        header("Location: /");
    }
}

$form_content = include_template("form.php", [
    "arr_faculties" => $faculties,
    "errors" => $errors
]);

print($form_content);
