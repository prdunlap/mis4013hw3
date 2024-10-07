<?php 
require_once("utility-db.php");
require_once("model-books.php");

$pageTitle = "Books";
include "view-header.php";
$borrowers = selectBorrowers();
include "view-books.php";
include "view-footer.php";
?>
