<?php
session_start();
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");

if (isset($_GET['addUser'])) { //checks whether the form was submitted
    
    $username = $_GET['username'];
    $password =  $_GET['password'];
    $name =  $_GET['name'];
    $pic = $_GET['pic'];
    $email = $_GET['email'];
    $address =  $_GET['address']; 
    $insurance =  $_GET['insurance'];
    $waver =  $_GET['waver'];
    $license =  $_GET['license'];
    $registration =  $_GET['registration'];
    $w9 =  $_GET['w9'];
    $vendor =  $_GET['vendor'];
    
    $sql = "INSERT INTO `operator` (opUsername, opPassword, opName, opProfilepicture, opEmail, opAddress, opInsurance, opFaawaver, opLicense, opRegistration, opW9, opVendor) 
            VALUES (:username, :password, :name, :pic, :email, :address, :insurance, :waver, :license, :registration, :w9, :vendor)";
    $op = array();
    $op[":username"] = $username;
    $op[":password"] = $password;
    $op[":name"] = $name;
    $op[":pic"] = $pic;
    $op[":email"] = $email;
    $op[":address"] = $address;
    $op[":insurance"] = $insurance;
    $op[":waver"] = $waver;
    $op[":license"] = $license;
    $op[":registration"] = $registration;
    $op[":w9"] = $w9;
    $op[":vendor"] = $vendor;
    
    $stmt = $conn->prepare($sql);
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
            Profile Picture: <input type="file" name="pic" id="pic"><br>
            Insurance: <input type="file" name="insurance" id="insurance"><br>
            Faawaver: <input type="file" name="waver" id="waver"><br>
            License: <input type="file" name="license" id="license"><br>
            Registration: <input type="file" name="registration" id="registration"><br>
            OPW9: <input type="file" name="w9" id="w9"><br>
            
        </form>
        <form>
           Vendor: <input type="text" name="vendor"></br></br>
        <form>
           <input type="submit" name="addUser" value="addUser">
        </form>
    </body>
</html>

<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->

<?php
session_start();
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");
    
    
    //for the pilot account adding
    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == "pilot"){
        if (isset($_GET['addCustomer'])) { //checks whether the form was submitted
    
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
        
    }
    
    //for the customer account adding
    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == "customer"){
        
        
    }
    
    //for adding a new job
    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == "job"){
        
        
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
           <input type="submit" name="addCustomer" value="addCustomer">
        </form>
    </body>
</html>

<!------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------->

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
    </head>


    <body>
        
        <h1> Adding Customer</h1>
        
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