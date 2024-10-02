<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('mis4013-db.mysql.database.azure.com', 'PrestonDunlap', 'Dunlap57', 'my_database');


    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
