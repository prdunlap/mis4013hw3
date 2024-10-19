<?php
function selectBorrowers() {
  
        $conn = get_db_connection();
        $stmt = $conn->prepare('SELECT BorrowerID, FName, LName, DOB, email, phone FROM borrower');
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}
function insertBorrowers($boFName, $boLName, $boDOB, $boemail, $bophone) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO borrower (FName, LName, DOB, email, phone) VALUES (?,?,?,?,?)");
        $stmt->bind_param("ssssi",$boFName, $boLName, $boDOB, $boemail, $bophone);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

function updateBorrowers($boFName, $boLName, $boDOB, $boemail, $bophone, $BorrowerID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE borrower SET FName = ?, LName = ?, DOB = ?, email = ?, phone = ? WHERE BorrowerID = ?");
        $stmt->bind_param("ssssii",$boFName, $boLName, $boDOB, $boemail, $bophone, $BorrowerID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}
function deleteBorrowers($BorrowerID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE from borrower WHERE BorrowerID = ?");
        $stmt->bind_param("i",$BorrowerID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

?>
