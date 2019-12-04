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
                <tr><td><strong>ADMIN PORTAL</strong></td></tr>
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
                <tr><td class="customerMenuLayout"><button class="plo" id="createC"><strong>CREATE CUSTOMER</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="plo" id="createP"><strong>CREATE PILOT</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="plo" id ="createJ"><strong>CREATE JOB</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="plo" id ="cInfo"><strong>CUSTOMER INFO</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="plo" id="pInfo"><strong>PILOT INFO</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="plo" id="jInfo"><strong>JOB INFO</strong></button></td></tr>
                
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
        $("#createC").on("click", function(e) {
            window.location = "createAccount.php";
            $.session.set('loadAccount', 'customer');
        });

        $("#createP").on("click", function(e) {
            window.location = "createAccount.php";
          $.session.set('loadAccount', 'pilot');
        });
        
        $("#createJ").on("click", function(e) {
            window.location = "createAccount.php";
           $.session.set('loadAccount', 'job');
        });

        $("#cInfo").on("click", function(e) {
            window.location = "information.php";
            $.session.set('loadInfo', 'customer');
        });
        
        $("#pInfo").on("click", function(e) {
            window.location = ".information.php";
            $.session.set('loadInfo', 'pilot');
        });
        
        $("#jInfo").on("click", function(e) {
            window.location = "information.php";
             $.session.set('loadInfo', 'job');
        });
    </script>
    </body>
</html>