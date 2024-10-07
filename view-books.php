<h1>Loans</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>Book ID</th>
    <th>Book Title</th>
    <th>Author(s)</th>
    <th>Genre ID</th>
    <th>Publication Date</th>
      </tr>
    </thead>
    <tbody>  
<?php
include "model-loans-by-borrower.php";
while ($book = $books->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $book['BID']; ?></td>
    <td><?php echo $book['BookTitle']; ?></td>
    <td><?php echo $book['AID']; ?></td>
    <td><?php echo $book['GID']; ?></td>
    <td><?php echo $book['PubDate']; ?></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
