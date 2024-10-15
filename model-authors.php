<?php
function selectAuthors() {
  
        $conn = get_db_connection();
        $stmt = $conn->prepare('SELECT AID, FName, LName, Suffix, DOB, Country_of_Origin FROM author');
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}

function insertAuthors($aFName, $aLName, $aSuffix, $aDOB, $aCountry_of_Origin) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO author (FName, LName, Suffix, DOB, Country_of_Origin) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$aFName, $aLName, $aSuffix, $aDOB, $aCountry_of_Origin);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

function updateBorrowers($aFName, $aLName, $aSuffix, $aDOB, $aCountry_of_Origin) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE author SET FName = ?, LName = ?, Suffix = ?, DOB = ?, Country_of_Origin = ? WHERE AID = ?)");
        $stmt->bind_param("sssss",$aFName, $aLName, $aSuffix, $aDOB, $aCountry_of_Origin);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}
function deleteBorrowers($AID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE from author WHERE AID = ?");
        $stmt->bind_param("i",$AID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

?>
