<?php 
require_once("utility-db.php");
require_once("model-books-by-author.php");

$pageTitle = "Book Information";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertBookAuthor($_POST['BID'], $_POST['AID'])) {
    echo '<div class="alert alert-success" role="alert">
  Author Added </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
    case "Edit":
    if (updateBookAuthor($_POST['BID'], $_POST['AID'], $_POST['BAID'])) {
    echo '<div class="alert alert-success" role="alert">
  Author Edited </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
    case "Delete":
    if (deleteBookAuthor($_POST['BAID'])) {
    echo '<div class="alert alert-success" role="alert">
  Record Deleted in BookAuthor Table </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
      break;
  }
}

$bookauthors = selectBooks();
$ba = selectAuthorsByBook($_POST['BID']);

include "view-books-with-authors.php";
include "view-footer.php";
?>
