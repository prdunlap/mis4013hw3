<h1>Loans</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>LID</th>
    <th>BorrowerID</th>
    <th>CheckoutDate</th>
    <th>DueDate</th>
      </tr>
    </thead>
    <tbody>  
<?php
while ($loan = $loan->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $loan['LID']; ?></td>
    <td><?php echo $loan['BorrowerID']; ?></td>
    <td><?php echo $loan['CheckoutDate']; ?></td>
    <td><?php echo $loan['DueDate']; ?></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
