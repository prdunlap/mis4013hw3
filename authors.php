<?php 
require_once("utility-db.php");
require_once("model-authors.php");

$pageTitle = "Authors";
include "view-header.php";
include "view-authors.php";
$authors = selectAuthors();
include "view-footer.php";
?>
