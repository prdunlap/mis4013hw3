<h1>Loans</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
    <th>AID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Suffix</th>
      <th>DOB</th>
      <th>Country of Origin</th>
      </tr>
    </thead>
    <tbody>  
<?php
$sql = "SELECT AID, FName, LName, Suffix, DOB, Country_of_Origin FROM 'author'";

$loans = $conn->query($sql);
while ($loan = $authors->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $authors['AID']; ?></td>
    <td><?php echo $authors['FName']; ?></td>
    <td><?php echo $authors['LName']; ?></td>
    <td><?php echo $authors['Suffix']; ?></td>
    <td><?php echo $authors['DOB']; ?></td>
    <td><?php echo $authors['Country_of_Origin']; ?></td>
  </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
