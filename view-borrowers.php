<h1>Borrowers</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>BorrowerID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>DOB</th>
    <th>email</th>
    <th>phone</th>
      </tr>
    </thead>
    <tbody>  
<?php
while ($borrower = $borrowers->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $borrower[BorrowerID]; ?></td>
    <td><?php echo $borrower[FName]; ?></td>
    <td><?php echo $borrower[LName]; ?></td>
    <td><?php echo $borrower[DOB]; ?></td>
    <td><?php echo $borrower[Email]; ?></td>
    <td><?php echo $borrower[Phone Number]; ?></td>
    <td>
        <form method="post" action="loans-by-borrower.php">
          <input type ="hidden" name="lid" value="<?php echo $loan[loan_lid]; ?>">
          <button type="submit" class="btn btn-primary">Borrower</button>
        </form>
    </td>
    
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
