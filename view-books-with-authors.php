<h1>Author Books</h1>
<div class="card-group">
<?php
while ($bookauthor = $bookauthors->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $bookauthor['Title']; ?></h5>
      <p class="card-text">
   <ul class="list-group">
  <?php 
      $bookinformation = selectAuthorsByBook($bookauthor['book.BID']);
  while ($bookinfos = $bookinformation->fetch_assoc()) {
    ?>
   
      <li class="list-group-item">Book ID: <?php echo $bookinfos['BID']; ?></li>
      <li class="list-group-item">Genre ID: <?php echo $bookinfos['GID']; ?></li>
      <li class="list-group-item">Author FName: <?php echo $bookinfos['FName']; ?></li>
      <li class="list-group-item">Author LName: <?php echo $bookinfos['LName']; ?></li>
      <li class="list-group-item">Author Country of Origin: <?php echo $bookinfos['Country_of_Origin']; ?></li>

      <?php  
  }
  ?>
  </ul>
      </p>
      <p class="card-text">Publication Date: <?php echo $bookauthor['book.PubDate']; ?></p>
    </div>
  </div>
<?php 
}
?>  
</div>
