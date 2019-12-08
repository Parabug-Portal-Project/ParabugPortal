{"filter":false,"title":"PilotInfo.php","tooltip":"/PilotInfo.php","undoManager":{"mark":32,"position":32,"stack":[[{"start":{"row":0,"column":0},"end":{"row":41,"column":7},"action":"remove","lines":["  <?php","?>","<html>","    <head>","        <title> Pilot Info </title>","        <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" />","    </head>","    <body>","     <header>","            <table class=\"menuHeader\">","                <tr><td><strong>Pilot Portal</strong></td></tr>","            </table>","            <div class=\"logo\">","                <img src=\"img/Parabug-Logo.png\"></img>","            </div>","        </header>",""," <main>","            ","            <!--Created this table to separate each button into it's own row-->","            <table class=\"customerMenu\">","                <!--Ignore this-->","                <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>","                 <tr><td class=\"customerMenuLayout\"><div class=\"piStandard\"><strong>PILOT INFO</strong></div></td></tr>","                <tr><td class=\"customerMenuLayout\"><button id=\"ii\" class=\"plo\"><strong>INSURANCE INFO</strong></button></td></tr>","                <tr><td class=\"customerMenuLayout\"><button id=\"p107\"class=\"plo\"><strong>PART 107 LICENSE</strong></button></td></tr>","                <tr><td class=\"customerMenuLayout\"><button id=\"faaw\"class=\"plo\"><strong>FAA WAIVERS</strong></button></td></tr>","                <tr><td class=\"customerMenuLayout\"><button id=\"ra\"class=\"plo\"><strong>REGISTERED AIRCRAFT</strong></button></td></tr>","                <tr><td class=\"customerMenuLayout\"><button id=\"rp\"class=\"plo\"><strong>REGISTERED PARABUG</strong></button></td></tr>","                <!--<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>-->","                <!--<tr><td class=\"customerMenuLayout\"><button class=\"customerLogOutButton\"><strong>LOG OUT</strong></button></td></tr>-->","            </table>","        </main>",""," "," <footer class=\"customerFooter\">","            <div class=\"logoutDiv\">","                <button class=\"plo\"><strong>LOG OUT</strong></button>","            </div>","        </footer>","    </body>","</html>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":30,"column":7},"action":"insert","lines":["<?php","    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");"," { ","     global $conn;","     ","     $sql = \"SELECT * FROM job\";","     $stmt = $conn->prepare($sql);","     $stmt->execute();","     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);","     ","     foreach ($records as $record) {","         echo \"<td>\".$record['joID'] . \" </td><td>\".$record['joDate'] . \" </td><td> \" . $record['joLocation'] . \"</td> ","         <td>\".$record['joStatus'] . \" </td> <td>\".$record['idCustomer'] . \" </td>","         <td>\".$record['idOperator'] . \" </td>\";","     }","     echo \"</br>\";","     echo \"</br>\";"," }","?>","","","<html>","    <head>","        <title> Pilot Job History </title>","        <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" />","    </head>","            <div class=\"logo\">","                <img src=\"img/Parabug-Logo.png\"></img>","      </div>","</html>"]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":30},"action":"remove","lines":["job"],"id":3},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["o"]},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["p"]},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["e"]},{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"insert","lines":["r"]},{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":["a"]},{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"insert","lines":["t"]},{"start":{"row":6,"column":33},"end":{"row":6,"column":34},"action":"insert","lines":["o"]},{"start":{"row":6,"column":34},"end":{"row":6,"column":35},"action":"insert","lines":["r"]}],[{"start":{"row":12,"column":31},"end":{"row":12,"column":34},"action":"remove","lines":["oID"],"id":4},{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"remove","lines":["j"]}],[{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"insert","lines":["i"],"id":5},{"start":{"row":12,"column":31},"end":{"row":12,"column":32},"action":"insert","lines":["d"]},{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"insert","lines":["O"]},{"start":{"row":12,"column":33},"end":{"row":12,"column":34},"action":"insert","lines":["p"]},{"start":{"row":12,"column":34},"end":{"row":12,"column":35},"action":"insert","lines":["e"]},{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"insert","lines":["r"]}],[{"start":{"row":12,"column":30},"end":{"row":12,"column":36},"action":"remove","lines":["idOper"],"id":6},{"start":{"row":12,"column":30},"end":{"row":12,"column":40},"action":"insert","lines":["idOperator"]}],[{"start":{"row":12,"column":67},"end":{"row":12,"column":73},"action":"remove","lines":["joDate"],"id":7},{"start":{"row":12,"column":67},"end":{"row":12,"column":68},"action":"insert","lines":["o"]},{"start":{"row":12,"column":68},"end":{"row":12,"column":69},"action":"insert","lines":["p"]},{"start":{"row":12,"column":69},"end":{"row":12,"column":70},"action":"insert","lines":["P"]},{"start":{"row":12,"column":70},"end":{"row":12,"column":71},"action":"insert","lines":["r"]},{"start":{"row":12,"column":71},"end":{"row":12,"column":72},"action":"insert","lines":["o"]}],[{"start":{"row":12,"column":72},"end":{"row":12,"column":73},"action":"insert","lines":["g"],"id":8},{"start":{"row":12,"column":73},"end":{"row":12,"column":74},"action":"insert","lines":["i"]},{"start":{"row":12,"column":74},"end":{"row":12,"column":75},"action":"insert","lines":["l"]}],[{"start":{"row":12,"column":74},"end":{"row":12,"column":75},"action":"remove","lines":["l"],"id":9},{"start":{"row":12,"column":73},"end":{"row":12,"column":74},"action":"remove","lines":["i"]},{"start":{"row":12,"column":72},"end":{"row":12,"column":73},"action":"remove","lines":["g"]}],[{"start":{"row":12,"column":72},"end":{"row":12,"column":73},"action":"insert","lines":["f"],"id":10},{"start":{"row":12,"column":73},"end":{"row":12,"column":74},"action":"insert","lines":["i"]},{"start":{"row":12,"column":74},"end":{"row":12,"column":75},"action":"insert","lines":["l"]},{"start":{"row":12,"column":75},"end":{"row":12,"column":76},"action":"insert","lines":["e"]},{"start":{"row":12,"column":76},"end":{"row":12,"column":77},"action":"insert","lines":["p"]},{"start":{"row":12,"column":77},"end":{"row":12,"column":78},"action":"insert","lines":["i"]},{"start":{"row":12,"column":78},"end":{"row":12,"column":79},"action":"insert","lines":["c"]},{"start":{"row":12,"column":79},"end":{"row":12,"column":80},"action":"insert","lines":["t"]}],[{"start":{"row":12,"column":80},"end":{"row":12,"column":81},"action":"insert","lines":["u"],"id":11},{"start":{"row":12,"column":81},"end":{"row":12,"column":82},"action":"insert","lines":["r"]},{"start":{"row":12,"column":82},"end":{"row":12,"column":83},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":113},"end":{"row":12,"column":123},"action":"remove","lines":["joLocation"],"id":12},{"start":{"row":12,"column":113},"end":{"row":12,"column":114},"action":"insert","lines":["o"]},{"start":{"row":12,"column":114},"end":{"row":12,"column":115},"action":"insert","lines":["p"]},{"start":{"row":12,"column":115},"end":{"row":12,"column":116},"action":"insert","lines":["E"]},{"start":{"row":12,"column":116},"end":{"row":12,"column":117},"action":"insert","lines":["m"]},{"start":{"row":12,"column":117},"end":{"row":12,"column":118},"action":"insert","lines":["a"]},{"start":{"row":12,"column":118},"end":{"row":12,"column":119},"action":"insert","lines":["i"]}],[{"start":{"row":12,"column":119},"end":{"row":12,"column":120},"action":"insert","lines":["l"],"id":13}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":32},"action":"remove","lines":["joStatus"],"id":14},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["o"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["p"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["A"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["d"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["d"]}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["r"],"id":15},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["e"]},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["s"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":70},"end":{"row":13,"column":71},"action":"remove","lines":["r"],"id":16},{"start":{"row":13,"column":69},"end":{"row":13,"column":70},"action":"remove","lines":["e"]},{"start":{"row":13,"column":68},"end":{"row":13,"column":69},"action":"remove","lines":["m"]},{"start":{"row":13,"column":67},"end":{"row":13,"column":68},"action":"remove","lines":["o"]},{"start":{"row":13,"column":66},"end":{"row":13,"column":67},"action":"remove","lines":["t"]},{"start":{"row":13,"column":65},"end":{"row":13,"column":66},"action":"remove","lines":["s"]},{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"remove","lines":["u"]},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"remove","lines":["C"]},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"remove","lines":["d"]},{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"remove","lines":["i"]}],[{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"insert","lines":["o"],"id":17},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"insert","lines":["p"]},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"insert","lines":["I"]},{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"insert","lines":["n"]},{"start":{"row":13,"column":65},"end":{"row":13,"column":66},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":66},"end":{"row":13,"column":67},"action":"insert","lines":["u"],"id":18},{"start":{"row":13,"column":67},"end":{"row":13,"column":68},"action":"insert","lines":["r"]},{"start":{"row":13,"column":68},"end":{"row":13,"column":69},"action":"insert","lines":["a"]},{"start":{"row":13,"column":69},"end":{"row":13,"column":70},"action":"insert","lines":["n"]},{"start":{"row":13,"column":70},"end":{"row":13,"column":71},"action":"insert","lines":["c"]},{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":34},"action":"remove","lines":["idOperator"],"id":19},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["o"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["p"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["F"]}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["a"],"id":20},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["a"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["w"]},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["v"],"id":21},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["e"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"insert","lines":["r"]}],[{"start":{"row":14,"column":46},"end":{"row":14,"column":83},"action":"insert","lines":["<td>\".$record['opFaawaver'] . \" </td>"],"id":22}],[{"start":{"row":14,"column":63},"end":{"row":14,"column":71},"action":"remove","lines":["Faawaver"],"id":23},{"start":{"row":14,"column":63},"end":{"row":14,"column":64},"action":"insert","lines":["L"]},{"start":{"row":14,"column":64},"end":{"row":14,"column":65},"action":"insert","lines":["i"]}],[{"start":{"row":14,"column":65},"end":{"row":14,"column":66},"action":"insert","lines":["c"],"id":24},{"start":{"row":14,"column":66},"end":{"row":14,"column":67},"action":"insert","lines":["e"]},{"start":{"row":14,"column":67},"end":{"row":14,"column":68},"action":"insert","lines":["n"]},{"start":{"row":14,"column":68},"end":{"row":14,"column":69},"action":"insert","lines":["s"]},{"start":{"row":14,"column":69},"end":{"row":14,"column":70},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":82},"end":{"row":14,"column":119},"action":"insert","lines":["<td>\".$record['opFaawaver'] . \" </td>"],"id":25}],[{"start":{"row":14,"column":99},"end":{"row":14,"column":107},"action":"remove","lines":["Faawaver"],"id":26},{"start":{"row":14,"column":99},"end":{"row":14,"column":100},"action":"insert","lines":["R"]},{"start":{"row":14,"column":100},"end":{"row":14,"column":101},"action":"insert","lines":["e"]},{"start":{"row":14,"column":101},"end":{"row":14,"column":102},"action":"insert","lines":["g"]},{"start":{"row":14,"column":102},"end":{"row":14,"column":103},"action":"insert","lines":["i"]}],[{"start":{"row":14,"column":103},"end":{"row":14,"column":104},"action":"insert","lines":["s"],"id":27},{"start":{"row":14,"column":104},"end":{"row":14,"column":105},"action":"insert","lines":["t"]},{"start":{"row":14,"column":105},"end":{"row":14,"column":106},"action":"insert","lines":["r"]},{"start":{"row":14,"column":106},"end":{"row":14,"column":107},"action":"insert","lines":["a"]},{"start":{"row":14,"column":107},"end":{"row":14,"column":108},"action":"insert","lines":["t"]},{"start":{"row":14,"column":108},"end":{"row":14,"column":109},"action":"insert","lines":["i"]}],[{"start":{"row":14,"column":109},"end":{"row":14,"column":110},"action":"insert","lines":["o"],"id":28},{"start":{"row":14,"column":110},"end":{"row":14,"column":111},"action":"insert","lines":["n"]}],[{"start":{"row":14,"column":123},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":29},{"start":{"row":15,"column":0},"end":{"row":15,"column":9},"action":"insert","lines":["         "]}],[{"start":{"row":15,"column":9},"end":{"row":15,"column":46},"action":"insert","lines":["<td>\".$record['opFaawaver'] . \" </td>"],"id":30}],[{"start":{"row":15,"column":26},"end":{"row":15,"column":34},"action":"remove","lines":["Faawaver"],"id":31},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"insert","lines":["W"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["9"]}],[{"start":{"row":15,"column":40},"end":{"row":15,"column":77},"action":"insert","lines":["<td>\".$record['opFaawaver'] . \" </td>"],"id":32}],[{"start":{"row":15,"column":57},"end":{"row":15,"column":65},"action":"remove","lines":["Faawaver"],"id":33},{"start":{"row":15,"column":57},"end":{"row":15,"column":58},"action":"insert","lines":["V"]},{"start":{"row":15,"column":58},"end":{"row":15,"column":59},"action":"insert","lines":["e"]},{"start":{"row":15,"column":59},"end":{"row":15,"column":60},"action":"insert","lines":["n"]},{"start":{"row":15,"column":60},"end":{"row":15,"column":61},"action":"insert","lines":["d"]},{"start":{"row":15,"column":61},"end":{"row":15,"column":62},"action":"insert","lines":["o"]},{"start":{"row":15,"column":62},"end":{"row":15,"column":63},"action":"insert","lines":["r"]}],[{"start":{"row":25,"column":26},"end":{"row":25,"column":33},"action":"remove","lines":["History"],"id":35},{"start":{"row":25,"column":26},"end":{"row":25,"column":27},"action":"insert","lines":["I"]},{"start":{"row":25,"column":27},"end":{"row":25,"column":28},"action":"insert","lines":["n"]},{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"insert","lines":["f"]},{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"insert","lines":["o"]}]]},"ace":{"folds":[],"scrolltop":154.5,"scrollleft":0,"selection":{"start":{"row":16,"column":6},"end":{"row":16,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1575793353227,"hash":"f652109c83e675ed04a71898a53031c0cb0f7977"}