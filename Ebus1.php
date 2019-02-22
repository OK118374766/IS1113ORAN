

<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
        
        <script language="javascript" type="text/javascript">
            
            
          
            

            
            //Assigning values to the radio buttons
            function subTotal() {
                //Enter in prices here
                var x = 5;
                var y = 10;
                var a = x + y * 12;
                var b = y * 12;
                var i = x + y * 10;
                
                if (document.getElementById('Blockchain').checked) {
                    //Blockchain checked
                    document.calculator.total.value = b;
                    
                } 
                else if (document.getElementById('AutonomousThings').checked) {
                    //Autonomous Things is checked
                    document.calculator.total.value = a;
                } 
                
                else if (document.getElementById('ImmersiveExperience').checked) {
                    //Immersive Experience is checked
                    document.calculator.total.value = i;
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
        
        
        <title>Consultants of Swing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- We link this html page to it's corresponding cascading style sheet -->
        <link rel="stylesheet" type="text/css" href="travel.css">
    
        
        <style type="text/css">

  


body {
    background-color: #c0c0c0;
        
}

.topnav {
  background-color: #333;
  overflow: hidden;
  margin-bottom: 0;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #af3531;
  color: white;
}

#AutonomousThings 
  

#ImmersiveExperience {
    
}
</style>
        
    </head>
    
    <body>
        
        <!-- TopNav Code -->
          
 <div class="topnav">
     
     <a class="active" href="StrategicConsultingServices.html">Return To Consulting Services</a>
</div>
        
        
        <h2>Select your desired Service</h2>
        
        
        
        
        <!-- Opening a HTML file -->
        <form name="calculator">
            
            <!-- User fills out form here -->
            
            <br />
            <input type="radio" name="programType" id="Blockchain" value="Blockchain" checked /> Blockchain @ €1000
            <input type="radio" name="programType" id="AutonomousThings" value="Autonomous Things"  /> Autonomous Things @ €2000
            <input type="radio" name="programType" id="ImmersiveExperience" value="Immersive Experience"  /> Immersive Experience @ €3000
            
            <!-- Here result will be displayed -->
            <br /><br />
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
