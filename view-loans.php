<h1>Loans</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>LID</th>
    <th>BorrowerID</th>
    <th>CheckoutDate</th>
    <th>DueDate</th>
    <th>Borrower</th>
      </tr>
    </thead>
    <tbody>  
<?php
include "model-loans-by-borrower.php";
while ($loan = $loans->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $loan['LID']; ?></td>
    <td><?php echo $loan['BorrowerID']; ?></td>
    <td><?php echo $loan['CheckoutDate']; ?></td>
    <td><?php echo $loan['DueDate']; ?></td>
    <td><a href="loans-by-borrower.php?bid=<?php echo $loan['LID']; ?>">Borrowers</a></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
