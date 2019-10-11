<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Детский фитнес";

$page_content = include_template("kids-fitness.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["kids-fitness"]["nav"]]);

print($layout_content);
