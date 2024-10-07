<?php 
require_once("utility-db.php");
require_once("model-books.php");

$pageTitle = "Books";
include "view-header.php";
$books = selectBooks();
include "view-books.php";
include "view-footer.php";
?>
