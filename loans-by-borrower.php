<?php 
require_once("utility-db.php");
require_once("model-loans-by-instructor.php");

$pageTitle = "Loans by Borrower";
include "view-header.php";
$authors = selectLoansByBorrower($_GET['lid']);
include "view-loans-by-borrower.php";
include "view-footer.php";
?>
