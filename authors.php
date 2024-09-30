<?php 
require_once("utility-db.php");
require_once("model-author.php");

$pageTitle = "Authors";
include "view-header.php";
include "view-loans.php";
$loans = selectAuthors();
include "view-footer.php";
?>
