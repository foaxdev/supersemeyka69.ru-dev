<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Английский язык";

$page_content = include_template("english.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["english"]["nav"]]);

print($layout_content);
