<?php
require_once("helpers.php");
require_once("features.php");
require_once("faculties.php");
require_once("schedule.php");

$page_title = "Суперсемейка";

$page_content = include_template("main.php", [
    "features" => $features,
    "faculties" => $faculties,
    "schedule" => $schedule
]);

$layout_content = include_template("layout.php", ["content" => $page_content, "page_title" => $page_title]);

print($layout_content);
