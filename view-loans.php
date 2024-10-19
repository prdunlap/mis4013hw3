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
    <td>
      <?php include "view-loans-editform.php"; ?>
    </td>
      <td>
          <form action="" method="POST">
          <input type="hidden" name="LID" value="<?php echo $loan['LID']; ?>">
          <input type="hidden" name="actionType" value="Delete" onclick="return confirm('Are you sure?');">
          <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg>
          </button>    
        </form>
      </td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
