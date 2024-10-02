<?php
function selectLoans() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT LID, BorrowerID, CheckoutDate, DueDate FROM loan");
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
