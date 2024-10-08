<h1>Author Books</h1>
<div class="card-group">
<?php
while ($bookauthor = $bookauthors->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $bookauthor['Title']; ?></td></h5>
      <p class="card-text">
  <?php 
      $bookinformation = selectAuthorsByBook($bookauthor['bid']);
  while ($bookinformation = $bookinfos->fetch_assoc()) {
    ?>

      <?php  
  }
  ?>
      </p>
      <p class="card-text"><td>Publication Date: <?php echo $bookinformation['book.PubDate']; ?></td></p>
    </div>
  </div>
<?php 
}
?>  
</div>
