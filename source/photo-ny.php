<?php
require_once("helpers.php");

$page_title = "Фото";
$photo_quantity = 29;

$page_content = include_template("photo-ny.php", [
    "photo_quantity" => $photo_quantity
]);

$layout_content = include_template("layout-empty.php", ["content" => $page_content, "page_title" => $page_title]);

print($layout_content);
