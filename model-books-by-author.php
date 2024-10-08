<?php 
  function selectBooks() {
     
        $conn = get_db_connection();
      $stmt = $conn->prepare("SELECT FName, LName, Suffix, Country_of_Origin FROM author");
      $stmt->execute();
      $result=$stmt->get_result();
      $conn->close();
      return $result;
     
      }

    function selectAuthorsByBook($bid) {
      
        $conn = get_db_connection();
      $stmt = $conn->prepare("SELECT a.FName, a.LName, a.Suffix, a.Country_of_Origin FROM author a JOIN bookauthor ba ON a.AID = ba.AID JOIN book b on ba.BID = b.BID WHERE b.BID=?");
      $stmt->bind_param("i",$bid);
      $stmt->execute();
        $result=$stmt->get_result();
      $conn->close();
      return $result;
       
    }  
?>
