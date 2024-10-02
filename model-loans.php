<?php
function selectLoans() 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT LID, BorrowerID, CheckoutDate, DueDate FROM loan");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;

}


?>
