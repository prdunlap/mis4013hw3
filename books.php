<?php 
require_once("utility-db.php");
require_once("model-books.php");

$pageTitle = "Books";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertBooks($_POST['GID'], $_POST['Title'], $_POST['pubDate'], $_POST['LID']);
    echo '<div class="alert alert-success" role="alert">
  Book Added </div>';
  }
  else {
  echo '<div class="alert alert-danger" role="alert">
  Error
</div>'
  }
      break;
  }
}
$books = selectBooks();
include "view-books.php";
include "view-footer.php";
?>
