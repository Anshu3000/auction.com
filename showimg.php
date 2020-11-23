<?php
   include('conn12.php');
 
   $sqlsho="SELECT * FROM sellitem ";
   $rsesho=mysqli_query($conn1,$sqlsho);
  
   if(mysqli_num_rows($rsesho)>0){
  
    echo '<script>var x34 = document.getElementsByClassName("imgpag");';

   while($ro=mysqli_fetch_array($rsesho,MYSQLI_ASSOC)){
        // echo $ro['prodname'];
        ?>
        

   var xuer=localStorage.getItem("useremail");
  
  var x3 = document.createElement("div");
  x3.classList.add("block1");
  
  var cretex=document.createElement("p");
  var cretex1= document.createTextNode(<?php echo json_encode($ro["descrip"]); ?>);
  
  cretex.appendChild(cretex1);
  
  var crepric=document.createElement("p");
  var crepric12=document.createTextNode(<?php echo json_encode($ro["minbid"]); ?>);

  crepric.appendChild(crepric12);

  var x4 = document.createElement("img");
  x4.setAttribute("width", "300px");
  x4.setAttribute("height", "200px");
  x4.setAttribute("src",<?php echo json_encode($ro["imgaddr"]); ?>);
    
  var x5 = document.createElement("form");
  var x51 = document.createElement("input");
  var x52 = document.createElement("input");
  var x53= document.createElement("input");
  var x54=document.createElement("input");
  var x551=document.createElement("input");

  x5.setAttribute("action","buyerinfo.php");
 x5.setAttribute("method","POST");

  x51.setAttribute("type", "number");
  x51.setAttribute("min",<?php echo json_encode($ro["minbid"]);?>);

  x51.setAttribute("id", "bidpri");
  x51.setAttribute("name","pricsell");

  x53.setAttribute("type","hidden");
  x53.setAttribute("name","productid");
  x53.setAttribute("value", <?php echo json_encode($ro["prodname"]);?>);
  
  x54.setAttribute("type","hidden");
  x54.setAttribute("name","productuser");
  x54.setAttribute("value", <?php echo json_encode($ro["useremail1"]);?>);

  x551.setAttribute("type","hidden");
  x551.setAttribute("name","userbid12r");
  x551.setAttribute("value",xuer);

  x52.setAttribute("type", "submit");
  x52.setAttribute("name", "submitre");
  x52.setAttribute("value", " submit ");
  x52.setAttribute("id", "butbid");
  

  x5.appendChild(x51);
  x5.appendChild(x52);
  x5.appendChild(x53);
  x5.appendChild(x54);
  x5.appendChild(x551);
  x3.appendChild(x4);
  x3.appendChild(x5);
  x3.appendChild(cretex);
  x3.appendChild(crepric);
  x34[0].appendChild(x3);

        <?php
   }
   
   echo '</script>';

   }else{
       echo '<script>alert(error in showimg)</script>';
   }
   

?>

