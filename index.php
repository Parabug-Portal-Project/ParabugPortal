<?php?>
<html>

<head>
    <meta charset="utf-8" />
    <title> Parabug Portal </title>
    <link href="css/styles2.css" rel="stylesheet" type="text/css" /></head>
<body>
    <center>
<img src ="img/logo.png" class ="logo"/>
<br> <br>
Please Log In <br>
 <button class="adminLoginButton"><strong>Admin Login In</strong></button></td>
 <button class="customerLoginButton"><strong>Customer Login In</strong></button></td>
<button class="pilotLoginButton"><strong>Pilot Login In</strong></button></td>
          
    </center>


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
