<?php
session_start();
    include 'dbConnection.php';
  //  include 'adminHome.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");

validateSession();
if (isset($_GET['addUser'])) { //checks whether the form was submitted
    
    $username = $_GET['opUsername'];
    $password=  $_GET['opPassword'];
    $name =  $_GET['opName'];
    $email = $_GET['opEmail'];
    $address =  $_GET['opAddress']; 
    $insurance =  $_GET['opInsurance'];
    $waver =  $_GET['opFaawaver'];
    $license =  $_GET['opLicense'];
    $registration =  $_GET['opRegistration'];
    $w9=  $_GET['opW9'];
    $vendor=  $_GET['opVendor'];
    
    $sql = "INSERT INTO operator (opUsername, opPassword, opName, opEmail, opAddress, opInsurance, opFaawaver, opLicense, opRegistration, opW9, opVendor) 
            VALUES (:opUsername, :opPassword, :opName, :opEmail, :opAddress, :opInsurance, :opFaawaver, :opLicense, :opRegistration, :opW9, :opVendor);";
    $op = array();
    $op[":opUsername"] = $username;
    $op[":opPassword"] = $password;
    $op[":opName"] = $name;
    $op[":opEmail"] = $email;
    $op[":opAddress"] = $address;
    $op[":opInsurance"] = $insurance;
    $op[":opFaawaver"] = $waver;
    $op[":opLicense"] = $license;
    $op[":opRegistration"] = $registration;
    $op[":opw9"] = $w9;
    $op[":opVendor"] = $vendor;
    
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
hello
    </body>
</html>