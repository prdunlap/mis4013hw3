<?php 
  function selectBooks() {
     
        $conn = get_db_connection();
      $stmt = $conn->prepare("SELECT BID, Title, Pubdate FROM book");
      $stmt->execute();
      $result=$stmt->get_result();
      $conn->close();
      return $result;
     
      }

function selectAuthors() {
     
        $conn = get_db_connection();
      $stmt = $conn->prepare("SELECT AID FROM author");
      $stmt->execute();
      $result=$stmt->get_result();
      $conn->close();
      return $result;
     
      }

function selectBIDs() {
     
        $conn = get_db_connection();
      $stmt = $conn->prepare("SELECT BID FROM book");
      $stmt->execute();
      $result=$stmt->get_result();
      $conn->close();
      return $result;
     
      }

    function selectAuthorsByBook($bid) {
      
        $conn = get_db_connection();
      $stmt = $conn->prepare("SELECT a.FName, a.LName, a.Suffix, a.Country_of_Origin, b.GID, b.PubDate, b.BID, ba.BAID FROM author a JOIN bookauthor ba ON a.AID = ba.AID JOIN book b on ba.BID = b.BID WHERE b.BID=?");
      $stmt->bind_param("i",$bid);
      $stmt->execute();
        $result=$stmt->get_result();
      $conn->close();
      return $result;
       
    }  

function insertBookAuthor($baBID, $baAID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO bookauthor (BID, AID) VALUES (?,?)");
        $stmt->bind_param("ii",$baBID, $baAID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}

function updateBookAuthor($baBID, $baAID, $BAID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE bookauthor SET BID = ?, AID = ? WHERE BAID = ?");
        $stmt->bind_param("iii",$baBID, $baAID, $BAID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}
function deleteBookAuthor($BAID) 
     {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE from bookauthor WHERE BAID = ?");
        $stmt->bind_param("i",$BAID);
        $success = $stmt->execute();
        $conn->close();
        
        return $success;

}
?>
