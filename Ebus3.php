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
        
         
       <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
         <h2 id="ReceiptHead" class="mb-5" style="color: #000;">Purchase Receipt</h2>  
      </div>
           
           
           
       </section>
         
         
         <br /><br />
         <br /><br />
        
         <section id="Receipt">
        <!-- Starting the session to get the session variable from last page -->
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        $mobileNum = $_POST['txtMobile'];
        echo "The name is : <b>".$fullNameValue."</b>.";
        echo "<br></br>";
        echo "Mobile Number : <b>".$mobileNum."</b>";
        echo "<br></br>";
        echo "The total value is : <b>".$totalValue2."</b>";
        ?>
        
        <br /><br />
        <br /><br />
        
        <p>Thank you for your custom.</p>
        
         </section>
        
        
        
         
        

      

    </body>
</html>