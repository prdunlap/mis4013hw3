<?php 
  function selectBooks() {
     
        $conn = get_db_connection();
      $stmt = $conn->prepare("SELECT BID, Title, Pubdate FROM book");
      $stmt->execute();
      $result=$stmt->get_result();
      $conn->close();
      return $result;
     
      }

    function selectAuthorsByBook($bid) {
      
        $conn = get_db_connection();
      $stmt = $conn->prepare("SELECT a.FName, a.LName, a.Suffix, a.Country_of_Origin, b.GID, b.PubDate, b.BID FROM author a JOIN bookauthor ba ON a.AID = ba.AID JOIN book b on ba.BID = b.BID WHERE b.BID=?");
      $stmt->bind_param("i",$bid);
      $stmt->execute();
        $result=$stmt->get_result();
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
