{"changed":true,"filter":false,"title":"customerHistory.php","tooltip":"/customerHistory.php","value":"<html>\n\n    <head>\n        <title> Job History </title>\n    <link href=\"css/styles2.css\" rel=\"stylesheet\" type=\"text/css\" />\n\n    </head>\n    <header>\n        <center>\n        <h1>Job History</h1>\n        </center>\n        \n        </header>\n    <div>\n        <body>\n            <center>\n            \n            <br>\n            <br>\n            <br><br>\n            <table> \n                <tr>\n                    <th>Job Id</th>\n                    <th>Job Date</th>\n                    <th>Job Location</th>\n                    <th>Job Status</th>\n                    <th>Pilot Id</th>\n                </tr>\n                <?php\n                    include 'dbConnection.php';\n                    $conn = getDatabaseConnection(\"heroku_68533dd666c4a97\");\n                    { \n                        global $conn;\n                        \n                        // echo \"hello\" . $username;\n                        \n                        // Hard coded for now, hoping to show only the Jobs that have the same customer ID as\n                        // the current user soon!\n                        $sql = \"SELECT * FROM job WHERE idCustomer=\" . 1234;\n                        // $sql = \"SELECT * FROM job JOIN operator WHERE idCustomer=\" . 1234;\n                        $stmt = $conn->prepare($sql);\n                        $stmt->execute();\n                        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);\n                        \n                        \n                        foreach ($records as $record) {\n                            echo \"<tr><td>\".$record['idJob'] . \"</td><td>\" . $record['joDate'] . \" </td><td> \" . $record['joLocation'] . \"</td><td>\"\n                            . (($record['joStatus'] == 0) ? \"Not Completed\" : \"Completed\") . \" </td><td>\" . $record['idOperator'] . \" </td></tr>\";\n                        }\n                                            }\n                ?>\n            \n            </table>\n\n</center>\n\n        </body>\n        </div>\n</html>","undoManager":{"mark":91,"position":100,"stack":[[{"start":{"row":39,"column":29},"end":{"row":39,"column":30},"action":"insert","lines":["r"],"id":491,"ignore":true}],[{"start":{"row":39,"column":30},"end":{"row":39,"column":31},"action":"insert","lines":["e"],"id":492,"ignore":true}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":31},"action":"remove","lines":["re"],"id":493,"ignore":true}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":30},"action":"insert","lines":["$"],"id":494,"ignore":true}],[{"start":{"row":39,"column":30},"end":{"row":39,"column":32},"action":"insert","lines":["re"],"id":495,"ignore":true}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":32},"action":"remove","lines":["$re"],"id":496,"ignore":true},{"start":{"row":39,"column":29},"end":{"row":39,"column":37},"action":"insert","lines":["$records"]}],[{"start":{"row":39,"column":37},"end":{"row":39,"column":38},"action":"insert","lines":[";"],"id":497,"ignore":true}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":30},"action":"insert","lines":["$"],"id":498,"ignore":true}],[{"start":{"row":39,"column":30},"end":{"row":39,"column":32},"action":"insert","lines":["pr"],"id":499,"ignore":true}],[{"start":{"row":39,"column":32},"end":{"row":39,"column":35},"action":"insert","lines":["int"],"id":500,"ignore":true}],[{"start":{"row":39,"column":35},"end":{"row":39,"column":36},"action":"insert","lines":["_"],"id":501,"ignore":true}],[{"start":{"row":39,"column":36},"end":{"row":39,"column":37},"action":"insert","lines":["r"],"id":502,"ignore":true}],[{"start":{"row":39,"column":37},"end":{"row":39,"column":38},"action":"insert","lines":["("],"id":503,"ignore":true}],[{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"insert","lines":[")"],"id":504,"ignore":true}],[{"start":{"row":39,"column":0},"end":{"row":40,"column":0},"action":"remove","lines":["                        echo $print_r($records);",""],"id":505,"ignore":true}],[{"start":{"row":38,"column":24},"end":{"row":39,"column":0},"action":"remove","lines":["",""],"id":506,"ignore":true}],[{"start":{"row":36,"column":117},"end":{"row":36,"column":123},"action":"remove","lines":["opName"],"id":507,"ignore":true},{"start":{"row":36,"column":117},"end":{"row":36,"column":118},"action":"insert","lines":["p"]}],[{"start":{"row":36,"column":118},"end":{"row":36,"column":119},"action":"insert","lines":["i"],"id":508,"ignore":true}],[{"start":{"row":36,"column":119},"end":{"row":36,"column":120},"action":"insert","lines":["l"],"id":509,"ignore":true}],[{"start":{"row":36,"column":120},"end":{"row":36,"column":122},"action":"insert","lines":["ot"],"id":510,"ignore":true}],[{"start":{"row":36,"column":120},"end":{"row":36,"column":122},"action":"remove","lines":["ot"],"id":511,"ignore":true}],[{"start":{"row":36,"column":117},"end":{"row":36,"column":120},"action":"remove","lines":["pil"],"id":512,"ignore":true}],[{"start":{"row":36,"column":117},"end":{"row":36,"column":118},"action":"insert","lines":["i"],"id":513,"ignore":true}],[{"start":{"row":36,"column":118},"end":{"row":36,"column":119},"action":"insert","lines":["d"],"id":514,"ignore":true}],[{"start":{"row":36,"column":119},"end":{"row":36,"column":120},"action":"insert","lines":["O"],"id":515,"ignore":true}],[{"start":{"row":36,"column":120},"end":{"row":36,"column":121},"action":"insert","lines":["p"],"id":516,"ignore":true}],[{"start":{"row":36,"column":121},"end":{"row":36,"column":123},"action":"insert","lines":["er"],"id":517,"ignore":true}],[{"start":{"row":36,"column":123},"end":{"row":36,"column":124},"action":"insert","lines":["a"],"id":518,"ignore":true}],[{"start":{"row":36,"column":124},"end":{"row":36,"column":127},"action":"insert","lines":["tor"],"id":519,"ignore":true}],[{"start":{"row":28,"column":24},"end":{"row":28,"column":27},"action":"insert","lines":["// "],"id":520,"ignore":true}],[{"start":{"row":27,"column":24},"end":{"row":27,"column":27},"action":"remove","lines":["// "],"id":521,"ignore":true}],[{"start":{"row":4,"column":4},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":522},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":4,"column":4},"end":{"row":8,"column":16},"action":"insert","lines":["        <style>","            div {    ","                  background-image: url('img/parabug.jpg');","                }","        </style>"],"id":523}],[{"start":{"row":4,"column":0},"end":{"row":8,"column":16},"action":"remove","lines":["            <style>","            div {    ","                  background-image: url('img/parabug.jpg');","                }","        </style>"],"id":524}],[{"start":{"row":0,"column":6},"end":{"row":1,"column":4},"action":"insert","lines":["","    "],"id":525}],[{"start":{"row":1,"column":4},"end":{"row":5,"column":16},"action":"insert","lines":["            <style>","            div {    ","                  background-image: url('img/parabug.jpg');","                }","        </style>"],"id":526}],[{"start":{"row":1,"column":12},"end":{"row":1,"column":16},"action":"remove","lines":["    "],"id":527},{"start":{"row":1,"column":8},"end":{"row":1,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":1,"column":0},"end":{"row":5,"column":16},"action":"remove","lines":["        <style>","            div {    ","                  background-image: url('img/parabug.jpg');","                }","        </style>"],"id":528}],[{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["<"],"id":529},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":[">"]}],[{"start":{"row":6,"column":11},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":530},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["d"],"id":531},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"insert","lines":["i"]},{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"insert","lines":["v"]}],[{"start":{"row":48,"column":15},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":532},{"start":{"row":49,"column":0},"end":{"row":49,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":49,"column":8},"end":{"row":49,"column":9},"action":"insert","lines":["<"],"id":533},{"start":{"row":49,"column":9},"end":{"row":49,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":49,"column":9},"end":{"row":49,"column":10},"action":"insert","lines":["/"],"id":534},{"start":{"row":49,"column":10},"end":{"row":49,"column":11},"action":"insert","lines":["d"]},{"start":{"row":49,"column":11},"end":{"row":49,"column":12},"action":"insert","lines":["i"]}],[{"start":{"row":49,"column":12},"end":{"row":49,"column":13},"action":"insert","lines":["v"],"id":535}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"remove","lines":["e"],"id":536},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"remove","lines":["m"]},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["a"]},{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"remove","lines":["N"]}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["I"],"id":537},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["D"]}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["D"],"id":538}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["d"],"id":539}],[{"start":{"row":11,"column":16},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":540},{"start":{"row":12,"column":0},"end":{"row":12,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":12,"column":12},"end":{"row":12,"column":16},"action":"insert","lines":["<br>"],"id":541}],[{"start":{"row":12,"column":16},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":542},{"start":{"row":13,"column":0},"end":{"row":13,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":13,"column":12},"end":{"row":13,"column":16},"action":"insert","lines":["<br>"],"id":543}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":20},"action":"insert","lines":["<br>"],"id":544}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":24},"action":"insert","lines":["<br>"],"id":545}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":23},"action":"remove","lines":["Job History"],"id":546}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":33},"action":"insert","lines":["<h1>Hello world!</h1>"],"id":547}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"remove","lines":["!"],"id":548},{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"remove","lines":["d"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"remove","lines":["l"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"remove","lines":["r"]},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"remove","lines":["o"]},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"remove","lines":["w"]},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"remove","lines":[" "]},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"remove","lines":["o"]},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"remove","lines":["l"]},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"remove","lines":["l"]},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"remove","lines":["e"]},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"remove","lines":["H"]}],[{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"insert","lines":["J"],"id":549},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"insert","lines":["o"]},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":["b"]}],[{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":[" "],"id":550},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["H"]},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":["i"]},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["s"]},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"insert","lines":["t"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"insert","lines":["o"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"insert","lines":["r"]},{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"insert","lines":["y"]}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":24},"action":"remove","lines":["<br><br>"],"id":551}],[{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["/"],"id":552},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["/"]}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"remove","lines":["/"],"id":553},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"remove","lines":["/"]}],[{"start":{"row":10,"column":32},"end":{"row":10,"column":35},"action":"insert","lines":["-->"],"id":554},{"start":{"row":10,"column":12},"end":{"row":10,"column":16},"action":"insert","lines":["<!--"]}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["<"],"id":555},{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":[">"]}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":["b"],"id":556},{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["r"]}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"remove","lines":["-"],"id":557},{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"remove","lines":["-"]},{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"remove","lines":["!"]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"remove","lines":["<"]}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"remove","lines":[">"],"id":558},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"remove","lines":["-"]},{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"remove","lines":["-"]}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":32},"action":"remove","lines":["<h1>Job History</h1>"],"id":559},{"start":{"row":10,"column":8},"end":{"row":10,"column":12},"action":"remove","lines":["    "]},{"start":{"row":10,"column":4},"end":{"row":10,"column":8},"action":"remove","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "]},{"start":{"row":9,"column":20},"end":{"row":10,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":11},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":560},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["<"]},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":[">"]}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["h"],"id":561},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"insert","lines":["e"]},{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"insert","lines":["a"]},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["d"]},{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":["e"]},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["r"]}],[{"start":{"row":7,"column":12},"end":{"row":8,"column":8},"action":"insert","lines":["","        "],"id":562}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["<"],"id":563},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["/"],"id":564},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["h"]},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["e"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["a"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["d"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["e"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["r"]}],[{"start":{"row":7,"column":12},"end":{"row":8,"column":8},"action":"insert","lines":["","        "],"id":565}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":28},"action":"insert","lines":["<h1>Job History</h1>"],"id":566}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["<"],"id":567},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":[">"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["/"],"id":568},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["b"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["r"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":28},"action":"remove","lines":["</br>"],"id":569}],[{"start":{"row":8,"column":28},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":570},{"start":{"row":9,"column":0},"end":{"row":9,"column":8},"action":"insert","lines":["        "]},{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"insert","lines":["<"]},{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":["b"],"id":571},{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"insert","lines":["r"]}],[{"start":{"row":9,"column":12},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":572},{"start":{"row":10,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":20},"action":"remove","lines":["<center>"],"id":573}],[{"start":{"row":7,"column":12},"end":{"row":8,"column":8},"action":"insert","lines":["","        "],"id":574}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":16},"action":"insert","lines":["<center>"],"id":575}],[{"start":{"row":14,"column":14},"end":{"row":15,"column":12},"action":"insert","lines":["","            "],"id":576}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":["<"],"id":577},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["c"]},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["e"]},{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["n"]},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["t"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["e"]},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"insert","lines":["r"]}],[{"start":{"row":15,"column":19},"end":{"row":15,"column":29},"action":"insert","lines":["></center>"],"id":578}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":[">"],"id":579},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["r"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["e"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["t"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":["n"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"remove","lines":["e"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":["c"]},{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"remove","lines":["/"]},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"remove","lines":["<"]}],[{"start":{"row":8,"column":3},"end":{"row":8,"column":16},"action":"remove","lines":["     <center>"],"id":580},{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"remove","lines":[" "]},{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"remove","lines":[" "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":12},"action":"remove","lines":["br>"],"id":581,"ignore":true}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":9},"action":"remove","lines":["        <"],"id":582,"ignore":true}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":583}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":8},"action":"insert","lines":["    "],"id":584}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["<"],"id":585},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["c"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["e"]},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["n"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["t"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["e"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["r"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["."]}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["."],"id":586}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":25},"action":"insert","lines":["></center>"],"id":587}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":25},"action":"remove","lines":["</center>"],"id":588}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":9},"action":"insert","lines":["</center>"],"id":589}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "],"id":590}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":8},"action":"insert","lines":["    "],"id":591}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":14},"end":{"row":14,"column":14},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1576438690656}