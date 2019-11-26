<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Свободные родители";

$page_content = include_template("parents.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["parents"]["nav"]]);

print($layout_content);
