<html>

    <head>
        <title> Job History </title>
    <link href="css/styles2.css" rel="stylesheet" type="text/css" />


    </head>
    <header>
           <!--<div id="para">-->
           <!--        <h1>PARABUG JOB HISTORY</h1>-->
           <!-- </div>-->
            <div class= "one">
                <h1>PARABUG JOB HISTORY</h1>
                </div>
        </header>
    <div>
        <body>
            <center>
            
            <br><br>
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
                        
                        // Hard coded for now, hoping to show only the Jobs that have the same customer ID as
                        // the current user soon!
                        $sql = "SELECT * FROM job";
                        // $sql = "SELECT * FROM job JOIN operator WHERE idCustomer=" . 1234;
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
                        
                        foreach ($records as $record) {
                            echo "<tr><td>".$record['idJob'] . "</td><td>" . $record['joDate'] . " </td><td> " . $record['joLocation'] . "</td><td>"
                            . (($record['joStatus'] == 0) ? "Not Completed" : "Completed") . " </td><td>" . $record['idOperator'] . " </td></tr>";
                        }
                                            }
                ?>
            
            </table>

</center>

        </body>
        </div>
</html>