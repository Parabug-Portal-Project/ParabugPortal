{"filter":false,"title":"PilotHistory.php","tooltip":"/PilotHistory.php","undoManager":{"mark":15,"position":15,"stack":[[{"start":{"row":17,"column":0},"end":{"row":32,"column":8},"action":"remove","lines":["        <br><br>","<center><div class=\"phStandard\"><strong>JOB HISTORY</strong></div> </center>","<br>","<table class=\"Job_History\">","    <tr>","        <th>DATE</th>","        <th>FIELD SIZE</th>","        <th>INSECT/MEDIA TYPE</th>","        <th> LOCATION</th>","        <th>PILOT INFO</th>","    </tr>","    <tr>","        <td>4/23/19</td>","        <td>416 Acres</td>","    </tr>","    <tr>"],"id":2}],[{"start":{"row":15,"column":6},"end":{"row":16,"column":17},"action":"remove","lines":["      </div>","        </header>"],"id":3}],[{"start":{"row":8,"column":0},"end":{"row":12,"column":20},"action":"remove","lines":["    <body>","         <header>","            <table class=\"menuHeader\">","                <tr><td><strong>PILOT PORTAL</strong></td></tr>","            </table>"],"id":4},{"start":{"row":7,"column":11},"end":{"row":8,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":8},"action":"remove","lines":["    "],"id":5},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":12,"column":0},"end":{"row":28,"column":2},"action":"remove","lines":["<?php","","    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");"," { ","     global $conn;","     ","     $sql = \"SELECT * FROM job ORDER BY idOperator\";","     $stmt = $conn->prepare($sql);","     $stmt->execute();","     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);","     ","     foreach ($records as $record) {","         echo \"<td>\".$record['joDate'] . \" </td><td> \" . $record['idCustomer'] . \"</td>\";","     }"," }","?>"],"id":6},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["",""]},{"start":{"row":10,"column":6},"end":{"row":11,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":16,"column":2},"action":"insert","lines":["<?php","","    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");"," { ","     global $conn;","     ","     $sql = \"SELECT * FROM job ORDER BY idOperator\";","     $stmt = $conn->prepare($sql);","     $stmt->execute();","     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);","     ","     foreach ($records as $record) {","         echo \"<td>\".$record['joDate'] . \" </td><td> \" . $record['idCustomer'] . \"</td>\";","     }"," }","?>"],"id":7}],[{"start":{"row":30,"column":0},"end":{"row":46,"column":11},"action":"remove","lines":[""," <footer class=\"customerFooter\">","            <div class=\"logoutDiv\">","                <button class=\"plo\" id=\"upload\"><strong>UPLOAD PHOTOS/VIDEO</strong></button>","                <br><br>","                <button class=\"plo\"><strong>LOG OUT</strong></button>","            </div>","        </footer>","        ","         <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>","           <script>","         $(\"#upload\").on(\"click\", function(e) {","            window.location = \"PilotUpload.php\";","        });","        </script>","        ","    </body>"],"id":8}],[{"start":{"row":27,"column":0},"end":{"row":28,"column":8},"action":"remove","lines":["    </tr>","</table>"],"id":9}],[{"start":{"row":27,"column":0},"end":{"row":29,"column":0},"action":"remove","lines":["","<br>",""],"id":10},{"start":{"row":26,"column":6},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":7},"action":"insert","lines":["<"],"id":11},{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":[">"]}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":["d"],"id":12},{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"insert","lines":["i"]},{"start":{"row":26,"column":9},"end":{"row":26,"column":10},"action":"insert","lines":["v"]}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":["/"],"id":13}],[{"start":{"row":0,"column":0},"end":{"row":33,"column":8},"action":"insert","lines":["","","","<html>","    <head>","        <title> Pilot Job History </title>","        <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" />","    </head>","    <body>","         <header>","            <table class=\"menuHeader\">","                <tr><td><strong>PILOT PORTAL</strong></td></tr>","            </table>","            <div class=\"logo\">","                <img src=\"img/Parabug-Logo.png\"></img>","            </div>","        </header>","        <br><br>","<center><div class=\"phStandard\"><strong>JOB HISTORY</strong></div> </center>","<br>","<table class=\"Job_History\">","    <tr>","        <th>DATE</th>","        <th>FIELD SIZE</th>","        <th>INSECT/MEDIA TYPE</th>","        <th> LOCATION</th>","        <th>PILOT INFO</th>","    </tr>","    <tr>","        <td>4/23/19</td>","        <td>416 Acres</td>","    </tr>","    <tr>","        "],"id":14},{"start":{"row":50,"column":0},"end":{"row":59,"column":17},"action":"insert","lines":["    </tr>","</table>","<br>",""," <footer class=\"customerFooter\">","            <div class=\"logoutDiv\">","                <button class=\"plo\" id=\"upload\"><strong>UPLOAD PHOTOS/VIDEO</strong></button>","                <br><br>","                <button class=\"plo\"><strong>LOG OUT</strong></button>","            </div"]},{"start":{"row":59,"column":17},"end":{"row":64,"column":71},"action":"remove","lines":["","","<html>","    <head>","        <title> Pilot Job History </title>","        <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" /"]},{"start":{"row":60,"column":4},"end":{"row":60,"column":16},"action":"insert","lines":["    </footer"]},{"start":{"row":60,"column":16},"end":{"row":60,"column":22},"action":"remove","lines":["</head"]},{"start":{"row":61,"column":8},"end":{"row":62,"column":4},"action":"insert","lines":["","    "]},{"start":{"row":62,"column":8},"end":{"row":69,"column":10},"action":"insert","lines":[" <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>","           <script>","         $(\"#upload\").on(\"click\", function(e) {","            window.location = \"PilotUpload.php\";","        });","        </script>","        ","    </body"]},{"start":{"row":69,"column":10},"end":{"row":71,"column":11},"action":"remove","lines":["<div class=\"logo\">","                <img src=\"img/Parabug-Logo.png\"></img>","      </div"]}],[{"start":{"row":0,"column":0},"end":{"row":33,"column":8},"action":"remove","lines":["","","","<html>","    <head>","        <title> Pilot Job History </title>","        <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" />","    </head>","    <body>","         <header>","            <table class=\"menuHeader\">","                <tr><td><strong>PILOT PORTAL</strong></td></tr>","            </table>","            <div class=\"logo\">","                <img src=\"img/Parabug-Logo.png\"></img>","            </div>","        </header>","        <br><br>","<center><div class=\"phStandard\"><strong>JOB HISTORY</strong></div> </center>","<br>","<table class=\"Job_History\">","    <tr>","        <th>DATE</th>","        <th>FIELD SIZE</th>","        <th>INSECT/MEDIA TYPE</th>","        <th> LOCATION</th>","        <th>PILOT INFO</th>","    </tr>","    <tr>","        <td>4/23/19</td>","        <td>416 Acres</td>","    </tr>","    <tr>","        "],"id":15,"ignore":true},{"start":{"row":17,"column":0},"end":{"row":26,"column":17},"action":"remove","lines":["    </tr>","</table>","<br>",""," <footer class=\"customerFooter\">","            <div class=\"logoutDiv\">","                <button class=\"plo\" id=\"upload\"><strong>UPLOAD PHOTOS/VIDEO</strong></button>","                <br><br>","                <button class=\"plo\"><strong>LOG OUT</strong></button>","            </div"]},{"start":{"row":17,"column":0},"end":{"row":22,"column":71},"action":"insert","lines":["","","<html>","    <head>","        <title> Pilot Job History </title>","        <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" /"]},{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":[" "]},{"start":{"row":23,"column":4},"end":{"row":23,"column":15},"action":"remove","lines":["   </footer"]},{"start":{"row":23,"column":4},"end":{"row":23,"column":10},"action":"insert","lines":["</head"]},{"start":{"row":24,"column":8},"end":{"row":25,"column":4},"action":"remove","lines":["","    "]},{"start":{"row":24,"column":12},"end":{"row":31,"column":10},"action":"remove","lines":[" <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>","           <script>","         $(\"#upload\").on(\"click\", function(e) {","            window.location = \"PilotUpload.php\";","        });","        </script>","        ","    </body"]},{"start":{"row":24,"column":12},"end":{"row":26,"column":11},"action":"insert","lines":["<div class=\"logo\">","                <img src=\"img/Parabug-Logo.png\"></img>","      </div"]}],[{"start":{"row":7,"column":30},"end":{"row":7,"column":51},"action":"remove","lines":[" ORDER BY idOperator\""],"id":17}],[{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["\""],"id":18}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":30},"end":{"row":7,"column":30},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1575782999337,"hash":"d36881dd8962533ee9ec4dc725ffdc4790dde316"}