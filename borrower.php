<?php 
require_once("utility-db.php");
require_once("model-borrower.php");

$pageTitle = "Borrowers";
include "view-header.php";
include "view-borrowers.php";
$borrowers = selectBorrowers();
include "view-footer.php";
?>
