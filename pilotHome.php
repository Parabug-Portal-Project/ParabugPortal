  <?php
?>

<html>
    <head>
        <title> Parabug Home </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

        $("button.ph").on("click", function(e) {
            window.location = "pilotHistory.php";
        });
        
        $("button.ps").on("click", function(e) {
            window.location = "https://accounts.google.com/signin/v2/identifier?service=cl&passive=1209600&osid=1&continue=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Frender&followup=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Frender&scc=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin";
        });
        $("button.pe").on("click", function(e) {
            window.location = "https://parabug.xyz/";
        });
    </script>
    </body>
</html>