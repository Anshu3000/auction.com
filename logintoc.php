<?php 
   include('conn12.php');
   
   $useremail1=$_POST['user1'];
   $pass1=$_POST['pass12'];

   
   if(isset($_POST['signup1'])){
   
    $sql="INSERT INTO auth (id ,password1) VALUES ('$useremail1','$pass1')";
   
    $res=mysqli_query($conn1,$sql);
    
    if($res){
         echo '<script>alert("Records enter successfully");
          window.location.assign("http://localhost/collegetoc/login1toc.php");
         </script>';
         
         
    }else{
            echo '<script>alert("already present in the database")</script>';
    }


   }else{
        echo '<script>alert("form is empty")</script>';
   }


?>