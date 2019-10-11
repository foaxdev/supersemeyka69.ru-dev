<?php
require_once("helpers.php");
require_once("faculties.php");

$page_title = "Фото";
$photo_quantity = 42;

$page_content = include_template("photo-gallery.php", [
    "photo_quantity" => $photo_quantity
]);

$layout_content = include_template("layout-empty.php", ["content" => $page_content, "page_title" => $page_title]);

print($layout_content);
