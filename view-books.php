<h1>Books</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>Book ID</th>
    <th>Genre ID</th>
    <th>Title</th>
    <th>Publication Date</th>
    <th>Loan IDe</th>
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
