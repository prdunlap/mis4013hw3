<?php 
require_once("utility-db.php");
require_once("model-loans.php");

$pageTitle = "Loans";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertLoans($_POST['BorrowerID'], $_POST['CheckoutDate'])) {
    echo '<div class="alert alert-success" role="alert">
  Loan Added </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
    case "Edit":
    if (updateLoans($_POST['BorrowerID'], $_POST['CheckoutDate'], $_POST['LID'])) {
    echo '<div class="alert alert-success" role="alert">
  Loan Edited </div>';
    } else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
      break;
    case "Delete":
    if (deleteLoans($_POST['LID'])) {
    echo '<div class="alert alert-success" role="alert">
  Loan Deleted </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
      break;
  }
}


$loans = selectLoans();
include "view-loans.php";
include "view-footer.php";
?>
