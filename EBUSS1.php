<!-- Creating a session variable and assigning it to txtTotal -->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        
    </head>
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="eBus3.php">
                <h1>Shop Calculator</h1>
                <hr />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Beverage</b></td>
                        </tr>
                        <tr>
                            <td>CocaCola</td>
                            <td><input type="radio" id="CocaCola" name="rdoGroup" value="1" /></td>
                        </tr>
                        
                         <tr>
                            <td>Sprite</td>
                            <td><input type="radio" id="Sprite" name="rdoGroup" value="5" /></td>
                        </tr>
                        
                         <tr>
                            <td>Fanta</td>
                            <td><input type="radio" id="Fanta" name="rdoGroup" value="30" /></td>
                        </tr>
                        
                    </table>
                </center>
            <br />
            <center>
                <table cellspacing="10">
            <tr>
                <td><b></b></td>
                <td><b>Amount</b></td>
            </tr>
            <tr>
                <td>Sub Total</td>
                <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
            </tr>
            <tr>
                <td>-Discount @30%</td>
                <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
            </tr>
            <tr>
                <td>+VAT @40%</td>
                <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
            </tr>
            
                        
                </table>
            </center>
            <br />
            <center>
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            </center>
            
               
            
            </form>
        </div>
        
        <script type="text/javascript">
            function calcSub() {
                //Assigning variables to the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').Value);
                var CocaCola = parseFloat(document.getElementById('CocaCola').Value);
                var Sprite = parseFloat(document.getElementById('Sprite').Value);
                var Fanta = parseFloat(document.getElementById('Fanta').Value);
                
                //If radio buttons are clicked, values are assigned
                if (document.getElementById('CocaCola').checked) {
                    document.intCalc.txtSubTot.value = CocaCola;
                    subAmount = CocaCola;
                    calculation(subAmount);
                }
                
                else if (document.getElementById('Sprite').checked) {
                    document.intCalc.txtSubTot.value = Sprite;
                    subAmount = Sprite;
                    calculation(subAmount);
                }
                
                else if (document.getElementById('Fanta').checked) {
                    document.intCalc.txtSubTot.value = Fanta;
                    subAmount = Fanta;
                    calculation(subAmount);
                }
                
            }
            
            //Function for calculating the values
            function calculation(parmSTotal){
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subtotal * .30);
                var vatCalc = parseFloat(subtotal * .40); 
                 var total = parseFloat(subtotal - discCalc + vatCalc);
                 
                 
                 //Inserting them 
                 
                 
            }
                
        
        
    </body>

