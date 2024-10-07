<?php
function selectBooks() 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM book");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;

}


?>
