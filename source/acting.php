<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Актерское мастерство";

$page_content = include_template("acting.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["acting"]["nav"]]);

print($layout_content);
