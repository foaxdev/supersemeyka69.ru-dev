<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Творческая мастерская";

$page_content = include_template("creative-studio.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["creative-studio"]["nav"]]);

print($layout_content);
