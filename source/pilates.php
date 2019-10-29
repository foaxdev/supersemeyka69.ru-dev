<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Пилатес";

$page_content = include_template("pilates.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["pilates"]["nav"]]);

print($layout_content);
