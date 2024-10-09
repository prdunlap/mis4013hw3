<?php
function selectBooks() 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT BID, GID, Title, PubDate, LID FROM book");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;

}

function insertBooks($bGID, $bTitle, $bPubDate, $bLID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO book (GID, Title, Pubdate, LID) VALUES (?,?,?,?)");
        $stmt->bind_param("isdi",$bGID, $bTitle, $bPubDate, $bLID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}


?>
