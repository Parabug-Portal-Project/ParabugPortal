  <?php
?>

<html>
    <head>
        <title> Parabug Home </title>
          <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <table class="menuHeader">
                <tr><td><strong>PILOT INFO</strong></td></tr>
            </table>
            <div class="logo">
                <img src="img/Parabug-Logo.png"></img>
            </div>
        </header>
        




 <main>
            
            <!--Created this table to separate each button into it's own row-->
            <table class="customerMenu">
                <!--Ignore this-->
                <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                
                <tr><td class="customerMenuLayout"><button class="pi"><strong>PILOT INFO</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="ph"><strong>JOB HISTORY</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="ps"><strong>SCHEDULE</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="pe"><strong>ESTIMATOR</strong></button></td></tr>
                <!--<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>-->
                <!--<tr><td class="customerMenuLayout"><button class="customerLogOutButton"><strong>LOG OUT</strong></button></td></tr>-->
            </table>
        </main>

 
 <footer class="customerFooter">
            <div class="logoutDiv">
                <button class="plo"><strong>LOG OUT</strong></button>
            </div>
        </footer>
 
 
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script>
        $("button.pi").on("click", function(e) {
            window.location = "PilotInfo.php";
        });
        $("button.ph").on("click", function(e) {
            window.location = "PilotHistory.php";
        });
        
        $("button.ps").on("click", function(e) {
            window.location = "PilotSchedule.php";
        });
        $("button.pe").on("click", function(e) {
            window.location = "https://parabug.xyz/";
        });
    </script>
    </body>
</html>