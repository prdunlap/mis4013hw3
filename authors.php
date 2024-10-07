<?php 
require_once("utility-db.php");
require_once("model-authors.php");

$pageTitle = "Books";
include "view-header.php";
$authors = selectAuthors();
include "view-authors.php";
include "view-footer.php";
?>
