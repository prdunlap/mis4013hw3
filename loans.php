<?php 
require_once("utility-db.php");
require_once("model-loans.php");

$pageTitle = "Loans";
include "view-header.php";
include "view-loans.php";
$loans = selectLoans();
include "view-footer.php";
?>
