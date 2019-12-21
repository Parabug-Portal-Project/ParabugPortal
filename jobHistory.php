<?php
session_start();
include 'dbConnection.php';
$conn = getDatabaseConnection("heroku_68533dd666c4a97");
include 'inc/functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Job History </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <link href="css/styles2.css" rel="stylesheet" type="text/css" />  
       
        <script>
        
            function confirmDelete() {
                
                //alert();
                //prompt();
                return confirm("Are you sure you want to delete this product");
                
            }
            
        </script>
    
    </head>
    <body id= "adminBody">
        
        
        <?= displayAllJobs() ?>
 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
    </body>
</html>