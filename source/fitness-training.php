<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Fitness training";

$page_content = include_template("fitness-training.php", [
    "faculties" => $faculties
]);

$layout_content = include_template("layout-faculty.php", ["content" => $page_content, "page_title" => $page_title, "faculty" => $faculties["fitness-training"]["nav"]]);

print($layout_content);
