<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Подготовка к школе";

$page_content = include_template("pre-school.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["pre-school"]["nav"]]);

print($layout_content);
