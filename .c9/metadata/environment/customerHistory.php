{"changed":true,"filter":false,"title":"customerHistory.php","tooltip":"/customerHistory.php","value":"<html>\n\n    <head>\n        <title> Job History </title>\n    <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" />\n\n\n    </head>\n    <header>\n        <div class = \"paraWrap\">\n           <div id=\"para\">\n                   <h1>PARABUG JOB HISTORY</h1>\n            </div>\n       </div>\n      \n        </header>\n    <div>\n        <body>\n            <center>\n            \n            <br><br>\n            <table> \n                <tr>\n                    <th>Job Id</th>\n                    <th>Job Date</th>\n                    <th>Job Location</th>\n                    <th>Job Status</th>\n                    <th>Pilot Id</th>\n                </tr>\n                <?php\n                    include 'dbConnection.php';\n                    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");\n                    { \n                        global $conn;\n                        \n                        // echo \"hello\" . $username;\n                        \n                        // Hard coded for now, hoping to show only the Jobs that have the same customer ID as\n                        // the current user soon!\n                        $sql = \"SELECT * FROM job\";\n                        // $sql = \"SELECT * FROM job JOIN operator WHERE idCustomer=\" . 1234;\n                        $stmt = $conn->prepare($sql);\n                        $stmt->execute();\n                        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);\n                        \n                        \n                        foreach ($records as $record) {\n                            echo \"<tr><td>\".$record['idJob'] . \"</td><td>\" . $record['joDate'] . \" </td><td> \" . $record['joLocation'] . \"</td><td>\"\n                            . (($record['joStatus'] == 0) ? \"Not Completed\" : \"Completed\") . \" </td><td>\" . $record['idOperator'] . \" </td></tr>\";\n                        }\n                                            }\n                ?>\n            \n            </table>\n\n</center>\n\n        </body>\n        </div>\n</html>","undoManager":{"mark":99,"position":100,"stack":[[{"start":{"row":10,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":["        "],"id":594,"ignore":true}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":[" "],"id":595,"ignore":true}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":15},"action":"remove","lines":["r>"],"id":596,"ignore":true}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":13},"action":"remove","lines":["ente"],"id":597,"ignore":true}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":9},"action":"remove","lines":[" <c"],"id":598,"ignore":true}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":6},"action":"remove","lines":["  "],"id":599,"ignore":true}],[{"start":{"row":7,"column":12},"end":{"row":8,"column":4},"action":"remove","lines":["","    "],"id":600,"ignore":true}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":17},"action":"remove","lines":[" </center>"],"id":601,"ignore":true}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":[" "],"id":602,"ignore":true}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":6},"action":"remove","lines":["      "],"id":603,"ignore":true}],[{"start":{"row":9,"column":6},"end":{"row":10,"column":2},"action":"remove","lines":["","  "],"id":604,"ignore":true}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":16},"action":"remove","lines":["            <br>","            <br>"],"id":605},{"start":{"row":14,"column":12},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":34,"column":72},"end":{"row":34,"column":75},"action":"remove","lines":["234"],"id":606,"ignore":true}],[{"start":{"row":34,"column":63},"end":{"row":34,"column":72},"action":"remove","lines":["mer=\" . 1"],"id":607,"ignore":true}],[{"start":{"row":34,"column":56},"end":{"row":34,"column":63},"action":"remove","lines":["idCusto"],"id":608,"ignore":true}],[{"start":{"row":34,"column":50},"end":{"row":34,"column":56},"action":"remove","lines":["WHERE "],"id":609,"ignore":true}],[{"start":{"row":34,"column":49},"end":{"row":34,"column":50},"action":"remove","lines":[" "],"id":610,"ignore":true}],[{"start":{"row":34,"column":49},"end":{"row":34,"column":50},"action":"insert","lines":["\""],"id":611,"ignore":true}],[{"start":{"row":7,"column":12},"end":{"row":8,"column":8},"action":"insert","lines":["","        "],"id":612}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":28},"action":"insert","lines":["<h1>Job History</h1>"],"id":613}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["y"],"id":614},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"remove","lines":["r"]},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"remove","lines":["o"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"remove","lines":["t"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["s"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["i"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["H"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":[" "]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"remove","lines":["b"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"remove","lines":["o"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"remove","lines":["J"]}],[{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["P"],"id":615},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["a"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["r"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["a"]}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["b"],"id":616},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["u"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["g"]}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":28},"action":"remove","lines":[" <h1>Job History</h1>"],"id":617}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":[" "],"id":618},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":["J"]},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":["o"]},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["n"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":[" "],"id":619}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"remove","lines":[" "],"id":620},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["n"]}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["b"],"id":621}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":[" "],"id":622},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["J"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["i"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["s"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["t"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["o"]}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["o"],"id":623},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["t"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["s"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["i"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["J"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["H"],"id":624},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["i"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["s"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["t"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["o"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["r"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["y"]}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":31},"action":"remove","lines":["arabug Job History"],"id":625},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["P"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["A"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["R"]}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["R"],"id":626},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"remove","lines":["A"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"remove","lines":["P"]}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["A"],"id":627},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["R"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["A"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["B"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["U"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["G"]}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":[" "],"id":628},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":["J"]},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":["O"]},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["B"]},{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["N"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"remove","lines":["N"],"id":629},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["B"]}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["N"],"id":630}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["N"],"id":631}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["B"],"id":632}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":[" "],"id":633},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["J"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["O"]}],[{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["O"],"id":634},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["J"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["J"],"id":635},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["I"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["S"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["S"],"id":636},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["I"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["J"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["J"],"id":637},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["O"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["S"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["S"],"id":638},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["O"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["J"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["H"],"id":639},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["I"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["S"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["T"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["O"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["R"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["U"]}],[{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["U"],"id":640}],[{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["Y"],"id":641}],[{"start":{"row":8,"column":7},"end":{"row":8,"column":36},"action":"remove","lines":[" <h1>PARABUG JOB HISTORY</h1>"],"id":642},{"start":{"row":8,"column":7},"end":{"row":8,"column":78},"action":"insert","lines":["<div id=\"example2\">Here, the full width is 300px, no matter what!</div>"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"remove","lines":["2"],"id":643},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["e"]},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"remove","lines":["l"]},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"remove","lines":["p"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"remove","lines":["m"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["a"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["x"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["e"]}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["p"],"id":644},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["a"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["r"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":["a"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":68},"action":"remove","lines":["ere, the full width is 300px, no matter what!"],"id":645},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["H"]}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["P"],"id":646},{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["A"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["r"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["a"]}],[{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["a"],"id":647},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["r"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["R"],"id":648},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["A"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["B"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["U"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["G"]}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":[" "],"id":649},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["J"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["O"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["B"]}],[{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"insert","lines":[" "],"id":650},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"insert","lines":["J"]},{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"insert","lines":["I"]},{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"insert","lines":["S"]},{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"insert","lines":["T"]},{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"insert","lines":["O"]}],[{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"remove","lines":["O"],"id":651},{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"remove","lines":["T"]},{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"remove","lines":["S"]},{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"remove","lines":["I"]},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"remove","lines":["J"]}],[{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"insert","lines":["H"],"id":652},{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"insert","lines":["I"]},{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"insert","lines":["S"]},{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"insert","lines":["T"]},{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"insert","lines":["O"]},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"insert","lines":["R"]},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"insert","lines":["Y"]}],[{"start":{"row":5,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["<style> ","#example1 {","  box-sizing: content-box;  ","  width: 300px;","  height: 100px;","  padding: 30px;  ","  border: 10px solid blue;","}","","#example2 {","  box-sizing: border-box;","  width: 300px;","  height: 100px;","  padding: 30px;  ","  border: 10px solid blue;","}","</style>"],"id":653}],[{"start":{"row":6,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["#example1 {","  box-sizing: content-box;  ","  width: 300px;","  height: 100px;","  padding: 30px;  ","  border: 10px solid blue;","}",""],"id":654}],[{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["]"],"id":655},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"insert","lines":["]"]},{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"insert","lines":["="]}],[{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"remove","lines":["="],"id":656},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"remove","lines":["]"]},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"remove","lines":["]"]},{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"remove","lines":[" "]},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"remove","lines":["2"]},{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"remove","lines":["e"]},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"remove","lines":["l"]},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"remove","lines":["p"]},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":["m"]},{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"remove","lines":["a"]},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"remove","lines":["x"]},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":["e"]}],[{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"insert","lines":["P"],"id":657},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"insert","lines":["A"]},{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"insert","lines":["R"]},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["A"]}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":["A"],"id":658},{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"remove","lines":["R"]},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"remove","lines":["A"]},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":["P"]}],[{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"insert","lines":["p"],"id":659},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"insert","lines":["a"]},{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"insert","lines":["r"]},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["a"]}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "],"id":660}],[{"start":{"row":8,"column":1},"end":{"row":8,"column":5},"action":"insert","lines":["    "],"id":661}],[{"start":{"row":9,"column":2},"end":{"row":9,"column":6},"action":"insert","lines":["    "],"id":662}],[{"start":{"row":10,"column":2},"end":{"row":10,"column":6},"action":"insert","lines":["    "],"id":663}],[{"start":{"row":11,"column":2},"end":{"row":11,"column":6},"action":"insert","lines":["    "],"id":664}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":6},"action":"insert","lines":["    "],"id":665}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"remove","lines":["    "],"id":666}],[{"start":{"row":12,"column":19},"end":{"row":12,"column":29},"action":"remove","lines":["solid blue"],"id":667},{"start":{"row":12,"column":19},"end":{"row":12,"column":26},"action":"insert","lines":["#FF8C00"]}],[{"start":{"row":7,"column":0},"end":{"row":14,"column":8},"action":"remove","lines":["#para{","      box-sizing: border-box;","      width: 300px;","      height: 100px;","      padding: 30px;  ","      border: 10px #FF8C00;","}","</style>"],"id":668}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"remove","lines":["<style> ",""],"id":669}],[{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["<"],"id":670},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":[">"]}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":["h"],"id":671},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"insert","lines":["1"]}],[{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["<"],"id":672},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":[">"]}],[{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["/"],"id":673},{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"insert","lines":["h"]},{"start":{"row":9,"column":48},"end":{"row":9,"column":49},"action":"insert","lines":["1"]}],[{"start":{"row":8,"column":12},"end":{"row":9,"column":8},"action":"insert","lines":["","        "],"id":677}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"insert","lines":["d"],"id":678},{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":["i"]},{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"insert","lines":["v"]}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":11},"action":"remove","lines":["div"],"id":679},{"start":{"row":9,"column":8},"end":{"row":9,"column":19},"action":"insert","lines":["<div></div>"]}],[{"start":{"row":9,"column":13},"end":{"row":9,"column":19},"action":"remove","lines":["</div>"],"id":680}],[{"start":{"row":11,"column":7},"end":{"row":11,"column":13},"action":"insert","lines":["</div>"],"id":681}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"remove","lines":["    "],"id":682}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"insert","lines":["    "],"id":683}],[{"start":{"row":9,"column":12},"end":{"row":9,"column":13},"action":"insert","lines":[" "],"id":684},{"start":{"row":9,"column":13},"end":{"row":9,"column":14},"action":"insert","lines":["c"]},{"start":{"row":9,"column":14},"end":{"row":9,"column":15},"action":"insert","lines":["l"]},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"insert","lines":["a"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"insert","lines":["s"]},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"insert","lines":[" "],"id":685},{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"insert","lines":["="]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":["="]}],[{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"insert","lines":[" "],"id":686}],[{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":[" "],"id":687},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"remove","lines":["="]}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":[" "],"id":688}],[{"start":{"row":9,"column":21},"end":{"row":9,"column":23},"action":"insert","lines":["\"\""],"id":689}],[{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["p"],"id":690},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":["a"]},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"insert","lines":["r"]},{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"insert","lines":["a"]}],[{"start":{"row":9,"column":22},"end":{"row":9,"column":26},"action":"remove","lines":["para"],"id":691},{"start":{"row":9,"column":22},"end":{"row":9,"column":30},"action":"insert","lines":["paraWrap"]}],[{"start":{"row":10,"column":7},"end":{"row":10,"column":11},"action":"insert","lines":["    "],"id":692}],[{"start":{"row":10,"column":26},"end":{"row":11,"column":15},"action":"insert","lines":["","               "],"id":693}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":19},"action":"insert","lines":["    "],"id":694}],[{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"remove","lines":[">"],"id":696},{"start":{"row":11,"column":46},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":12,"column":19},"action":"insert","lines":["                   "]}],[{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"remove","lines":[" "],"id":697},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"remove","lines":[" "]},{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"remove","lines":[" "]},{"start":{"row":12,"column":12},"end":{"row":12,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"insert","lines":[">"],"id":698}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":47},"end":{"row":11,"column":47},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1576442957772}