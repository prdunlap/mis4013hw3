<?php 
require_once("utility-db.php");
require_once("model-books-by-author.php");

$pageTitle = "Book Information";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertAuthors($_POST['FName'], $_POST['LName'], $_POST['Suffix'], $_POST['DOB'], $_POST['Country_of_Origin'])) {
    echo '<div class="alert alert-success" role="alert">
  Author Added </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
    case "Edit":
    if (updateAuthors($_POST['FName'], $_POST['LName'], $_POST['Suffix'], $_POST['DOB'], $_POST['Country_of_Origin'], $_POST['AID'])) {
    echo '<div class="alert alert-success" role="alert">
  Author Edited </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
    case "Delete":
    if (deleteAuthors($_POST['AID'])) {
    echo '<div class="alert alert-success" role="alert">
  Author Deleted </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
      break;
  }
}

$bookauthors = selectBooks();
include "view-books-with-authors.php";
include "view-footer.php";
?>
