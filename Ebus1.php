<?php
session_start(); //start session
$totalValue = ""; //resets value
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>E-Business 1</title>
        <!-- Link this page to it's corresponding CSS file -->
        <link rel="stylesheet" href="Ebus1.css" type="text/css" />
    </head>
        <body>
            <!-- Code for topnav -->
            <div class="topnav">
     <!-- button that allows the user to return to the company homepage -->
     <a id="btnReturn" class="active" href="StrategicConsultingServices.html">Return To Consulting Services</a>
</div>
            
             <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
         <h2 id="SelectionHead" class="mb-5" style="color: #000;">Consulting Services</h2>  
      </div>
             </section>
            
            <br /><br />
            
            
           
        <div class="form">
            <!-- Posts the form data to Ebus2.php -->
            <form name="intCalc" method="post" action="Ebus2.php">
            
        
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Select a Consulting Service</b></td> 
                </tr>
                <!-- Code for the three radio buttons -->
                <tr>
                    <td>Blockchain @ €1000</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" required=""/></td>
                </tr>
                <tr>
                    <td>Autonomous Things (Robots) @ €2000</td>
                    <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience @ €3000</td>
                    <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
        <!-- visibility is initially hidden but is shown when the user clicks the calculate button -->
        <div id="Costs" style="visibility: hidden">
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
            <!-- the readonly attribute ensures that the user cannot edit the data in the textboxes manually -->
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>- Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total (-Discount, +VAT)</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
        </div>  
        <br />
            <center>
                <!-- When the user clicks the calculate button, the hidden section becomes visible -->
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub(), document.getElementById('Costs').style.visibility = 'visible'" value="Calculate Amount" />
            <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
            </form>
        </div>
        
            <script type="text/javascript">
                <!-- Javascript function for the calculation -->
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                    var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                    
                    /* if radio buttons are clicked, values are assigned depending on which radio
                    button is clicked */
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calculation(subAmount);
                        
                    }
                   else if (document.getElementById('AutonomousThings').checked) {
                        document.intCalc.txtSubTot.value = AutonomousThings;
                        subAmount = AutonomousThings;
                        calculation(subAmount);
                        
                    }
                    else if (document.getElementById('ImmersiveExperience').checked) {
                        document.intCalc.txtSubTot.value = ImmersiveExperience;
                        subAmount = ImmersiveExperience;
                        calculation(subAmount);
                    }
                } 
                
                /*function for calculationg the values*/
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting the values into the correct fields//
                    document.intCalc.txtSubTot.value = "€" + subTotal;
                    document.intCalc.txtDisc.value = "€" + discCalc;
                    document.intCalc.txtVAT.value = "€" + vatCalc;
                    document.intCalc.txtTotal.value = "€" + total;
                }
                
                /* Clear function resets all values */
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
    </html>





