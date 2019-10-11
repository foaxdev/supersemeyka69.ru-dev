<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Карапузики";

$page_content = include_template("karapuziki.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["karapuziki"]["nav"]]);

print($layout_content);
