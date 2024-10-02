<h1>Loans with Borrowers</h1>
<div class="card-group">
<?php
$sql = "SELECT LID, BorrowerID, CheckoutDate, DueDate FROM loans";
include "model-loans.php";
$loans = $conn->query($sql);
while ($loan = $loans->fetch_assoc()) {
?> 
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $loan['BorrowerID']; ?></h5>
      <p class="card-text">
  <?php 
    $loans = selectLoansByBorrower($loan['LID']);
  while ($loan = $loans->fetch_assoc()) {
    ?>
     <li class="list-group-item"><?php echo $loanby['BorrowerID']; ?> - <?php echo $loanby['FName']; ?> <?php echo $loanby['LName']; ?> - <?php echo $loanby['DueDate']; ?></li>

        
<?php 
  }
  ?>
      
      </p>
      <p class="card-text"><small class="text-body-secondary"><?php echo $loan['BorrowerID']; ?></small></p>
    </div>
<?php 
}
?>
</div>
