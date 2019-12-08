<?php
session_start();
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");


if (isset($_GET['updateJob'])){  //user has submitted update form
    
    $cu = array();
    $cu[":date"] = $_GET['date'];
    $cu[":location"] = $_GET['location'];
    $cu[":status"] = $_GET['status'];
    $cu[":customer"] = $_GET['customer'];
    $cu[":operator"] = $_GET['operator'];


    $sql = "UPDATE oc_product 
            SET joDate= :date,
               joLocation = :location,
               joStatus = :status,
               idCustomer = :customer,
               idOperator = :operator
            WHERE idJob = " . $_GET['idJob'];
    
    $stmt = $dbConn->prepare($cu);
    $stmt->execute($cu);       
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Update Job </title>
    </head>


    <body>
        
        <h1> Update Job</h1>
        
        <form>
           Job ID: <input type="text" name="idJob"></br></br>
           Job date: <input type="text" name="date"></br></br>
           Location: <input type="text" name="location"></br></br>
           Job Status: <input type="text" name="status"></br></br>
           Pilot: <input type="text" name="operator"></br></br>
           Customer: <input type="text" name="customer"></br></br>
        <form>
           <input type="submit" name="updateJob" value="updateJob">
        </form>
    </body>
</html>