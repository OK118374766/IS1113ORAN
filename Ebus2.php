<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>E-Business 2</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- We link this html page to it's corresponding cascading style sheet -->
        <link rel="stylesheet" type="text/css" href="Ebus2.css">
        
    </head>
    
    <body>
        
         <div class="topnav">
     
             <!-- Button that allows the user to return to the cv -->
     <a class="active" href="StrategicConsultingServices.html">Return To Consulting Services</a>
</div>
        
        <div class="form">
            <form name="Details" method="post" action="Ebus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Please enter your payment details</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        
                        <tr>
                            <td>Mobile</td>
                            <td><input type="text" id="txtMobile" name="txtMobile" value="" /></td>
                        </tr>
                        
                        <tr>
                            <td>PIN</td>
                            <td><input type="text" id="txtPin" name="txtPin" value="" /></td>
                        </tr>
                        
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
                </center>
                
                <center>
                    
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
            </form>
        </div>

    </body>
   
</html>