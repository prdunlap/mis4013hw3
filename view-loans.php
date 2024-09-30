<h1>Loans</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>LID</th>
    <th>BorrowerID</th>
    <th>CheckoutDate</th>
    <th>DueDate</th>
        <th></th>
      </tr>
    </thead>
    <tbody>  
<?php
$sql = "SELECT LID, BorrowerID, CheckoutDate, DueDate FROM loans";
include "model-loans.php";
$loans = $conn->query($sql);
while ($loan = $loans->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $loan['LID']; ?></td>
    <td><?php echo $loan['BorrowerID']; ?></td>
    <td><?php echo $loan['CheckoutDate']; ?></td>
    <td><?php echo $loan['DueDate']; ?></td>
    <td><a href="loans-by-borrower.php?id=<?php echo $loan['loan_LID']; ?>"></a>Borrowers</td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
