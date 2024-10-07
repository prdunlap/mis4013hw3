<h1>Author Information</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>Author ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Suffix</th>
    <th>Book Title(s)</th>
    <th>Publication Date</th>
      </tr>
    </thead>
    <tbody>  
<?php
while ($authorinfo = $authorsinfo->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $authorinfo['AID']; ?></td>
    <td><?php echo $authorinfo['FName']; ?></td>
    <td><?php echo $authorinfo['LName']; ?></td>
    <td><?php echo $authorinfo['Suffix']; ?></td>
    <td><?php echo $authorinfo['Title']; ?></td>
    <td><?php echo $authorinfo['PubDate']; ?></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
