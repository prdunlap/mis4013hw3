<select class="form-select" id="AID" name="AID">
  <?php while ($authorItem =$authorList->fetch_assoc()) {
    ?>
<option value="<?php echo $authorItem['AID']; ?>"><?php echo $authorItem['LName']</option>
  <?php
  } 
?>
  
</select>
