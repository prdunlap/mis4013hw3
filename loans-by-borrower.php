<?php 
require_once("utility-db.php");
require_once("model-loans-by-borrower.php");

$pageTitle = "Loans by Borrower";
include "view-header.php";
$loansby = selectLoansByBorrower($_GET['bid']);
include "view-loans-by-borrower.php";
include "view-footer.php";
?>
