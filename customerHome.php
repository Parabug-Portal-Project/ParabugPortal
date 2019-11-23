<?php?>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Parabug Portal </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>

        <header>
            <table class="menuHeader">
                <tr><td><strong>Customer Portal</strong></td></tr>
                <!--Ignore this-->
            </table>
            <br/> <br/>
            <div class="logo">
                <img src="img/Parabug-Logo.png"></img>
            </div>
        </header>
        
         <main>
            <!--Created this table to separate each button into it's own row-->
            <table class="customerMenu">
                <!--Ignore this-->
                <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                
                <tr><td class="customerMenuLayout"><button class="customerHistoryButton"><strong>HISTORY</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="customerScheduleButton"><strong>SCHEDULE</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="estimatorButton"><strong>ESTIMATOR</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="customerFeedbackButton"><strong>FEEDBACK</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="customerContactButton"><strong>CONTACT</strong></button></td></tr>
            </table>
        </main>

 
         <footer class="customerFooter">
            <br>
            <button class="customerLogOutButton"><strong>LOG OUT</strong></button>
        </footer>
    
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/functions.js"></script>
    </body>
</html>