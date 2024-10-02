<?php
function selectCopiesByLoan($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT loan.LID, loan.BorrowerID, loan.CheckoutDate, loan.DueDate, borrower.FName, borrower.LName FROM loan JOIN borrower ON loan.BorrowerID = borrower.BorrowerID");
         $stmt->bind_param("i", $iid);
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
