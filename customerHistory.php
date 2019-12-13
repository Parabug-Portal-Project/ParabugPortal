<html>
    <head>
        <title> Job History </title>
    <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>
        <body>
            <center>
            Job History
            <br>
            <table> 
                <tr>
                    <th>Job Id</th>
                    <th>Job Date</th>
                    <th>Job Location</th>
                    <th>Job Status</th>
                    <th>Pilot Id</th>
                </tr>
                <?php
                    include 'dbConnection.php';
                    $conn = getDatabaseConnection("heroku_68533dd666c4a97");
                    { 
                        global $conn;
                        
                        // echo "hello" . $username;
                        
                        // Hard coded for now, hoping to show only the Jobs that have the same customer ID
                        $sql = "SELECT * FROM job WHERE idCustomer=" . 1234;
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
                        
                        foreach ($records as $record) {
                            //if ($record['joStatus'] == 0)
                            echo "<tr><td>".$record['idJob'] . " </td><td>".$record['joDate'] . " </td><td> " . $record['joLocation'] . "</td> 
                            <td>".$record['joStatus'] . " </td><td>".$record['idOperator'] . " </td></tr>";
                        }
                    }
                ?>
            
            </table>

</center>

        </body>
</html>