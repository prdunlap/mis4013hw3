<?php 
require_once("utility-db.php");
require_once("model-authorinformation.php");

$pageTitle = "Author Information";
include "view-header.php";
$authorsinfo = selectAuthorInfo($_POST['AID']);
include "view-authorinformation.php";
include "view-footer.php";
?>
