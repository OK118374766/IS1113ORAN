
<html>
    <head>
        <title>Calculator</title>
        
        <script language="javascript" type="text/javascript">
            
            //Assigning values to the radio buttons
            function subTotal() {
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
            
            //Calculations
            function calcDisc() {
                var subTot = document.calculator.total.value;
                var discTotal = ((subTot /100) * 10);
                document.calculator.discount.value = discTotal;
                }
                
                
                function calcTotal() {
                    var subTot = document.calculator.total.value;
                    var discTotal = document.calculator.discount.value;
                    
                    var wholeTotal = (subTot - discTotal);
                    
                    document.calculator.wholeTotal.value = wholeTotal;
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
            Subtotal: <input type="text" name="total">
            <br />                 
            <input type="button" value="subTotal" onclick="javascript:subTotal();">
            <br />
            
            Discount: <input type="text" name="discount">
            <br />                 
            <input type="button" value="Discount" onclick="javascript:calcDisc();">
            <br />
            
            Total: <input type="text" name="wholeTotal">
            <br />                 
            <input type="button" value="Total" onclick="javascript:calcTotal();">
            <br />
            
              
        </form>
    </body>
</html>