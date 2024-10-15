<?php 
require_once("utility-db.php");
require_once("model-authors.php");

$pageTitle = "Authors";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertBooks($_POST['FName'], $_POST['LName'], $_POST['Suffix'], $_POST['DOB'], $_POST['Country_of_Origin'])) {
    echo '<div class="alert alert-success" role="alert">
  Book Added </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
      break;
  }
}

$authors = selectAuthors();
include "view-authors.php";
include "view-footer.php";
?>
