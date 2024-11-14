<?php 
require_once("utility-db.php");
require_once("model-genres.php");

$pageTitle = "Genres";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertGenres($_POST['GenreName'])) {
    echo '<div class="alert alert-success" role="alert">
  Genre Added </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
    case "Edit":
    if (updateGenres($_POST['GenreName'])) {
    echo '<div class="alert alert-success" role="alert">
  Genre Edited </div>';
    } else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
      break;
    case "Delete":
    if (deleteGenres($_POST['GID'])) {
    echo '<div class="alert alert-success" role="alert">
  Genre Deleted </div>';
} else {
  echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
      break;
  }
}

$genres = selectGenres();
include "view-genres.php";
include "view-footer.php";
?>
