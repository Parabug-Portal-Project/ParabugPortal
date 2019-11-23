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
                <tr><td><strong>Customer Login</strong></td></tr>
            </table>
            <br/> <br/>
            <div class="logo">
                <img src="img/Parabug-Logo.png"></img>
            </div>
        </header>

        <main>
            <form method="post" class="loginCredentials">
                <div><label>Username: </label><input type="text" class="username" name="username"/></div>
                <div><label>Password: </label><input type="text" class="password" name="password"/></div>
                <!--<div><input type="submit" class="loginButton" value="Submit"/></div>-->
            </form>
            <button class="loginButton"><strong>SIGN IN</strong></button>

        </main>

        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/functions.js"></script>
    </body>
</html>