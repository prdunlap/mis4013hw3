<?php 
require_once("utility-db.php");
require_once("model-copies-by-loan.php");

$pageTitle = "Copies by Loan";
include "view-header.php";
$copies = selectCopiesByLoan($_GET['cid']);
include "view-copies-by-loan.php";
include "view-footer.php";
?>
