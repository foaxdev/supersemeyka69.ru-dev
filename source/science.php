<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Весёлая наука";

$page_content = include_template("science.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["science"]["nav"]]);

print($layout_content);
