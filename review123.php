<?php
 include('conn12.php');

 if(isset($_GET['submitre'])){
     $use=$_GET['emailsu'];
     $revi1=$_GET['reviewsu'];
    
   $sqlre="INSERT INTO review1(rev2,user1) VALUES ('$revi1','$use')";  
   
   $resre=mysqli_query($conn1,$sqlre);

   if($revi1){

       echo '<script>alert("feedback successful recorde");
       window.location.assign("http://localhost/collegetoc/");
         </script>';
         
   }else{

       echo '<script>alert("error in quiry of review form ");</script>';
       
   }

 }else{
     echo '<script>alert("please fill the form first");</script>';
 }

?>