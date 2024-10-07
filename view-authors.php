<h1>Authors</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>Author ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Suffix</th>
    <th>DOB</th>
    <th>Country of Origin</th>
        <th>Author's Works</th>
      </tr>
    </thead>
    <tbody>  
<?php
while ($author = $authors->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $author['AID']; ?></td>
    <td><?php echo $author['FName']; ?></td>
    <td><?php echo $author['LName']; ?></td>
    <td><?php echo $author['Suffix']; ?></td>
    <td><?php echo $author['DOB']; ?></td>
    <td><?php echo $author['Country_of_Origin']; ?></td>
  <td>
      <form action="author-information.php" method="POST">
        <input type="hidden" name="aid" value="<?php echo $author['AID']; ?>">
        <button type="submit">Books</button>    
  </td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
