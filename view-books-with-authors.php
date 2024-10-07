<h1>Author Books</h1>
<?php
while ($bookauthor = $bookauthors->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $book['Title']; ?></td></h5>
      <p class="card-text">
  <?php 
      $bookauthors = selectAuthorsByBook($book['BID']);
      while ($bookauthor = $bookauthors->fetch_assoc()) {
        ?>
        <td><?php echo $authorinfo['AID']; ?></td>
    <td><?php echo $authorinfo['FName']; ?></td>
    <td><?php echo $authorinfo['LName']; ?></td>
    <td><?php echo $authorinfo['Suffix']; ?></td>
    <td><?php echo $authorinfo['Title']; ?></td>
    <td><?php echo $authorinfo['PubDate']; ?></td>
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
