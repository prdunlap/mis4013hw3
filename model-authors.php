<?php
function selectAuthors() {
  
        $conn = get_db_connection();
        $stmt = $conn->prepare('SELECT AID, FName, LName, Suffix, DOB, Country_of_Origin FROM author');
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}


?>
