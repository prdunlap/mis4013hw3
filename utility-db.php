<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('129.15.65.247', 'PrestonDunlap', 'Memorial21!', 'mis4013-db');

    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
