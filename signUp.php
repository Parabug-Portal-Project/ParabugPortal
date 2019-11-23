<?php?>

<html>
    <head>
        <meta charset="utf-8" />
        <title> Parabug Portal </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <main>
            <form class="signUpForm">
                <input type="text" name=""/>
                <input type="submit" value="Submit"/>
            </form>
        </main>
    </body>
    
    <script>
        $.ajax({
            type: "GET",
            url: "insert.php",
            dataType: "json",
            data: {
            
            },
            success: function(data, status) {}
        }); ///end of ajax cal
    </script>
</html>