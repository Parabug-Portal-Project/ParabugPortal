<?php?>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Parabug Portal </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <header>
            <table class="menuHeader">
                <tr><td><strong>Customer Portal</strong></td></tr>
                <!--Ignore this-->
            </table>
            <br/> <br/>
            <table class="feedbackHeader">
                <tr>
                    <td><strong>FEEDBACK</strong></td>
                </tr>
            </table>
            <div class="logo">
                <img src="img/Parabug-Logo.png"></img>
            </div>
        </header>

        <main>
            <form class="feedbackForm">
                <div class="rate">
                    <p>How was your experience?</p>
                    <!-- Probably add stuff here-->
                </div>
                <div class="onTime">
                    <p>Did the operator show up on time?</p>
                    <ul class="yesno">
                        <li>
                            <input type="radio" name="yesno" value="yes">
                            <label for="yes">Yes</label>
                        </li>
                        <li>
                            <input type="radio" name="yesno" value="no">
                            <label for="no" >No </label>
                        </li>
                    </ul>
                </div>
                
                
                <div class="improve">
                    <p>How can we improve?</p>
                    <textarea class="misc" name="message" rows="15" cols="70">Type suggestions here</textarea>
                </div>
                <br/>
                <input type="submit" value="Submit" class="feedbackSubmitButton"/>
            </form>
           
        </main>

    </body>
</html>