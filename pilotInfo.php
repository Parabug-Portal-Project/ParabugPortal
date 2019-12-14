<?php
    include 'dbConnection.php';
    $conn = getDatabaseConnection("heroku_68533dd666c4a97");
 { 
     global $conn;
     
     $sql = "SELECT * FROM operator";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
     foreach ($records as $record) {
         
    //  <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
         
         echo "<td>".$record['idOperator'] . " </td><td>".$record['opProfilepicture'] . " </td><td> " . $record['opEmail'] . "</td> 
         <td>".$record['opAddress'] . " </td> <td>".$record['opInsurance'] . " </td>
         <td>".$record['opFaawaver'] . " </td><td>".$record['opLicense'] . " </td><td>".$record['opRegistration'] . " </td>
         <td>".$record['opW9'] . " </td><td>".$record['opVendor'] . " </td>";
        
    //     echo $record['opProfilepicture'];
    //     echo '  
    //                       <tr>  
    //                           <td>  
    //                                 <img src="data:image/jpeg;base64,'.base64_encode($record['opProfilepicture'] ).'" height="200" width="200"/>  
    //                           </td>  
    //                       </tr>  
    //                  '; 
    //  }
    //  echo "</br>";
      echo "</br>";
 }
?>


<html>
    <head>
        <title> Pilot Job Info </title>
        <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>
            <div class="logo">
                <img src="img/Parabug-Logo.png"></img>
      </div>
</html>