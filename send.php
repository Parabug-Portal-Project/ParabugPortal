<?php
include 'dbConnection.php';
$conn = getDatabaseConnection("heroku_68533dd666c4a97");
$fav = $_GET["iconfav"];
$sql =  "SELECT * FROM operator";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>