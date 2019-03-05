<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$mobileNum = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtMobile'] = $mobileNum;

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
        
        
        <script language=Javascript>
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode;
         if (charCode > 31 && (charCode < 45 || charCode > 57 ))
            return false;

         return true;
      }
      
   </script>
        
    </head>
    
    <body>
        
         <div class="topnav">
     
             <!-- Button that allows the user to return to the cv -->
     <a class="active" href="StrategicConsultingServices.html">Return To Consulting Services</a>
</div>
        
        
        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
         <h2 id="PaymentHead" class="mb-5" style="color: #000;">Payment Details</h2> 
      </div>
        </section>
        
        <br /><br />
        
        
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
                            <td><input type="text" id="txtName" name="txtName" 
                                       onkeypress="return (event.charCode > 64 && event.charCode < 91) ||
                                                   (event.charCode > 96 && event.charCode < 123) || (event.charCode > 31 && event.charCode < 33)" value="" required=""/></td>
                        </tr>
                        
                        <tr>
                            <td>Mobile</td>
                            <td><input type="text" id="txtMobile" onkeypress="return isNumberKey(event)" name="txtMobile" value="" required=""/></td>
                        </tr>
                        
                        <tr>
                            <td>PIN</td>
                            <td><input type="text" id="txtPin" onkeypress="return isNumberKey(event)" name="txtPin" value="" required=""/></td>
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