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
while ($loan = $loans->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $loan['loan_lid'];?></td>
    <td><?php echo $loan['loan_BorrowerID'];?></td>
    <td><?php echo $loan['loan_DueDate'];?></td>
  </tr>
      <?php 
  
}
      ?>
    </tbody>
  </table>
</div>
