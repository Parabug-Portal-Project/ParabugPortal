<?php
session_start();
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");

if (isset($_GET['addPilot'])) { //checks whether the form was submitted
    
    $picFile = addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
    
    $username = $_GET['username'];
    $password =  $_GET['password'];
    $name =  $_GET['name'];
    //$pic = $_GET['pic'];
    $pic = $picFile;
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
        
        <form action="/action_page.php" accept="image/png, image/jpeg">
            Profile Picture: <input type="file" name="pic" id="pic"><br>
            Insurance: <input type="file" name="insurance" id="insurance"><br>
            Faawaver: <input type="file" name="waver" id="waver"><br>
            License: <input type="file" name="license" id="license"><br>
            Registration: <input type="file" name="registration" id="registration"><br>
            OPW9: <input type="file" name="w9" id="w9"><br>
            Vendor: <input type="text" name="vendor"></br></br>
            <input type="submit" name="addPilot" value="addPilot">
        </form>

    </body>
</html>

<script type="text/javascript" src="">
    $(document).ready(function(){
        $('#pic').click(function(){
        var imageName = $('#pic').val();
        if(imageName == '')
        {
            alert("Please Select Image");
            return false;
        }
        else 
        {
            var extension = $('#pic').val().split('.').pop().toLocaleLowerCase();
            if(jQuery.inArray(extension['gif','png','jpg','jpeg'])==-1){
                alert('Invalid Image File');
                $('#pic').val('');
                return false;
            }
        }
        });
    });
    
    
</script>
