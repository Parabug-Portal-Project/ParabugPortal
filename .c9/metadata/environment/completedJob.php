{"filter":false,"title":"completedJob.php","tooltip":"/completedJob.php","undoManager":{"mark":19,"position":19,"stack":[[{"start":{"row":0,"column":0},"end":{"row":30,"column":7},"action":"insert","lines":["<?php","    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");"," { ","     global $conn;","     ","     $sql = \"SELECT * FROM job\";","     $stmt = $conn->prepare($sql);","     $stmt->execute();","     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);","     ","     foreach ($records as $record) {","         echo \"<td>\".$record['joID'] . \" </td><td>\".$record['joDate'] . \" </td><td> \" . $record['joLocation'] . \"</td> ","         <td>\".$record['joStatus'] . \" </td> <td>\".$record['idCustomer'] . \" </td>","         <td>\".$record['idOperator'] . \" </td>\";","     }","     echo \"</br>\";","     echo \"</br>\";"," }","?>","","","<html>","    <head>","        <title> Pilot Job History </title>","        <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" />","    </head>","            <div class=\"logo\">","                <img src=\"img/Parabug-Logo.png\"></img>","      </div>","</html>"],"id":1}],[{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"remove","lines":["b"],"id":2},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"remove","lines":["o"]},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"remove","lines":["j"]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["m"],"id":3},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["a"]},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["p"]}],[{"start":{"row":12,"column":31},"end":{"row":12,"column":32},"action":"remove","lines":["o"],"id":4},{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"remove","lines":["j"]}],[{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"insert","lines":["m"],"id":5},{"start":{"row":12,"column":31},"end":{"row":12,"column":32},"action":"insert","lines":["a"]},{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"insert","lines":["p"]}],[{"start":{"row":12,"column":63},"end":{"row":12,"column":68},"action":"remove","lines":["oDate"],"id":6},{"start":{"row":12,"column":62},"end":{"row":12,"column":63},"action":"remove","lines":["j"]}],[{"start":{"row":12,"column":62},"end":{"row":12,"column":63},"action":"insert","lines":["m"],"id":7},{"start":{"row":12,"column":63},"end":{"row":12,"column":64},"action":"insert","lines":["a"]},{"start":{"row":12,"column":64},"end":{"row":12,"column":65},"action":"insert","lines":["V"]},{"start":{"row":12,"column":65},"end":{"row":12,"column":66},"action":"insert","lines":["i"]},{"start":{"row":12,"column":66},"end":{"row":12,"column":67},"action":"insert","lines":["f"]},{"start":{"row":12,"column":67},"end":{"row":12,"column":68},"action":"insert","lines":["r"]}],[{"start":{"row":12,"column":67},"end":{"row":12,"column":68},"action":"remove","lines":["r"],"id":8},{"start":{"row":12,"column":66},"end":{"row":12,"column":67},"action":"remove","lines":["f"]}],[{"start":{"row":12,"column":66},"end":{"row":12,"column":67},"action":"insert","lines":["d"],"id":9},{"start":{"row":12,"column":67},"end":{"row":12,"column":68},"action":"insert","lines":["e"]},{"start":{"row":12,"column":68},"end":{"row":12,"column":69},"action":"insert","lines":["o"]}],[{"start":{"row":12,"column":100},"end":{"row":12,"column":109},"action":"remove","lines":["oLocation"],"id":10},{"start":{"row":12,"column":99},"end":{"row":12,"column":100},"action":"remove","lines":["j"]}],[{"start":{"row":12,"column":99},"end":{"row":12,"column":100},"action":"insert","lines":["m"],"id":11},{"start":{"row":12,"column":100},"end":{"row":12,"column":101},"action":"insert","lines":["a"]},{"start":{"row":12,"column":101},"end":{"row":12,"column":102},"action":"insert","lines":["M"]},{"start":{"row":12,"column":102},"end":{"row":12,"column":103},"action":"insert","lines":["a"]},{"start":{"row":12,"column":103},"end":{"row":12,"column":104},"action":"insert","lines":["p"]}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":32},"action":"remove","lines":["joStatus"],"id":12},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["m"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["a"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["P"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["h"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["o"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["t"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["o"]}],[{"start":{"row":13,"column":68},"end":{"row":13,"column":69},"action":"remove","lines":["r"],"id":13},{"start":{"row":13,"column":67},"end":{"row":13,"column":68},"action":"remove","lines":["e"]},{"start":{"row":13,"column":66},"end":{"row":13,"column":67},"action":"remove","lines":["m"]},{"start":{"row":13,"column":65},"end":{"row":13,"column":66},"action":"remove","lines":["o"]},{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"remove","lines":["t"]},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"remove","lines":["s"]},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"remove","lines":["u"]},{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"remove","lines":["C"]}],[{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"insert","lines":["J"],"id":14},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"insert","lines":["o"]},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"insert","lines":["b"]}],[{"start":{"row":13,"column":76},"end":{"row":14,"column":47},"action":"remove","lines":["","         <td>\".$record['idOperator'] . \" </td>\""],"id":15},{"start":{"row":13,"column":76},"end":{"row":13,"column":77},"action":"insert","lines":["\""]}],[{"start":{"row":23,"column":16},"end":{"row":23,"column":33},"action":"remove","lines":["Pilot Job History"],"id":16},{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":["C"]},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["o"]},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["m"]},{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["p"]},{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["l"]},{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"insert","lines":["e"]},{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":["t"]},{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"insert","lines":["d"],"id":17}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":[" "],"id":18},{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"insert","lines":["H"]},{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"insert","lines":["o"]},{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"insert","lines":["b"]}],[{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"remove","lines":["b"],"id":19},{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"remove","lines":["o"]},{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"remove","lines":["H"]}],[{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"insert","lines":["J"],"id":20},{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"insert","lines":["o"]},{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"insert","lines":["b"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":29},"end":{"row":23,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":35,"mode":"ace/mode/php"}},"timestamp":1575855596204,"hash":"0ee7f9185062b838b4169f6834d0f2cb829d52e4"}