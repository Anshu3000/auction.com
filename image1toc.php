<?php
   include('conn12.php');

//    echo '<script>alert("Recordsou");</script>';
   
   if(isset($_POST['biddingform'])){
    $fil1="img1toc/".$_FILES['fileimg']['name'];
    $tocimg=$_FILES['fileimg']['tmp_name'];
    move_uploaded_file($tocimg,$fil1);

    $proname1=$_POST['proname']; 
    $catep=$_POST['catepro'];
    $disc=$_POST['tex1'];
    $min1=$_POST['minbid'];
    $date1=$_POST['biddate'];
    $usermail12=$_POST['useemail21'];

    //  echo $disc;

    $sql2img="INSERT INTO sellitem (imgaddr,prodname,	category1,descrip,	minbid,	date1,useremail1) VALUES('$fil1','$proname1',' $catep','$disc','$min1','$date1','$usermail12')";

    $resimg=mysqli_query($conn1,$sql2img);

    if($resimg){
     echo '<script>alert("Records enter successfully");
      window.location.assign("http://localhost/collegetoc/showbid.php");
     </script>';
    }else{
         echo '<script>alert("Records enter unsuccessfully");</script>';
    }
    
   }else{
        echo '<script>alert("form is empty")</script>';
   }

?>