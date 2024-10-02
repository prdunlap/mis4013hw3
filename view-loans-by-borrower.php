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
    <td><?php echo $loansby['LID']; ?></td>
    <td><?php echo $loansby['BorrowerID']; ?></td>
    <td><?php echo $loansby['CheckoutDate']; ?></td>
    <td><?php echo $loansby['DueDate']; ?></td>
    <td><?php echo $loansby['FName']; ?></td>
    <td><?php echo $loansby['LName']; ?></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
