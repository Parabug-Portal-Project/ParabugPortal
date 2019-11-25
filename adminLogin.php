<?php
session_start();
 
  if(isset($_POST['login'])){
    
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin
                 WHERE adUsername = :username
                 AND  adPassword = :password";                 
    $port = array();
    $port[':username'] = $username;
    $port[':password'] = $password;
    $stmt = $conn->prepare($sql);
    $stmt->execute($port);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting just one record
    if (empty($record)) {
    $_SESSION['wrongPass']="<div class='alert alert-danger'><strong>Password Issue! </strong>Wrong username or password!</div>"; //<div class='alert alert-danger'><strong>Password Issue! </strong>Wrong username or password!

    } else {
   
   //$_SESSION['adminFullName'] = $record['firstName'] .  "   "  . $record['lastName'];
   //changed here because we are not sure why it's here.
   header('Location: customerHome.php'); //redirects to another program
    
  }
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    </head>
        <header>

     <h1> Admin Login </h1>
   
     </header>
    <body >

        <form method="post">
          Username:  <input type="text" name="username"/> <br><br>
          Password:  <input type="password" name="password"/> <br><br>
          <input type="submit" value="Login" name = "login" id="b1">
        </form>
        <?php
        session_start();
        if(isset($_SESSION['wrongPass']))
        {
            echo $_SESSION['wrongPass'];
            unset($_SESSION['wrongPass']);
        }
?>
    </body>
</html>

