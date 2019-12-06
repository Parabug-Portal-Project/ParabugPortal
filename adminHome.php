  <?php
?>

<html>
    <head>
        <title> Parabug Home </title>
          <link href="css/styles2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <table class="menuHeader">
                <tr><td><strong>ADMIN PORTAL</strong></td></tr>
            </table>
            <div class="logo">
                <img src="img/Parabug-Logo.png"></img>
            </div>
        </header>
        <form action="createJob.php">
              <input type="submit" value="Create Job">
          </form>
       <form action="createOperator.php">
              <input type="submit" value="Create Operator">
          </form>
        <form action="createCustomer.php">
              <input type="submit" value="Create Customer">
          </form>
    </body>
</html>