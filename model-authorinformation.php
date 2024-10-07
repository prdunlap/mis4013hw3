<?php
function selectAuthorInfo($aid) {

        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT author.AID, author.FName, author.LName, author.Suffix, book.Title, book.PubDate FROM author JOIN bookauthor ON author.AID = bookauthor.AID JOIN book ON bookauthor.BID = book.BID");
        $stmt->bind_param("i", $aid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        
        return $result;
}
?>
