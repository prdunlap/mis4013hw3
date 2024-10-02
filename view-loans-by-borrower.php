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
while ($loanby = $loansby->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $loanby['LID']; ?></td>
    <td><?php echo $loanby['BorrowerID']; ?></td>
    <td><?php echo $loanby['CheckoutDate']; ?></td>
    <td><?php echo $loanby['DueDate']; ?></td>
    <td><?php echo $loanby['FName']; ?></td>
    <td><?php echo $loanby['LName']; ?></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
