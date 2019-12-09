<?php
session_start();
include 'dbConnection.php';
$conn = getDatabaseConnection("heroku_68533dd666c4a97");

$sql = "DELETE FROM job WHERE jobId = " . $_GET['jobId'];
$stmt=$conn->prepare($sql);
$stmt->execute();
header("Location: jobHistory.php");

?>