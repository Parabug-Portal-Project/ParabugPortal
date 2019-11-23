<?php
include 'dbConnection.php';
$conn = getDatabaseConnection("heroku_68533dd666c4a97");
$fav = $_GET["iconfav"];
$sql = "INSERT INTO `operator` (`opUsername`) VALUES ('JoshJepson');";
$conn->query($sql);
?>