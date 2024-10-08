<h1>Author Books</h1>
<?php
while ($bookauthor = $bookauthors->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $bookauthor['Title']; ?></td></h5>
      <p class="card-text">
  <?php 
      while ($bookinformation = $bookauthors->fetch_assoc()) {
        ?>
    <td><?php echo $bookinformation['author.FName']; ?></td>
    <td><?php echo $bookinformation['author.LName']; ?></td>
    <td><?php echo $bookinformation['author.Suffix']; ?></td>
    <td><?php echo $bookinformation['book.PubDate']; ?></td>
      <?php
      }
  ?>
      </p>
      <p class="card-text"><td>Publication Date: <?php echo $bookauthor['book.PubDate']; ?></td></p>
    </div>

<?php 
}
?>  
</div>
