  <?php
?>

<html>
    <head>
        <title> Parabug Home </title>
          <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
<center>
<img src ="img/logo.png" class ="logo"/>
<br> <br>
<intro> Admin Home</intro>
  <br> <br>
  <div class="flex">
        <form action="createJob.php">
              <input type="submit" value="Create Job">
          </form>
          
       <form action="createOperator.php">
              <input type="submit" value="Create Operator">
          </form>
        
        <form action="createCustomer.php">
              <input type="submit" value="Create Customer">
          </form>
        
        <form action="jobHistory.php">
              <input type="submit" value="Job History">
          </form>          
          </div>
          </center>
    </body>
</html>