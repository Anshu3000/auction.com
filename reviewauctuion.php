<?php
    include('conn12.php');
  
   $sql34re="SELECT * FROM review1";
   $res34=mysqli_query($conn1,$sql34re);
   $pi=[];
   if($res34){
      $i=0;
    while($row=mysqli_fetch_array($res34,MYSQLI_ASSOC)){
       $pi[$i]=array($row['rev2'],$row['user1']);
       $i++;
    }
    ?>
   
   <script>
     var left1=document.getElementById('rightarrow');
     var right1=document.getElementById('leftarrow');

     var p23= <?php echo json_encode($pi); ?> ;
     var j=-1;
    left1.addEventListener('click',function(){
         let x1=document.getElementById('o1pre');
         let x2 = document.getElementById('o2pre');
         let x3 = document.getElementById('o3pre');
         
         let x11=document.getElementById('o1userapan');
         let x22=document.getElementById('o2userapan');
         let x33=document.getElementById('o3userapan');
         
         
         if((j+1)<p23.length){
            j+=1;
            x1.textContent=p23[j][0];
            x11.textContent=p23[j][1];
         }

          if ((j + 1) < p23.length) {
          j += 1;
          x2.textContent = p23[j][0];
          x22.textContent = p23[j][1];
       }

        if ((j + 1) < p23.length) {
          j += 1;
          x3.textContent = p23[j][0];
          x33.textContent = p23[j][1];
       }

    });

    right1.addEventListener('click', function () {
         let x1 = document.getElementById('o1pre');
         let x2 = document.getElementById('o2pre');
         let x3 = document.getElementById('o3pre');

         let x11 = document.getElementById('o1userapan');
         let x22 = document.getElementById('o2userapan');
         let x33 = document.getElementById('o3userapan');


         if ((j -1) >= 0) {
            j -= 1;
            x1.textContent = p23[j][0];
            x11.textContent = p23[j][1];
         }

         if ((j - 1) >=0) {
            j -= 1;
            x2.textContent = p23[j][0];
            x22.textContent = p23[j][1];
         }

         if ((j -1) >= 0) {
            j -= 1;
            x3.textContent = p23[j][0];
            x33.textContent = p23[j][1];
         }

      });

  </script>
 
   <?php
   }else{
    echo '<script>alert("error in reviewauction please report developer");</script>';
   }



?>