<?php 
  include('conn12.php');

  if(isset($_POST['signin1'])){
   $usemail1=$_POST['email12'];
   $pass1=$_POST['pass123'];

   $sql3="SELECT * FROM auth WHERE id='$usemail1' AND 
   password1='$pass1' ";
   
   $res2=mysqli_query($conn1,$sql3);

   if(mysqli_num_rows($res2)>0){
         echo '<script>alert("login successfull");
         window.location.assign("http://localhost/collegetoc/sell1.php");
         </script>';

         ?>
 
      <script>
          localStorage.setItem("useremail", <?php echo json_encode($usemail1);?>);
      </script>

         <?php
   }else{
        echo '<script>alert("please register first")</script>';
   }

  }else{
         echo '<script>alert("form is empty")</script>';
  }

?>