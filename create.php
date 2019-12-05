<?php
session_start();
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");

if (isset($_GET['addUser'])) { //checks whether the form was submitted
    
    $username = $_GET['username'];
    $password =  $_GET['password'];
    $name =  $_GET['name'];
    $email = $_GET['email'];
    $address =  $_GET['address']; 
  
    
    $sql = "INSERT INTO `customer` (cuUsername, cuPassword, cuName, cuEmail, cuAddress) 
            VALUES (:username, :password, :name, :email, :address)";
    $cu = array();
    $cu[":username"] = $username;
    $cu[":password"] = $password;
    $cu[":name"] = $name;
    $cu[":email"] = $email;
    $cu[":address"] = $address;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($cu);
    echo "New Pilot was added!";
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Section: Add New Pilot </title>
    </head>


    <body>
        
        <h1> Adding Customer</h1>
        
        <form>
           Username: <input type="text" name="username"></br></br>
           Password: <input type="text" name="password"></br></br>
           Name: <input type="text" name="name"></br></br>
           Email: <input type="text" name="email"></br></br>
           Address: <input type="text" name="address"></br></br>
        <form>
           <input type="submit" name="addUser" value="addUser">
        </form>
    </body>
</html>