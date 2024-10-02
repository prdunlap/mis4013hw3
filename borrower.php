<?php 
require_once("utility-db.php");
require_once("model-borrower.php");

$pageTitle = "Borrowers";
include "view-header.php";
$borrowers = selectBorrowers();
include "view-borrowers.php";
include "view-footer.php";
?>
