{"filter":false,"title":"PilotHistory.php","tooltip":"/PilotHistory.php","undoManager":{"mark":66,"position":66,"stack":[[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":48,"column":45},"end":{"row":48,"column":47},"action":"remove","lines":["ml"],"id":3,"ignore":true}],[{"start":{"row":48,"column":43},"end":{"row":48,"column":45},"action":"remove","lines":["ht"],"id":4,"ignore":true}],[{"start":{"row":48,"column":43},"end":{"row":48,"column":45},"action":"insert","lines":["ph"],"id":5,"ignore":true}],[{"start":{"row":48,"column":45},"end":{"row":48,"column":46},"action":"insert","lines":["p"],"id":6,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"remove","lines":["",""],"id":7},{"start":{"row":1,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["include \"inc/functions.php\";"," include '../inc/dbConnection.php';"," $dbConn = otterClothes(\"otterclothes\");"," function displayBrand() { ","     global $dbConn;","     ","     $sql = \"SELECT * FROM oc_brand ORDER BY brand\";","     $stmt = $dbConn->prepare($sql);","     $stmt->execute();","     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);","     ","     foreach ($records as $record) {","         echo \"<option value='\".$record['brandId'].\"'>\" . $record['brand'] . \"</option>\";","     }"," }"]}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":17},"action":"remove","lines":["c/"],"id":9,"ignore":true}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":15},"action":"remove","lines":["./in"],"id":10,"ignore":true}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["."],"id":11,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":28},"action":"remove","lines":["include \"inc/functions.php\";"],"id":8}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":40},"action":"remove","lines":[" include 'dbConnection.php';"," $dbConn = otterClothes(\"otterclothes\");"],"id":12},{"start":{"row":2,"column":0},"end":{"row":3,"column":60},"action":"insert","lines":["    include 'dbConnection.php';","    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"remove","lines":["    "],"id":13}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":24},"action":"remove","lines":[" function displayBrand()"],"id":22}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":35},"action":"remove","lines":["c_brand"],"id":23},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"remove","lines":["o"]}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["o"],"id":24},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["p"]},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["e"]},{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["r"]}],[{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["a"],"id":25},{"start":{"row":7,"column":32},"end":{"row":7,"column":33},"action":"insert","lines":["t"]},{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"insert","lines":["o"]},{"start":{"row":7,"column":34},"end":{"row":7,"column":35},"action":"insert","lines":["r"]}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":35},"action":"remove","lines":["operator"],"id":26},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["j"]},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["o"]},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["b"]}],[{"start":{"row":7,"column":40},"end":{"row":7,"column":45},"action":"remove","lines":["brand"],"id":27},{"start":{"row":7,"column":40},"end":{"row":7,"column":41},"action":"insert","lines":["d"]},{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":["a"]},{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["t"]},{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":41},"end":{"row":13,"column":48},"action":"remove","lines":["brandId"],"id":28},{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"insert","lines":["p"]},{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"insert","lines":["i"]},{"start":{"row":13,"column":43},"end":{"row":13,"column":44},"action":"insert","lines":["l"]},{"start":{"row":13,"column":44},"end":{"row":13,"column":45},"action":"insert","lines":["o"]},{"start":{"row":13,"column":45},"end":{"row":13,"column":46},"action":"insert","lines":["t"]},{"start":{"row":13,"column":46},"end":{"row":13,"column":47},"action":"insert","lines":["I"]}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["F"],"id":29}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"remove","lines":["F"],"id":30}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["d"],"id":31}],[{"start":{"row":13,"column":41},"end":{"row":13,"column":48},"action":"remove","lines":["pilotId"],"id":32},{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"insert","lines":["i"]},{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"insert","lines":["d"]},{"start":{"row":13,"column":43},"end":{"row":13,"column":44},"action":"insert","lines":["O"]},{"start":{"row":13,"column":44},"end":{"row":13,"column":45},"action":"insert","lines":["p"]},{"start":{"row":13,"column":45},"end":{"row":13,"column":46},"action":"insert","lines":["e"]},{"start":{"row":13,"column":46},"end":{"row":13,"column":47},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["a"],"id":33},{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"insert","lines":["t"]},{"start":{"row":13,"column":49},"end":{"row":13,"column":50},"action":"insert","lines":["o"]},{"start":{"row":13,"column":50},"end":{"row":13,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":74},"end":{"row":13,"column":75},"action":"remove","lines":["d"],"id":34},{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"remove","lines":["n"]},{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"remove","lines":["a"]},{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"remove","lines":["r"]},{"start":{"row":13,"column":70},"end":{"row":13,"column":71},"action":"remove","lines":["b"]}],[{"start":{"row":13,"column":70},"end":{"row":13,"column":71},"action":"insert","lines":["i"],"id":35},{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"insert","lines":["d"]}],[{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"insert","lines":["V"],"id":36},{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"insert","lines":["C"]}],[{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"remove","lines":["C"],"id":37},{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"remove","lines":["V"]}],[{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"insert","lines":["C"],"id":38},{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"insert","lines":["u"]},{"start":{"row":13,"column":74},"end":{"row":13,"column":75},"action":"insert","lines":["s"]},{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"insert","lines":["t"]},{"start":{"row":13,"column":76},"end":{"row":13,"column":77},"action":"insert","lines":["o"]},{"start":{"row":13,"column":77},"end":{"row":13,"column":78},"action":"insert","lines":["m"]},{"start":{"row":13,"column":78},"end":{"row":13,"column":79},"action":"insert","lines":["e"]},{"start":{"row":13,"column":79},"end":{"row":13,"column":80},"action":"insert","lines":["r"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":39,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["/"],"id":40,"ignore":true}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["*"],"id":41,"ignore":true}],[{"start":{"row":17,"column":2},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":42,"ignore":true}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":["*"],"id":43,"ignore":true}],[{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"insert","lines":["/"],"id":44,"ignore":true}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":2},"action":"remove","lines":["*/"],"id":45,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":2},"action":"remove","lines":["/*"],"id":46,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":2},"action":"insert","lines":["//"],"id":47,"ignore":true}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["/"],"id":48,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["/"],"id":49,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":2},"action":"insert","lines":["//"],"id":50,"ignore":true}],[{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"remove","lines":["/"],"id":51,"ignore":true}],[{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["#"],"id":52,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":2},"action":"remove","lines":["/#"],"id":53,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["#"],"id":54,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"remove","lines":["#"],"id":55,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["#"],"id":56,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["#"],"id":57,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["#"],"id":58,"ignore":true}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["#"],"id":59,"ignore":true}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"remove","lines":["#"],"id":60,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":61}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":["#"],"id":62,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":3},"action":"insert","lines":["// "],"id":63},{"start":{"row":2,"column":0},"end":{"row":2,"column":3},"action":"insert","lines":["// "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"insert","lines":["// "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":3},"action":"insert","lines":["// "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"insert","lines":["// "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":3},"action":"insert","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"insert","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"insert","lines":["// "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":3},"action":"insert","lines":["// "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":3},"action":"insert","lines":["// "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":3},"action":"insert","lines":["// "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":3},"action":"insert","lines":["// "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":3},"action":"insert","lines":["// "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"remove","lines":["C"],"id":64}],[{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"remove","lines":["b"],"id":65}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["d"],"id":66}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["c"],"id":67}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"remove","lines":["C"],"id":70},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["b"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["d"]}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["c"],"id":71}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":3},"action":"remove","lines":["// "],"id":72},{"start":{"row":2,"column":0},"end":{"row":2,"column":3},"action":"remove","lines":["// "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"remove","lines":["// "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":3},"action":"remove","lines":["// "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"remove","lines":["// "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":3},"action":"remove","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"remove","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"remove","lines":["// "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":3},"action":"remove","lines":["// "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":3},"action":"remove","lines":["// "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":3},"action":"remove","lines":["// "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":3},"action":"remove","lines":["// "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":3},"action":"remove","lines":["// "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":3},"action":"remove","lines":["// "]}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":44},"action":"remove","lines":["ate"],"id":73},{"start":{"row":7,"column":40},"end":{"row":7,"column":41},"action":"remove","lines":["d"]}],[{"start":{"row":7,"column":40},"end":{"row":7,"column":41},"action":"insert","lines":["i"],"id":74},{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":["e"]}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"remove","lines":["e"],"id":75}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":["d"],"id":76},{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["O"]},{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"insert","lines":["p"]}],[{"start":{"row":7,"column":40},"end":{"row":7,"column":44},"action":"remove","lines":["idOp"],"id":77},{"start":{"row":7,"column":40},"end":{"row":7,"column":50},"action":"insert","lines":["idOperator"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":[" "],"id":78},{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":[" "]},{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"insert","lines":[" "]},{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"insert","lines":[" "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":2},"end":{"row":15,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1575416963327,"hash":"509a2a9abc0346d2abae112c04ac9ce6c86d3db5"}