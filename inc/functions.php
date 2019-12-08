<?php
function getId($jobId) {
     global $conn;
    
    $sql = "SELECT * FROM job WHERE jobId = $jobId";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); 
    return $record;
     
    
}
?>