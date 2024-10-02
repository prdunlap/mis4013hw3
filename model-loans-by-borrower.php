<?php
function selectLoansByBorrower() {

        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT loan.LID, loan.BorrowerID, loan.CheckoutDate, loan.DueDate, borrower.FName, borrower.LName FROM loan JOIN borrower ON loan.BorrowerID = borrower.BorrowerID");
         $stmt->bind_param();
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}
?>
