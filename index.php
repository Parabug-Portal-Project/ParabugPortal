<?php?>
<html>





<head>
    <meta charset="utf-8" />
    <title> Parabug Portal </title>
    <link href="css/styles2.css" rel="stylesheet" type="text/css" /></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
    <center>
<div class="container">
  <div class="jumbotron">
<img src ="img/logo.png" class ="logo"/>
<br> <br>
Please Log In <br>
 <button class="adminLoginButton"><strong>Admin Login</strong></button></td>
 <button class="customerLoginButton"><strong>Customer Login</strong></button></td>
<button class="pilotLoginButton"><strong>Pilot Login</strong></button></td>
          
    </center>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/functions.js"></script>
    
      <script>

        $("button.adminLoginButton").on("click", function(e) {
            window.location = "adminLogin.php";
        });
        
        $("button.customerLoginButton").on("click", function(e) {
            window.location = "customerLogin.php";
        });
        $("button.pilotLoginButton").on("click", function(e) {
            window.location = "pilotLogIn.php";
        });
    </script>
</body>

</html>
