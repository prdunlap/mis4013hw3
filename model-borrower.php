<?php
function selectBorrowers() {
  
        $conn = get_db_connection();
        $stmt = $conn->prepare('SELECT BorrowerID, FName, LName, DOB, email, phone FROM borrower');
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}


?>
