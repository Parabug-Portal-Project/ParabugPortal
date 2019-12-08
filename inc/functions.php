<?php
function displayAllJobs(){
    global $conn;
    
    $sql = "SELECT * FROM job";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records
    foreach ($records as $record) {
        echo "Job Date: " . $record[joDate] . "</br>";
        echo "Job Location: " . $record[joLocation] . "</br>";
        echo "<a class='btn btn-warning' role='button' href='updateJob.php?joId=".$record['joId']."'>Update</a>";
        //echo "[<a href='deleteJob.php?joId=".$record['joId']."'>Delete</a>]";
        echo "<form action='deleteJob.php' onsubmit='return confirmDelete()'>";
        echo "   <input type='hidden' name='joId' value='".$record['joId']."'>";
        echo "   <button class='btn btn-outline-danger' type='submit'>Delete</button>";
        echo "</form>";
        echo "</br></br>";
        
    }
}
function getId($jobId) {
     global $conn;
    
    $sql = "SELECT * FROM job WHERE jobId = $jobId";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); 
    return $record;
     
    
}
?>