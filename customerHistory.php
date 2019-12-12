<html>
    <head>
        <title> Job History </title>
        <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>
        <body>
            
            Customer History
            <br>
            <table> 
             <tr>
    <th>Job Id</th>
    <th>Job Date</th>
    <th>Job Location</th>
    <th> Job Status</th>
    <th> Customer Id</th>
    <th> Pilot Id</th>
  </tr>
            <?php
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");
 { 
     global $conn;
     
     $sql = "SELECT * FROM job";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
     foreach ($records as $record) {
         echo "<td>".$record['joID'] . " </td><td>".$record['joDate'] . " </td><td> " . $record['joLocation'] . "</td> 
         <td>".$record['joStatus'] . " </td> <td>".$record['idCustomer'] . " </td>
         <td>".$record['idOperator'] . " </td>";
     }
    // echo "</br>";
    // echo "</br>";
 }
?>

</table>



        </body>
</html>