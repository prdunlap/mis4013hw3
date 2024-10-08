<?php 
require_once("utility-db.php");
require_once("model-books-by-author.php");

$pageTitle = "Book Information";
include "view-header.php";
$bookauthors = selectBooks();
$bookinformation = selectAuthorsByBook($bid);
include "view-books-with-authors.php";
include "view-footer.php";
?>
