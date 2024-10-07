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


?>
