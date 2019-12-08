{"filter":false,"title":"updateJob.php","tooltip":"/updateJob.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"insert","lines":["."],"id":215}],[{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"insert","lines":[" "],"id":216}],[{"start":{"row":22,"column":29},"end":{"row":22,"column":30},"action":"insert","lines":[" "],"id":217}],[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"remove","lines":[" "],"id":218}],[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":[" "],"id":219}],[{"start":{"row":8,"column":0},"end":{"row":25,"column":25},"action":"remove","lines":["    $cu = array();","    $cu[\":date\"] = $_GET['date'];","    $cu[\":location\"] = $_GET['location'];","    $cu[\":status\"] = $_GET['status'];","    $cu[\":customer\"] = $_GET['customer'];","    $cu[\":operator\"] = $_GET['operator'];","","","    $sql = \"UPDATE job ","            SET joDate = :date,","               joLocation = :location,","               joStatus = :status,","               idCustomer = :customer,","               idOperator = :operator","            WHERE idJob = \" . $_GET['idJob'];","    ","    $stmt = $conn->prepare($cu);","    $stmt->execute($cu); "],"id":220},{"start":{"row":8,"column":0},"end":{"row":29,"column":30},"action":"insert","lines":["    ","    $np = array();","    $np[\":productName\"] = $_GET['productName'];","    $np[\":productDescription\"] = $_GET['description'];","    $np[\":price\"] = $_GET['price'];","    $np[\":genderId\"] = $_GET['genderId'];","    $np[\":colorId\"] = $_GET['colorId'];","    $np[\":brandId\"] = $_GET['brandId'];","    $np[\":productImage\"] = $_GET['productImage'];","    ","    $sql = \"UPDATE oc_product ","            SET productName= :productName,","               productDescription = :productDescription,","               price = :price,","               genderId = :genderId,","               colorId = :colorId,","               brandId = :brandId,","               productImage = :productImage","            WHERE productId = \" . $_GET['productId'];","    ","    $stmt = $dbConn->prepare($sql);","    $stmt->execute($np);      "]}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":["p"],"id":221},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["n"]}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":["c"],"id":222},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":["u"]}],[{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"remove","lines":["p"],"id":223},{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"remove","lines":["n"]}],[{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"insert","lines":["c"],"id":224}],[{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"insert","lines":["u"],"id":225}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":7},"action":"remove","lines":["$cu"],"id":226},{"start":{"row":10,"column":4},"end":{"row":10,"column":7},"action":"insert","lines":["$cu"]}],[{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"remove","lines":["p"],"id":227},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"remove","lines":["n"]}],[{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["c"],"id":228},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["u"]}],[{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"remove","lines":["p"],"id":229},{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"remove","lines":["n"]}],[{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"insert","lines":["c"],"id":230},{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":["8"]}],[{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"remove","lines":["8"],"id":231}],[{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":["u"],"id":232}],[{"start":{"row":13,"column":6},"end":{"row":13,"column":7},"action":"remove","lines":["p"],"id":233},{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"remove","lines":["n"]}],[{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"insert","lines":["c"],"id":234},{"start":{"row":13,"column":6},"end":{"row":13,"column":7},"action":"insert","lines":["u"]}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["p"],"id":235},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":["n"]}],[{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["c"],"id":236},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["i"]}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["i"],"id":237}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["u"],"id":238}],[{"start":{"row":10,"column":10},"end":{"row":10,"column":21},"action":"remove","lines":["productName"],"id":239},{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["d"]},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["a"]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["t"]},{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":37},"action":"remove","lines":["roductName"],"id":240},{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"remove","lines":["p"]}],[{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"insert","lines":["d"],"id":241},{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"insert","lines":["a"]},{"start":{"row":10,"column":28},"end":{"row":10,"column":29},"action":"insert","lines":["t"]},{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":28},"action":"remove","lines":["productDescription"],"id":242}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["l"],"id":243},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["o"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["c"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["a"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["a"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["t"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["i"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["o"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["a"],"id":244}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":41},"action":"remove","lines":["description"],"id":245}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":["l"],"id":246},{"start":{"row":11,"column":31},"end":{"row":11,"column":32},"action":"insert","lines":["o"]},{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["c"]},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["a"]},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["t"]},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["i"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["o"]},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["n"]}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["\\"],"id":247}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"remove","lines":["\\"],"id":248},{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"remove","lines":["e"]},{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"remove","lines":["c"]},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"remove","lines":["i"]},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"remove","lines":["r"]}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["s"],"id":249}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"remove","lines":["s"],"id":250},{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"remove","lines":["p"]}],[{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":["s"],"id":251},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["t"]},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["a"]},{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"insert","lines":["t"]},{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"insert","lines":["u"]},{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["s"]}],[{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"remove","lines":["e"],"id":252},{"start":{"row":12,"column":31},"end":{"row":12,"column":32},"action":"remove","lines":["c"]},{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"remove","lines":["i"]},{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"remove","lines":["r"]},{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"remove","lines":["p"]}],[{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":["s"],"id":253},{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"insert","lines":["t"]},{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"insert","lines":["a"]},{"start":{"row":12,"column":31},"end":{"row":12,"column":32},"action":"insert","lines":["t"]},{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"insert","lines":["u"]},{"start":{"row":12,"column":33},"end":{"row":12,"column":34},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"remove","lines":["d"],"id":254},{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"remove","lines":["I"]},{"start":{"row":13,"column":15},"end":{"row":13,"column":16},"action":"remove","lines":["r"]},{"start":{"row":13,"column":14},"end":{"row":13,"column":15},"action":"remove","lines":["e"]},{"start":{"row":13,"column":13},"end":{"row":13,"column":14},"action":"remove","lines":["d"]},{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"remove","lines":["n"]},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"remove","lines":["e"]},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"remove","lines":["g"]}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["o"],"id":255},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"insert","lines":["p"]},{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"insert","lines":["e"]},{"start":{"row":13,"column":13},"end":{"row":13,"column":14},"action":"insert","lines":["r"]},{"start":{"row":13,"column":14},"end":{"row":13,"column":15},"action":"insert","lines":["a"]},{"start":{"row":13,"column":15},"end":{"row":13,"column":16},"action":"insert","lines":["t"]}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":16},"action":"remove","lines":["operat"],"id":256},{"start":{"row":13,"column":10},"end":{"row":13,"column":18},"action":"insert","lines":["operator"]}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"remove","lines":["d"],"id":257},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"remove","lines":["I"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"remove","lines":["r"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"remove","lines":["e"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"remove","lines":["d"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"remove","lines":["n"]},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"remove","lines":["e"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"remove","lines":["g"]}],[{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["o"],"id":258},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["p"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["e"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":30},"end":{"row":13,"column":34},"action":"remove","lines":["oper"],"id":259},{"start":{"row":13,"column":30},"end":{"row":13,"column":38},"action":"insert","lines":["operator"]}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"remove","lines":["d"],"id":260},{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"remove","lines":["I"]},{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"remove","lines":["r"]},{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"remove","lines":["o"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"remove","lines":["l"]},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"remove","lines":["o"]}],[{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["u"],"id":261},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["s"]},{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"insert","lines":["t"]},{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"insert","lines":["o"]},{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"insert","lines":["m"]},{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"insert","lines":["e"]},{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"insert","lines":["r"]}],[{"start":{"row":14,"column":36},"end":{"row":14,"column":37},"action":"remove","lines":["d"],"id":262},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"remove","lines":["I"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["r"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"remove","lines":["o"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"remove","lines":["l"]},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"remove","lines":["o"]}],[{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["c"],"id":263},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["u"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"insert","lines":["s"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"insert","lines":["t"]},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"insert","lines":["o"]}],[{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"remove","lines":["o"],"id":264},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["t"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"remove","lines":["s"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"remove","lines":["u"]},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"remove","lines":["c"]}],[{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["u"],"id":265},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["s"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"insert","lines":["t"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"insert","lines":["o"]},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"insert","lines":["m"]},{"start":{"row":14,"column":36},"end":{"row":14,"column":37},"action":"insert","lines":["e"]},{"start":{"row":14,"column":37},"end":{"row":14,"column":38},"action":"insert","lines":["r"]}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":49},"action":"remove","lines":["    $np[\":brandId\"] = $_GET['brandId'];","    $np[\":productImage\"] = $_GET['productImage'];"],"id":266}],[{"start":{"row":17,"column":19},"end":{"row":17,"column":29},"action":"remove","lines":["oc_product"],"id":267}],[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["j"],"id":268},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["o"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["b"]}],[{"start":{"row":18,"column":17},"end":{"row":18,"column":27},"action":"remove","lines":["roductName"],"id":269},{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"remove","lines":["p"]}],[{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"insert","lines":["d"],"id":270},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"insert","lines":["a"]},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["t"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"remove","lines":["e"],"id":271},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"remove","lines":["m"]},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["a"]},{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"remove","lines":["N"]},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"remove","lines":["t"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"remove","lines":["c"]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"remove","lines":["u"]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"remove","lines":["d"]}],[{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"remove","lines":["o"],"id":272},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"remove","lines":["r"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["p"]}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["j"],"id":273},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["o"]},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["D"]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["a"]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["t"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"remove","lines":["n"],"id":274},{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"remove","lines":["o"]},{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"remove","lines":["i"]},{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"remove","lines":["t"]},{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"remove","lines":["p"]},{"start":{"row":19,"column":27},"end":{"row":19,"column":28},"action":"remove","lines":["i"]},{"start":{"row":19,"column":26},"end":{"row":19,"column":27},"action":"remove","lines":["r"]},{"start":{"row":19,"column":25},"end":{"row":19,"column":26},"action":"remove","lines":["c"]},{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"remove","lines":["s"]},{"start":{"row":19,"column":23},"end":{"row":19,"column":24},"action":"remove","lines":["e"]},{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"remove","lines":["D"]},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"remove","lines":["t"]},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"remove","lines":["c"]}],[{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"remove","lines":["u"],"id":275},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"remove","lines":["d"]},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"remove","lines":["o"]},{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"remove","lines":["r"]},{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"remove","lines":["p"]}],[{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"insert","lines":["j"],"id":276},{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["o"]},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["L"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["o"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["c"]}],[{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"remove","lines":["c"],"id":277},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"remove","lines":["o"]},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"remove","lines":["L"]},{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"remove","lines":["o"]},{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"remove","lines":["j"]}],[{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"insert","lines":["l"],"id":278},{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["o"]},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["c"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["a"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["t"]},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["i"]},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["o"]},{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"insert","lines":["n"]}],[{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"remove","lines":["n"],"id":279},{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"remove","lines":["o"]},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"remove","lines":["i"]},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"remove","lines":["t"]},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"remove","lines":["p"]},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"remove","lines":["i"]},{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"remove","lines":["r"]},{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"remove","lines":["c"]},{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"remove","lines":["s"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"remove","lines":["e"]},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"remove","lines":["D"]},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"remove","lines":["t"]},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"remove","lines":["c"]},{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"remove","lines":["u"]},{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"remove","lines":["d"]},{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"remove","lines":["o"]}],[{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"remove","lines":["r"],"id":280},{"start":{"row":19,"column":27},"end":{"row":19,"column":28},"action":"remove","lines":["p"]}],[{"start":{"row":19,"column":27},"end":{"row":19,"column":28},"action":"insert","lines":["j"],"id":281},{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"insert","lines":["o"]},{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"insert","lines":["L"]},{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"insert","lines":["o"]},{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"insert","lines":["c"]},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["a"]},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["t"]},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["i"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"insert","lines":["o"]}],[{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"insert","lines":["n"],"id":282}],[{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"remove","lines":[" "],"id":283},{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"remove","lines":["e"]},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"remove","lines":["c"]},{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"remove","lines":["i"]},{"start":{"row":20,"column":16},"end":{"row":20,"column":17},"action":"remove","lines":["r"]},{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"remove","lines":["p"]}],[{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"insert","lines":["s"],"id":284},{"start":{"row":20,"column":16},"end":{"row":20,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":20,"column":15},"end":{"row":20,"column":17},"action":"remove","lines":["st"],"id":285},{"start":{"row":20,"column":15},"end":{"row":20,"column":21},"action":"insert","lines":["status"]}],[{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":[" "],"id":286}],[{"start":{"row":20,"column":29},"end":{"row":20,"column":30},"action":"remove","lines":["e"],"id":287},{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"remove","lines":["c"]},{"start":{"row":20,"column":27},"end":{"row":20,"column":28},"action":"remove","lines":["i"]},{"start":{"row":20,"column":26},"end":{"row":20,"column":27},"action":"remove","lines":["r"]},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"remove","lines":["p"]}],[{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["j"],"id":288},{"start":{"row":20,"column":26},"end":{"row":20,"column":27},"action":"insert","lines":["o"]},{"start":{"row":20,"column":27},"end":{"row":20,"column":28},"action":"insert","lines":["S"]},{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"insert","lines":["a"]},{"start":{"row":20,"column":29},"end":{"row":20,"column":30},"action":"insert","lines":["t"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"insert","lines":["a"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"insert","lines":["t"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"insert","lines":["u"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"insert","lines":["s"],"id":289}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"remove","lines":["s"],"id":290},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"remove","lines":["u"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"remove","lines":["t"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"remove","lines":["a"]}],[{"start":{"row":20,"column":29},"end":{"row":20,"column":30},"action":"remove","lines":["t"],"id":291},{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"remove","lines":["a"]}],[{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"insert","lines":["t"],"id":292},{"start":{"row":20,"column":29},"end":{"row":20,"column":30},"action":"insert","lines":["a"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"insert","lines":["t"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"insert","lines":["u"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"remove","lines":["d"],"id":293},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"remove","lines":["I"]},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"remove","lines":["r"]},{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"remove","lines":["e"]},{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"remove","lines":["d"]},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"remove","lines":["n"]},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"remove","lines":["e"]}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"remove","lines":["g"],"id":294}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["c"],"id":295},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":["u"]},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["s"]},{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["t"]},{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"insert","lines":["o"]},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["m"]},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["e"]},{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"insert","lines":["r"]}],[{"start":{"row":21,"column":34},"end":{"row":21,"column":35},"action":"remove","lines":["d"],"id":296},{"start":{"row":21,"column":33},"end":{"row":21,"column":34},"action":"remove","lines":["I"]},{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"remove","lines":["r"]},{"start":{"row":21,"column":31},"end":{"row":21,"column":32},"action":"remove","lines":["e"]},{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"remove","lines":["d"]},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"remove","lines":["n"]},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"remove","lines":["e"]},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"remove","lines":["g"]}],[{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"insert","lines":["i"],"id":297},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"insert","lines":["d"]},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["C"]},{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"insert","lines":["u"]},{"start":{"row":21,"column":31},"end":{"row":21,"column":32},"action":"insert","lines":["s"]},{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"insert","lines":["t"]},{"start":{"row":21,"column":33},"end":{"row":21,"column":34},"action":"insert","lines":["o"]}],[{"start":{"row":21,"column":34},"end":{"row":21,"column":35},"action":"insert","lines":["m"],"id":298},{"start":{"row":21,"column":35},"end":{"row":21,"column":36},"action":"insert","lines":["e"]},{"start":{"row":21,"column":36},"end":{"row":21,"column":37},"action":"insert","lines":["r"]}],[{"start":{"row":22,"column":21},"end":{"row":22,"column":22},"action":"remove","lines":["d"],"id":299},{"start":{"row":22,"column":20},"end":{"row":22,"column":21},"action":"remove","lines":["I"]},{"start":{"row":22,"column":19},"end":{"row":22,"column":20},"action":"remove","lines":["r"]},{"start":{"row":22,"column":18},"end":{"row":22,"column":19},"action":"remove","lines":["o"]},{"start":{"row":22,"column":17},"end":{"row":22,"column":18},"action":"remove","lines":["l"]},{"start":{"row":22,"column":16},"end":{"row":22,"column":17},"action":"remove","lines":["o"]},{"start":{"row":22,"column":15},"end":{"row":22,"column":16},"action":"remove","lines":["c"]}],[{"start":{"row":22,"column":15},"end":{"row":22,"column":16},"action":"insert","lines":["o"],"id":300},{"start":{"row":22,"column":16},"end":{"row":22,"column":17},"action":"insert","lines":["p"]},{"start":{"row":22,"column":17},"end":{"row":22,"column":18},"action":"insert","lines":["e"]}],[{"start":{"row":22,"column":15},"end":{"row":22,"column":18},"action":"remove","lines":["ope"],"id":301},{"start":{"row":22,"column":15},"end":{"row":22,"column":23},"action":"insert","lines":["operator"]}],[{"start":{"row":22,"column":33},"end":{"row":22,"column":34},"action":"remove","lines":["d"],"id":302},{"start":{"row":22,"column":32},"end":{"row":22,"column":33},"action":"remove","lines":["I"]},{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"remove","lines":["r"]},{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"remove","lines":["o"]},{"start":{"row":22,"column":29},"end":{"row":22,"column":30},"action":"remove","lines":["l"]},{"start":{"row":22,"column":28},"end":{"row":22,"column":29},"action":"remove","lines":["o"]}],[{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"remove","lines":["c"],"id":303}],[{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"insert","lines":["i"],"id":304},{"start":{"row":22,"column":28},"end":{"row":22,"column":29},"action":"insert","lines":["d"]},{"start":{"row":22,"column":29},"end":{"row":22,"column":30},"action":"insert","lines":["O"]},{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"insert","lines":["p"]},{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"insert","lines":["e"]},{"start":{"row":22,"column":32},"end":{"row":22,"column":33},"action":"insert","lines":["r"]}],[{"start":{"row":22,"column":33},"end":{"row":22,"column":34},"action":"insert","lines":["a"],"id":305},{"start":{"row":22,"column":34},"end":{"row":22,"column":35},"action":"insert","lines":["t"]},{"start":{"row":22,"column":35},"end":{"row":22,"column":36},"action":"insert","lines":["o"]},{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"insert","lines":["r"]}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":43},"action":"remove","lines":["               brandId = :brandId,","               productImage = :productImage"],"id":306},{"start":{"row":22,"column":38},"end":{"row":23,"column":0},"action":"remove","lines":["",""]},{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"remove","lines":[","]}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":27},"action":"remove","lines":["productId"],"id":307}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["i"],"id":308},{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["d"]},{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["J"]},{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"insert","lines":["o"]},{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":["b"]}],[{"start":{"row":23,"column":45},"end":{"row":23,"column":46},"action":"remove","lines":["d"],"id":309},{"start":{"row":23,"column":44},"end":{"row":23,"column":45},"action":"remove","lines":["I"]},{"start":{"row":23,"column":43},"end":{"row":23,"column":44},"action":"remove","lines":["t"]},{"start":{"row":23,"column":42},"end":{"row":23,"column":43},"action":"remove","lines":["c"]},{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"remove","lines":["u"]},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"remove","lines":["d"]},{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"remove","lines":["o"]},{"start":{"row":23,"column":38},"end":{"row":23,"column":39},"action":"remove","lines":["r"]},{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"remove","lines":["p"]}],[{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"insert","lines":["i"],"id":310},{"start":{"row":23,"column":38},"end":{"row":23,"column":39},"action":"insert","lines":["d"]},{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"insert","lines":["J"]},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"insert","lines":["o"]},{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"insert","lines":["b"]}],[{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"remove","lines":["C"],"id":311},{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"remove","lines":["b"]},{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["d"]}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["c"],"id":312},{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["o"]}],[{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"remove","lines":["o"],"id":313}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"remove","lines":["p"],"id":314},{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"remove","lines":["n"]}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["c"],"id":315},{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["u"]}]]},"ace":{"folds":[],"scrolltop":769,"scrollleft":0,"selection":{"start":{"row":26,"column":22},"end":{"row":26,"column":22},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":47,"state":"start","mode":"ace/mode/php"}},"timestamp":1575846508964,"hash":"8418458e43e2d696c948f22fbde5561a78ec4eec"}