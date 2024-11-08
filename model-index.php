<?php
function AuthorSelection() {
  
        $conn = get_db_connection();
        $stmt = $conn->prepare('COUNT(*) AS author_count FROM author');
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}

function BookSelection() {
  
        $conn = get_db_connection();
        $stmt = $conn->prepare('COUNT(*) AS book_count FROM book');
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}

function AuthorPopularity() {
  
        $conn = get_db_connection();
        $stmt = $conn->prepare('a.LName, COUNT(l.BID) as loan_count FROM author a JOIN bookauthor ba ON a.AID = ba.AID JOIN book b ON ba.BID=b.BID JOIN loan l ON b.LID=l.LID GROUP BY a.LName ORDER BY loan_count DESC LIMIT 1');
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}


?>
