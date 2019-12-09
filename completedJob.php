<?php
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");
 { 
     global $conn;
     
     $sql = "SELECT * FROM map";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
     foreach ($records as $record) {
         echo "<td>".$record['mapID'] . " </td><td>".$record['maVideo'] . " </td><td> " . $record['maMap'] . "</td> 
         <td>".$record['maPhoto'] . " </td> <td>".$record['idJob'] . " </td>";
     }
     echo "</br>";
     echo "</br>";
 }
?>


<html>
    <head>
        <title> Completed Job </title>
        <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>
            <div class="logo">
                <img src="img/Parabug-Logo.png"></img>
      </div>
</html>