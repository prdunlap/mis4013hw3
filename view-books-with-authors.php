<h1>Author Books</h1>
<?php
while ($book = $books->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $book['Title']; ?></td></h5>
      <p class="card-text">
  <?php 
      $bookauthors = selectBooksByAuthor($book['BID']);
      while ($bookauthor = $bookauthors->fetch_assoc()) {
        ?>
        
      <?php
      }
  ?>
      </p>
      <p class="card-text"><td>Publication Date: <?php echo $book['PubDate']; ?></td></p>
    </div>
  </div>
<?php 
}
?>
