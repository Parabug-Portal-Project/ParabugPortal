 <?php
?>
<html>
    <head>
        <title> Parabug Portal</title>
          <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
          <header>
            <table class="menuHeader">
                <tr><td><strong>PILOT PORTAL</strong></td></tr>
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
                
                <tr><td class="customerMenuLayout"><button class="pi" id="upload"><strong>UPLOAD PHOTOS/VIDEO</strong></button></td></tr>
                <tr><td class="customerMenuLayout"><button class="ph"><strong>VIEW PHOTOS/VIDEO</strong></button></td></tr>

            </table>
        </main>

 
 <footer class="customerFooter">
            <div class="logoutDiv">
                <button class="plo"><strong>LOG OUT</strong></button>
            </div>
        </footer>
        
         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
           <script>
         $("#upload").on("click", function(e) {
            window.location = "PilotUploadVideo.html";
        });
        </script>
    </body>
</html>