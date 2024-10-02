<?php 
require_once("utility-db.php");
require_once("model-loans-with-borrowers.php");

$pageTitle = "Loans";
include "view-header.php";
$loans = selectLoans();
include "view-loans-with-borrowers.php";
include "view-footer.php";
?>
