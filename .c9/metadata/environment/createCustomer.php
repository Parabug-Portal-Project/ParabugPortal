{"filter":false,"title":"createCustomer.php","tooltip":"/createCustomer.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":70,"column":7},"action":"insert","lines":["","<?php","session_start();","    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");","    ","    ","    //for the pilot account adding","    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == \"pilot\"){","        if (isset($_GET['addCustomer'])) { //checks whether the form was submitted","    ","    $username = $_GET['username'];","    $password =  $_GET['password'];","    $name =  $_GET['name'];","    $email = $_GET['email'];","    $address =  $_GET['address']; ","  ","    ","    $sql = \"INSERT INTO `customer` (cuUsername, cuPassword, cuName, cuEmail, cuAddress) ","            VALUES (:username, :password, :name, :email, :address)\";","    $cu = array();","    $cu[\":username\"] = $username;","    $cu[\":password\"] = $password;","    $cu[\":name\"] = $name;","    $cu[\":email\"] = $email;","    $cu[\":address\"] = $address;","    ","    $stmt = $conn->prepare($sql);","    $stmt->execute($cu);","    echo \"New Pilot was added!\";","    ","}","        ","    }","    ","    //for the customer account adding","    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == \"customer\"){","        ","        ","    }","    ","    //for adding a new job","    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == \"job\"){","        ","        ","    }","","?>","","<!DOCTYPE html>","<html>","    <head>","        <title> Admin Section: Add New Pilot </title>","    </head>","","","    <body>","        ","        <h1> Adding Customer</h1>","        ","        <form>","           Username: <input type=\"text\" name=\"username\"></br></br>","           Password: <input type=\"text\" name=\"password\"></br></br>","           Name: <input type=\"text\" name=\"name\"></br></br>","           Email: <input type=\"text\" name=\"email\"></br></br>","           Address: <input type=\"text\" name=\"address\"></br></br>","        <form>","           <input type=\"submit\" name=\"addCustomer\" value=\"addCustomer\">","        </form>","    </body>","</html>"],"id":1}],[{"start":{"row":35,"column":0},"end":{"row":45,"column":5},"action":"remove","lines":["    //for the customer account adding","    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == \"customer\"){","        ","        ","    }","    ","    //for adding a new job","    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == \"job\"){","        ","        ","    }"],"id":2}],[{"start":{"row":6,"column":0},"end":{"row":8,"column":79},"action":"remove","lines":["    ","    //for the pilot account adding","    if(isset($_SESSION['loadAccount']) && $_SESSION['loadAccount'] == \"pilot\"){"],"id":8},{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"insert","lines":["\\"]}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"remove","lines":["\\"],"id":9}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":8},"action":"remove","lines":["    "],"id":10},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":31,"column":5},"end":{"row":32,"column":4},"action":"remove","lines":["","    "],"id":11},{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"remove","lines":["}"]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"remove","lines":["    "]},{"start":{"row":30,"column":8},"end":{"row":31,"column":0},"action":"remove","lines":["",""]},{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"remove","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "]},{"start":{"row":29,"column":1},"end":{"row":30,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":29,"column":1},"end":{"row":29,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1575595102166,"hash":"0a2af25258fdb82196572a9228427e342db9b0ed"}