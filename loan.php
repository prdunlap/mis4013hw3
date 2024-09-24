<? php
require_once("utility-db.php");
require_once("model-loans.php");

$pageTitle = "Loans";
include "view-header.php";
$loans = selectLoans();
include "view-loans.php";
include "view-footer.php";
?>
