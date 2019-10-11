<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Кикбоксинг";

$page_content = include_template("kickboxing.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["kickboxing"]["nav"]]);

print($layout_content);
