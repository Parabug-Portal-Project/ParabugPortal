<?php
include 'dbConnection.php';

// session_start();
//     $httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);
//     switch($httpMethod) {
        
//         case 'POST':
//             break;
        
//     }

$conn = getDatabaseConnection("heroku_68533dd666c4a97");
$sql = "INSERT INTO `operator` (`opUsername`) VALUES ('JOsh');";
$conn->query($sql);
?>