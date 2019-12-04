<?php
session_start();
    include 'dbConnection.php';
  //  include 'adminHome.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");

validateSession();
if (isset($_GET['addUser'])) { //checks whether the form was submitted
    
    $username = $_GET['username'];
    $password=  $_GET['password'];
    $name =  $_GET['name'];
    $email = $_GET['email'];
    $address =  $_GET['address']; 
    $insurance =  $_GET['insurance'];
    $waver =  $_GET['waver'];
    $license =  $_GET['license'];
    $registration =  $_GET['registration'];
    $w9=  $_GET['w9'];
    $vendor=  $_GET['vendor'];
    
    $sql = "INSERT INTO operator (opUsername, opPassword, opName, opEmail, opAddress, opInsurance, opFaawaver, opLicense, opRegistration, opW9, opVendor) 
            VALUES (:username, :password, :name, :email, :address, :insurance, :waver, :license, :registration, :w9, :vendor);";
    $op = array();
    $op[":username"] = $username;
    $op[":password"] = $password;
    $op[":name"] = $name;
    $op[":email"] = $email;
    $op[":address"] = $address;
    $op[":insurance"] = $insurance;
    $op[":waver"] = $waver;
    $op[":license"] = $license;
    $op[":registration"] = $registration;
    $op[":w9"] = $w9;
    $op[":vendor"] = $vendor;
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($op);
    echo "New Pilot was added!";
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Section: Add New Pilot </title>
    </head>


    <body>
        
        <h1> Adding New Pilot</h1>
        
        <form>
           Username: <input type="text" name="username"></br></br>
           Password: <input type="text" name="password"></br></br>
           Name: <input type="text" name="name"></br></br>
           Email: <input type="text" name="email"></br></br>
           Address: <input type="text" name="address"></br></br>
           </form>
        <form action="/action_page.php" accept="image/png, image/jpeg">
            Insurance: <input type="file" name="insurance" id="insurance"><br>
            Faawaver: <input type="file" name="waver" id="waver"><br>
            License: <input type="file" name="license" id="license"><br>
            Registration: <input type="file" name="registration" id="registration"><br>
            OPW9: <input type="file" name="w9" id="w9"><br>
            
        </form>
        <form>
           Vendor: <input type="text" name="vendor"></br></br>
        <form>
           <input type="submit" name="addUser" value="Add User">
        </form>
    </body>
</html>