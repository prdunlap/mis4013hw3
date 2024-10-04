<?php
function selectBooksByLoan($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT b.BID, l.LID, b.Title FROM book b JOIN loan l ON b.LID = l.LID WHERE b.lid=?");
         $stmt->bind_param("i", $lid);
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
