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
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
           <script>
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "insert.php",
                    dataType: "json",
                    data: {
                    
                    },
                    success: function(data, status) {
                        console.log("It works...")
                    }
                }); ///end of ajax cal
                
                $.ajax({
                    type: "GET",
                    url: "send.php",
                    dataType: "json",
                    data: {
                    
                    },
                    success: function(data, status) {
                             data.forEach(function(key){
                            console.log(key)
                        });
                    }
                }); ///end of ajax cal
            });
    </script>
    </body>
 
</html>