<?php 
require_once("utility-db.php");
require_once("model-loans-by-borrower.php");

$pageTitle = "Loans by Borrower";
include "view-header.php";
include "view-loans-by-borrower.php";
$loansby = selectLoansByBorrower();
include "view-footer.php";
?>
