<?php
function selectBorrowers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT BorrowerID, FName, LName, DOB, email, phone FROM borrower");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
