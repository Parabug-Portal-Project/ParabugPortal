{"filter":false,"title":"PilotHistory.php","tooltip":"/PilotHistory.php","undoManager":{"mark":80,"position":80,"stack":[[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":48,"column":45},"end":{"row":48,"column":47},"action":"remove","lines":["ml"],"id":3,"ignore":true}],[{"start":{"row":48,"column":43},"end":{"row":48,"column":45},"action":"remove","lines":["ht"],"id":4,"ignore":true}],[{"start":{"row":48,"column":43},"end":{"row":48,"column":45},"action":"insert","lines":["ph"],"id":5,"ignore":true}],[{"start":{"row":48,"column":45},"end":{"row":48,"column":46},"action":"insert","lines":["p"],"id":6,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"remove","lines":["",""],"id":7},{"start":{"row":1,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["include \"inc/functions.php\";"," include '../inc/dbConnection.php';"," $dbConn = otterClothes(\"otterclothes\");"," function displayBrand() { ","     global $dbConn;","     ","     $sql = \"SELECT * FROM oc_brand ORDER BY brand\";","     $stmt = $dbConn->prepare($sql);","     $stmt->execute();","     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);","     ","     foreach ($records as $record) {","         echo \"<option value='\".$record['brandId'].\"'>\" . $record['brand'] . \"</option>\";","     }"," }"]}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":28},"action":"remove","lines":["include \"inc/functions.php\";"],"id":8,"ignore":true}],[{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"remove","lines":["/"],"id":9},{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"remove","lines":["c"]},{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"remove","lines":["n"]},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"remove","lines":["i"]},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"remove","lines":["/"]},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"remove","lines":["."]},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["."]}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":40},"action":"remove","lines":[" include 'dbConnection.php';"," $dbConn = otterClothes(\"otterclothes\");"],"id":10,"ignore":true},{"start":{"row":2,"column":0},"end":{"row":3,"column":60},"action":"insert","lines":["    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"remove","lines":["    "],"id":11,"ignore":true}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"remove","lines":["    "],"id":12,"ignore":true}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["    "],"id":13,"ignore":true}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "],"id":14,"ignore":true}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":[" "],"id":15,"ignore":true}],[{"start":{"row":4,"column":2},"end":{"row":4,"column":4},"action":"insert","lines":["  "],"id":16,"ignore":true}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":[" "],"id":17,"ignore":true}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"remove","lines":[" "],"id":18,"ignore":true}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":[" "],"id":19,"ignore":true}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":25},"action":"remove","lines":["nd"],"id":20,"ignore":true}],[{"start":{"row":4,"column":20},"end":{"row":4,"column":23},"action":"remove","lines":["Bra"],"id":21,"ignore":true}],[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["H"],"id":22,"ignore":true}],[{"start":{"row":4,"column":21},"end":{"row":4,"column":24},"action":"insert","lines":["ist"],"id":23,"ignore":true}],[{"start":{"row":4,"column":24},"end":{"row":4,"column":27},"action":"insert","lines":["ory"],"id":24,"ignore":true}],[{"start":{"row":4,"column":20},"end":{"row":4,"column":27},"action":"remove","lines":["History"],"id":25,"ignore":true},{"start":{"row":4,"column":20},"end":{"row":4,"column":25},"action":"insert","lines":["Brand"]}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":[" "],"id":26,"ignore":true},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":[" "]}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":5},"action":"remove","lines":["    "],"id":27,"ignore":true}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"remove","lines":["    "],"id":28,"ignore":true},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "],"id":29,"ignore":true}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["    "],"id":30,"ignore":true}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":60},"action":"remove","lines":["    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");"],"id":31,"ignore":true},{"start":{"row":2,"column":0},"end":{"row":3,"column":40},"action":"insert","lines":[" include 'dbConnection.php';"," $dbConn = otterClothes(\"otterclothes\");"]}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":28},"action":"insert","lines":["include \"inc/functions.php\";"],"id":32,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":28},"action":"remove","lines":["include \"inc/functions.php\";"],"id":33,"ignore":true},{"start":{"row":2,"column":0},"end":{"row":3,"column":40},"action":"remove","lines":[" include 'dbConnection.php';"," $dbConn = otterClothes(\"otterclothes\");"]},{"start":{"row":2,"column":0},"end":{"row":3,"column":60},"action":"insert","lines":["    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"remove","lines":["    "],"id":34,"ignore":true}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":24},"action":"remove","lines":[" function displayBrand()"],"id":35,"ignore":true}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":35},"action":"remove","lines":["c_brand"],"id":36,"ignore":true}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"remove","lines":["o"],"id":37,"ignore":true}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["o"],"id":38,"ignore":true}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":30},"action":"insert","lines":["pe"],"id":39,"ignore":true}],[{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["r"],"id":40,"ignore":true}],[{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["a"],"id":41,"ignore":true}],[{"start":{"row":7,"column":32},"end":{"row":7,"column":33},"action":"insert","lines":["t"],"id":42,"ignore":true}],[{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"insert","lines":["o"],"id":43,"ignore":true}],[{"start":{"row":7,"column":34},"end":{"row":7,"column":35},"action":"insert","lines":["r"],"id":44,"ignore":true}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":35},"action":"remove","lines":["operator"],"id":45,"ignore":true},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["j"]}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["o"],"id":46,"ignore":true}],[{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["b"],"id":47,"ignore":true}],[{"start":{"row":7,"column":40},"end":{"row":7,"column":45},"action":"remove","lines":["brand"],"id":48,"ignore":true},{"start":{"row":7,"column":40},"end":{"row":7,"column":41},"action":"insert","lines":["d"]}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":["a"],"id":49,"ignore":true}],[{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["t"],"id":50,"ignore":true}],[{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"insert","lines":["e"],"id":51,"ignore":true}],[{"start":{"row":13,"column":41},"end":{"row":13,"column":48},"action":"remove","lines":["brandId"],"id":52,"ignore":true},{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"insert","lines":["p"]}],[{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"insert","lines":["i"],"id":53,"ignore":true}],[{"start":{"row":13,"column":43},"end":{"row":13,"column":45},"action":"insert","lines":["lo"],"id":54,"ignore":true}],[{"start":{"row":13,"column":45},"end":{"row":13,"column":46},"action":"insert","lines":["t"],"id":55,"ignore":true}],[{"start":{"row":13,"column":46},"end":{"row":13,"column":47},"action":"insert","lines":["I"],"id":56,"ignore":true}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["F"],"id":57,"ignore":true}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"remove","lines":["F"],"id":58,"ignore":true},{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["d"]}],[{"start":{"row":13,"column":41},"end":{"row":13,"column":48},"action":"remove","lines":["pilotId"],"id":59,"ignore":true},{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"insert","lines":["i"]}],[{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"insert","lines":["d"],"id":60,"ignore":true}],[{"start":{"row":13,"column":43},"end":{"row":13,"column":44},"action":"insert","lines":["O"],"id":61,"ignore":true}],[{"start":{"row":13,"column":44},"end":{"row":13,"column":45},"action":"insert","lines":["p"],"id":62,"ignore":true}],[{"start":{"row":13,"column":45},"end":{"row":13,"column":46},"action":"insert","lines":["e"],"id":63,"ignore":true}],[{"start":{"row":13,"column":46},"end":{"row":13,"column":47},"action":"insert","lines":["r"],"id":64,"ignore":true}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["a"],"id":65,"ignore":true}],[{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"insert","lines":["t"],"id":66,"ignore":true}],[{"start":{"row":13,"column":49},"end":{"row":13,"column":50},"action":"insert","lines":["o"],"id":67,"ignore":true}],[{"start":{"row":13,"column":50},"end":{"row":13,"column":51},"action":"insert","lines":["r"],"id":68,"ignore":true}],[{"start":{"row":13,"column":72},"end":{"row":13,"column":75},"action":"remove","lines":["and"],"id":69,"ignore":true}],[{"start":{"row":13,"column":70},"end":{"row":13,"column":72},"action":"remove","lines":["br"],"id":70,"ignore":true}],[{"start":{"row":13,"column":70},"end":{"row":13,"column":71},"action":"insert","lines":["i"],"id":71,"ignore":true}],[{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"insert","lines":["d"],"id":72,"ignore":true}],[{"start":{"row":13,"column":72},"end":{"row":13,"column":74},"action":"insert","lines":["VC"],"id":73,"ignore":true}],[{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"remove","lines":["C"],"id":74,"ignore":true}],[{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"remove","lines":["V"],"id":75,"ignore":true},{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"insert","lines":["C"]}],[{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"insert","lines":["u"],"id":76,"ignore":true}],[{"start":{"row":13,"column":74},"end":{"row":13,"column":75},"action":"insert","lines":["s"],"id":77,"ignore":true}],[{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"insert","lines":["t"],"id":78,"ignore":true}],[{"start":{"row":13,"column":76},"end":{"row":13,"column":77},"action":"insert","lines":["o"],"id":79,"ignore":true}],[{"start":{"row":13,"column":77},"end":{"row":13,"column":78},"action":"insert","lines":["m"],"id":80,"ignore":true}],[{"start":{"row":13,"column":78},"end":{"row":13,"column":79},"action":"insert","lines":["e"],"id":81,"ignore":true}],[{"start":{"row":13,"column":79},"end":{"row":13,"column":80},"action":"insert","lines":["r"],"id":82,"ignore":true}]]},"ace":{"folds":[],"scrolltop":36.5,"scrollleft":0,"selection":{"start":{"row":13,"column":41},"end":{"row":13,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":1,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1575413306762,"hash":"92994af6d80cccca9b0899c4a2be4a7d5753904e"}