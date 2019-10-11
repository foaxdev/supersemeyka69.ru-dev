<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Общеобразовательная гимнастика";

$page_content = include_template("gymnastics.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["gymnastics"]["nav"]]);

print($layout_content);
