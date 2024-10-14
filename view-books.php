<div class="row">
  <div class="col"><h1>Books</h1></div>
  <div class="col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
    </svg>  
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
