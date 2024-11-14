<?php
function selectGenres() {
  
        $conn = get_db_connection();
        $stmt = $conn->prepare('SELECT GID, GenreName FROM genre');
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}

function insertGenres($gGenreName) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO genre (GenreName) VALUES (?)");
        $stmt->bind_param("s",$gGenreName);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

function updateGenres($gGenreName, $GID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE genre SET GenreName = ? WHERE GID = ?");
        $stmt->bind_param("si",$gGenreName, $GID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}
function deleteGenres($GID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE from genre WHERE GID = ?");
        $stmt->bind_param("i",$GID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

?>
