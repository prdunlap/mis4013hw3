<?php 
require_once("utility-db.php");
require_once("model-books-by-loan.php");

$pageTitle = "Books by Loan";
include "view-header.php";
$copies = selectBooksByLoan($_POST['lid']);
include "view-books-by-loan.php";
include "view-footer.php";
?>
