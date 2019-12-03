<?php

    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");
 { 
     global $conn;
     
     $sql = "SELECT * FROM job ORDER BY idOperator";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
     foreach ($records as $record) {
         echo "<option value='".$record['idOperator']."'>" . $record['idCustomer'] . "</option>";
     }
 }
?>


<html>
    <head>
        <title> Pilot Job History </title>
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
        <br><br>
<center><div class="phStandard"><strong>JOB HISTORY</strong></div> </center>
<br>
<table class="Job_History">
    <tr>
        <th>DATE</th>
        <th>FIELD SIZE</th>
        <th>INSECT/MEDIA TYPE</th>
        <th> LOCATION</th>
        <th>PILOT INFO</th>
    </tr>
    <tr>
        <td>4/23/19</td>
        <td>416 Acres</td>
    </tr>
</table>
<br>

 <footer class="customerFooter">
            <div class="logoutDiv">
                <button class="plo" id="upload"><strong>UPLOAD PHOTOS/VIDEO</strong></button>
                <br><br>
                <button class="plo"><strong>LOG OUT</strong></button>
            </div>
        </footer>
        
         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
           <script>
         $("#upload").on("click", function(e) {
            window.location = "PilotUpload.php";
        });
        </script>
        
    </body>
</html>