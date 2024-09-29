<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('52.173.151.229', 'PrestonDunlap', 'Dunlap57', 'mis4013-db');


    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
