<h1>Author Books</h1>
<?php
while ($bookauthor = $bookauthors->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $bookauthor['Title']; ?></td></h5>
      <p class="card-text">
  <?php 
      $bookauthors = selectAuthorsByBook($bookauthors['BID']);
      while ($bookauthor = $bookauthors->fetch_assoc()) {
        ?>
        <td><?php echo $bookauthor['AID']; ?></td>
    <td><?php echo $bookauthor['FName']; ?></td>
    <td><?php echo $bookauthor['LName']; ?></td>
    <td><?php echo $bookauthor['Suffix']; ?></td>
    <td><?php echo $bookauthor['Title']; ?></td>
    <td><?php echo $bookauthor['PubDate']; ?></td>
      <?php
      }
  ?>
      </p>
      <p class="card-text"><td>Publication Date: <?php echo $bookauthor['PubDate']; ?></td></p>
    </div>
  </div>
<?php 
}
?>
