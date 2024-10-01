<h1>Loans by Borrower</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>LID</th>
    <th>BorrowerID</th>
    <th>Checkout Date</th>
    <th>Due Date</th>
    <th>First Name</th>
    <th>Last Name</th>
      </tr>
    </thead>
    <tbody>  
<?php
while ($borrower = $borrowers->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $loan['LID']; ?></td>
    <td><?php echo $borrower['BorrowerID']; ?></td>
    <td><?php echo $loan['CheckoutDate']; ?></td>
    <td><?php echo $loan['DueDate']; ?></td>
    <td><?php echo $borrower['FName']; ?></td>
    <td><?php echo $borrower['LName']; ?></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
