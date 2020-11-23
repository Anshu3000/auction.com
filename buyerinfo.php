<?php
     include('conn12.php');
    
     if(isset($_POST['submitre'])){
      $pri=$_POST['pricsell'];
      $prona=$_POST['productid'];
      $buyi1=$_POST['productuser'];
      $selin1=$_POST['userbid12r'];

      $sql23re="INSERT INTO buyinfo1 (pricbid,proname,buyi,sellin) VALUES ('$pri','$prona','$buyi1','$selin1')";

      $re1sq=mysqli_query($conn1,$sql23re);


      if($re1sq){
        
        // $sql23re="INSERT INTO buyinfo1 (pricbid,proname,buyi,sellin) VALUES ('$pri','$prona','$buyi1','$selin1')";

        //   $re1sq=mysqli_query($conn1,$sql23re);

         echo '<script>alert("your record succesfully");
          window.location.assign("http://localhost/collegetoc/showbid.php");
         </script>';

      }else{
           echo '<script>alert(" ERROR :problem in query buyinfo");</script>';
      }


     }else{
         echo '<script>alert("form is empty buyerinfo");</script>';
     }
     
?>