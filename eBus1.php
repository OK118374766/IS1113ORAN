<?php?>

<html>
    <head><title>Calculator</title>
        
        <script language="javascript" type="text/javascript">prototype
            function packageTotal() {
                //Enter in prices here
                var x = 5;
                var y = 10;
                var p = x + y * 12;
                var b = y * 12;
                
                if (document.getElementById('basicProgram').checked) {
                    //Basic package is checked
                    document.calculator.total.value = b;
                    
                } else if (document.getElementById('proProgram').checked) {
                    //Pro package is checked
                    document.calculator.total.value = p;
                } 
            }
        </script>
    </head>
    
    <body>
        
        <!-- Opening a HTML file -->
        <form name="calculator">
            
            <!-- User fills out form here -->
            
            <br />
            <input type="radio" name="programType" id="basicProgram" value="Basic" /> Basic
            <input type="radio" name="programType" id="proProgram" value="Pro" checked /> Pro
            
            <!-- Here result will be displayed -->
            
            <br />
            Your total price is: <input type="text" name="total">
            
            <input type="button" value="Submit" onclick="javascript:packageTotal();">
            
              
        </form>
    </body>
</html>


