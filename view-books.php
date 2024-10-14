<div class="row">
  <div class="col"><h1>Books</h1></div>
  <div class="col-auto">
   <?php 
include "view-books-form.php";
?>
  </div> 
</div>

<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>Book ID</th>
    <th>Genre ID</th>
    <th>Title</th>
    <th>Publication Date</th>
    <th>Loan ID</th>
      </tr>
    </thead>
    <tbody>  
<?php
while ($book = $books->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $book['BID']; ?></td>
    <td><?php echo $book['GID']; ?></td>
    <td><?php echo $book['Title']; ?></td>
    <td><?php echo $book['PubDate']; ?></td>
    <td><?php echo $book['LID']; ?></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
