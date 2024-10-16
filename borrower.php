<?php 
require_once("utility-db.php");
require_once("model-borrower.php");

$pageTitle = "Borrowers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertBorrowers($_POST['FName'], $_POST['LName'], $_POST['DOB'], $_POST['email'], $_POST['phone'])) {
    echo '<div class="alert alert-success" role="alert">
  Borrower Added </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    case "Delete":
    if (deleteBorrowers($_POST['BorrowerID'])) {
    echo '<div class="alert alert-success" role="alert">
  Borrower Deleted </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
      break;
  }
}

$borrowers = selectBorrowers();
include "view-borrowers.php";
include "view-footer.php";
?>
