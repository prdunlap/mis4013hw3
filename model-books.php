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

function selectGenres() {
     $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT GID FROM genre");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}

function selectLoans() {
     $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT LID FROM loan");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}

function insertBooks($bGID, $bTitle, $bPubDate, $bLID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO book (GID, Title, Pubdate, LID) VALUES (?,?,?,?)");
        $stmt->bind_param("issi",$bGID, $bTitle, $bPubDate, $bLID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

function updateBooks($bGID, $bTitle, $bPubDate, $bLID, $BID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE book SET GID = ?, Title = ?, Pubdate = ?, LID = ? WHERE BID = ?");
        $stmt->bind_param("issii",$bGID, $bTitle, $bPubDate, $bLID, $BID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}
function deleteBooks($BID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE from book WHERE BID = ?");
        $stmt->bind_param("i",$BID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

?>
