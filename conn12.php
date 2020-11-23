
<?php
   $localho="localhost:3309";
   $db="collegetocpro";
  
  $conn1=mysqli_connect($localho,"root","",$db); 

   if($conn1){
      //  echo '<script>alert("connection successful")</script>';
   }else{
      // echo '<script>alert("connection unsuccessful")</script>'; 
       die(mysqli_error());
   }
  
?>