{"filter":false,"title":"createJob.php","tooltip":"/createJob.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":51,"column":7},"action":"insert","lines":["<?php","session_start();","    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");","","if (isset($_GET['addJob'])) { //checks whether the form was submitted","    ","    $date =  $_GET['date'];","    $location = $_GET['location'];","    $status =  $_GET['status'];","    $customer = $_GET['customer'];","    $operator =  $_GET['operator']; ","  ","    ","    $sql = \"INSERT INTO `job` (joDate, joLocation, joStatus, idCustomer, idOperator) ","            VALUES (:date, :location, :status, :customer, :operator)\";","    $jo = array();","    $jo[\":date\"] = $date;","    $jo[\":location\"] = $location;","    $jo[\":status\"] = $status;","    $jo[\":customer\"] = $customer;","    $jo[\":operator\"] = $operator;","    ","    $stmt = $conn->prepare($sql);","    $stmt->execute($jo);","    echo \"New Job was added!\";","    ","}","?>","","<!DOCTYPE html>","<html>","    <head>","        <title> Admin Section: Add New Pilot </title>","    </head>","","","    <body>","        ","        <h1> Adding Customer</h1>","        ","        <form>","           Job date: <input type=\"text\" name=\"date\"></br></br>","           Location: <input type=\"text\" name=\"location\"></br></br>","           Job Status: <input type=\"text\" name=\"status\"></br></br>","           Pilot: <input type=\"text\" name=\"operator\"></br></br>","           Customer: <input type=\"text\" name=\"customer\"></br></br>","        <form>","           <input type=\"submit\" name=\"addJob\" value=\"addJob\">","        </form>","    </body>","</html>"],"id":1}]]},"ace":{"folds":[],"scrolltop":633,"scrollleft":0,"selection":{"start":{"row":2,"column":16},"end":{"row":2,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":38,"state":"start","mode":"ace/mode/php"}},"timestamp":1575595126979,"hash":"e32d7f1528c4b812de0ecad95a54ff244b5dfa38"}