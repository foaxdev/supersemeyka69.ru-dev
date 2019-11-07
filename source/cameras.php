<?php
require_once("helpers.php");

$page_title = "Видеонаблюдение";

$page_content = include_template("cameras.php");
$layout_content = include_template("layout-empty.php", ["content" => $page_content, "page_title" => $page_title]);

print($layout_content);
