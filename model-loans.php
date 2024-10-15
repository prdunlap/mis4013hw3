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

function insertLoans($lBorrowerID, $lCheckoutDate) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO author (BorrowerID, CheckoutDate) VALUES (?,?)");
        $stmt->bind_param("id",$lBorrowerID, $lCheckoutDate);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

function updateLoans($lBorrowerID, $lCheckoutDate) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE loan SET BorrowerID = ?, CheckoutDate = ? WHERE LID = ?)");
        $stmt->bind_param("id",$lBorrowerID, $lCheckoutDate);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}
function deleteLoans($LID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE from loan WHERE LID = ?");
        $stmt->bind_param("i",$LID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}
?>
