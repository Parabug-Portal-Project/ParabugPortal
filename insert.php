<?php
include 'dbConnection.php';
$conn = getDatabaseConnection("heroku_68533dd666c4a97");
$sql = "INSERT INTO `operator` (`opUsername`) VALUES ('JOsh');";
$conn->query($sql);
?>