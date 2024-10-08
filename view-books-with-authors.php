<h1>Author Books</h1>
<?php
while ($bookauthor = $bookauthors->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $bookauthor['book.Title']; ?></td></h5>
      <p class="card-text">
  <?php 
      while ($bookauthor = $bookauthors->fetch_assoc()) {
        ?>
    <td><?php echo $bookauthor['FName']; ?></td>
    <td><?php echo $bookauthor['LName']; ?></td>
    <td><?php echo $bookauthor['Suffix']; ?></td>
    <td><?php echo $bookauthor['book.PubDate']; ?></td>
      <?php
      }
  ?>
      </p>
      <p class="card-text"><td>Publication Date: <?php echo $bookauthor['book.PubDate']; ?></td></p>
    </div>
  </div>
<?php 
}
?>
