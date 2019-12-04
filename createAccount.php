<?php
    session_start();
    
    //CHANGE THIS WHEN WE NEED TO FOR ADMIN ONLY PRIVILIGE
    // if(!isset( $_SESSION['adminLogged']))
    // {
    //   header("Location:adminLogin.php");
    // }
    
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");
    validateSession();
    
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
    
    
    <?php
    // value="addUser" TESTING
    
    if (isset($_GET['addUser'])) { //checks whether the form was submitted
        
        $username = $_GET['opUsername'];
        $password=  $_GET['opPassword'];
        $name =  $_GET['opName'];
        $pic = $_GET['opProfilepicture'];
        $email = $_GET['opEmail'];
        $address =  $_GET['opAddress']; 
        $insurance =  $_GET['opInsurance'];
        $waver =  $_GET['opFaawaver'];
        $license =  $_GET['opLicense'];
        $registration =  $_GET['opRegistration'];
        $w9=  $_GET['opW9'];
        $vendor=  $_GET['opVendor'];
        
        $sql = "INSERT INTO operator ('opUsername', 'opPassword', 'opName', 'opProfilepicture', 'opEmail', 'opAddress', 'opInsurance', 'opFaawaver', 'opLicense', 'opRegistration', 'opW9', 'opVendor') 
                VALUES (:username, :password, :name, : pic, :email, :address, :insurance, :waver, :license, :registration, :w9, :vendor);";
                
        $op = array();
        $op[':username'] = $username;
        $op[':password'] = $password;
        $op[':name'] = $name;
        $op[':pic'] = $pic;
        $op[':email'] = $email;
        $op[':address'] = $address;
        $op[':insurance'] = $insurance;
        $op[':waver'] = $waver;
        $op[':license'] = $license;
        $op[':registration'] = $registration;
        $op[':w9'] = $w9;
        $op[':vendor'] = $vendor;
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($op);
        echo "New Pilot was added!";
    
}
    
    ?>
</html>