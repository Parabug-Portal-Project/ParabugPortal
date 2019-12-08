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
        echo "<a class='btn btn-warning' role='button' href='updateJob.php?idJob=".$record['idJob']."'>Update</a>";
        //echo "[<a href='deleteJob.php?=".$record['joId']."'>Delete</a>]";
        echo "<form action='deleteJob.php' onsubmit='return confirmDelete()'>";
        echo "   <input type='hidden' name='idJob' value='".$record['idJob']."'>";
        echo "   <button class='btn btn-outline-danger' type='submit'>Delete</button>";
        echo "</form>";
        echo "</br></br>";
        
    }
}
function getId($idJob) {
     global $conn;
    
    $sql = "SELECT * FROM job WHERE idJob = $idJob";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); 
    return $record;
     
    
}
?>