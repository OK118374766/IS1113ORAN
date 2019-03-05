<!DOCTYPE html>
<html>
    
     <head>
        <title>E-Business 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- We link this html page to it's corresponding cascading style sheet -->
        <link rel="stylesheet" type="text/css" href="Ebus3.css">
    
    </head>
    
    <body>
         <!-- TopNav Code -->
          
 <div class="topnav">
     
     <a class="active" href="StrategicConsultingServices.html">Return To Consulting Services</a>
</div>
        
        <!-- Starting the session to get the session variable from last page -->
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is : ".$fullNameValue.".";
        echo "<br></br>";
        echo "The total value is : ".$totalValue2.".";
        ?>
    </body>
</html>