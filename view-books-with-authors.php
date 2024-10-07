<h1>Author Books</h1>
<?php
while ($book = $books->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $book['Title']; ?></td></h5>
      <p class="card-text">
  <?php 
      $bookauthors = selectBooksByAuthor();
  ?>
      </p>
      <p class="card-text"><td>Publication Date: <?php echo $book['PubDate']; ?></td></p>
    </div>
  </div>
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
