<?php
session_start();
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");

if (isset($_GET['addJob'])) { //checks whether the form was submitted
    
    $date =  $_GET['date'];
    $location = $_GET['location'];
    $status =  $_GET['status'];
    $customer = $_GET['customer'];
    $operator =  $_GET['operator']; 
  
    
    $sql = "INSERT INTO `job` (joDate, joLocation, joStatus, idCustomer, idOperator) 
            VALUES (:date, :location, :status, :customer, :operator)";
    $jo = array();
    $jo[":date"] = $date;
    $jo[":location"] = $location;
    $jo[":status"] = $status;
    $jo[":customer"] = $customer;
    $jo[":operator"] = $operator;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($jo);
    echo "New Job was added!";
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Section: Add New Pilot </title>
        <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>


    <body>
        
        <h1> Adding New Job</h1>
        
        <form>
           Job date: <input type="text" name="date"></br></br>
           Location: <input type="text" name="location"></br></br>
           Job Status: <input type="text" name="status"></br></br>
           Pilot: <input type="text" name="operator"></br></br>
           Customer: <input type="text" name="customer"></br></br>
        <form>
           <input type="submit" name="addJob" value="addJob">
        </form>
    </body>
</html>