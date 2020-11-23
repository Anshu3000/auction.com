<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./auction1.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- copy from index.html -->

    <section class="container1">
        <div class="nav-link">
            <div class="link1">
                <ul>
                    <li> Auction</li>
                </ul>
            </div>
            <div class="link1">
                <ul>
                    <li> <a href="">Home</a></li>
                </ul>
            </div>

            <div class="link1">
                <ul>
                    <li> <a href="">buy</a></li>
                </ul>
            </div>

            <div class="link1">
                <ul>
                    <li> <a href="">sell</a></li>
                </ul>
            </div>

            <div class="link1">
                <ul>
                    <li> <a href="#abotop">about</a></li>
                </ul>
            </div>

            <div class="link1">
                <ul>
                    <li> <a href="" class="fa fa-angle-double-down">service</a></li>
                    <div class="serv1">
                        <li><a href="">sell item</a></li>
                        <li><a href="">buy item</a></li>
                        <li><a href="">submit a bid</a></li>
                    </div>
                </ul>
            </div>

            <div class="link1 sign1">
                <ul>
                    <li><a href="">signin/register</a> </li>
                </ul>
            </div>


        </div>

        <div class="max11180">
            <div class="logo1">
                <div>
                    <h1>Auction</h1>
                </div>

                <div class="icon-left">
                    <div class="bar1">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>

                    <div class="cross1">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="bo12">
                <div class="link-box">
                    <div class="link1">
                        <ul>
                            <li> <a href="">Home</a></li>
                        </ul>
                    </div>

                    <div class="link1">
                        <ul>
                            <li> <a href="">buy</a></li>
                        </ul>
                    </div>

                    <div class="link1">
                        <ul>
                            <li> <a href="">sell</a></li>
                        </ul>
                    </div>

                    <div class="link1">
                        <ul>
                            <li> <a href="#abotop">about</a></li>
                        </ul>
                    </div>

                    <div class="link1">
                        <ul>
                            <li> <a href="" class="fa fa-angle-double-down">service</a></li>
                            <div class="serv1">
                                <li><a href="">sell item</a></li>
                                <li><a href="">buy item</a></li>
                                <li><a href="">submit a bid</a></li>
                            </div>
                        </ul>
                    </div>

                    <div class="link1 sign1">
                        <ul>
                            <li><a href="">signin/register</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <section class="firdes1">
            <div class="des1">
                <div class="firdes" id="top12">
                    <p>
                        <br>
                        sell 
                    </p>
                </div>

                <div class="secdes">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo, modi voluptates quasi
                        qui
                        velit minima placeat voluptatem maiores veniam?
                    </p>

                    <a href=""><i class="fa fa-plus" aria-hidden="true" style="padding: 10px;"></i>Explore</a>
                </div>

            </div>
        </section>

    </section>

 <!-- nav section over -->
   
   <section class="conbidform" data-aos="zoom-in">
        <div class="bidform">
            <form action="image1toc.php" method="POST" enctype="multipart/form-data" onsubmit="return onval23()">
                <h1 style="text-align: center; font-size: 30px;text-decoration: underline;">enter your bidding item information</h1>
       <label for="fil1" class="bidlabel">photo :</label>
            <input type="file" name="fileimg" id="fil1" required>
            
            <label for="prona" class="bidlabel"> name of product:</label>
             <input type="text" name="proname" id="prona"
             placeholder="example: iphone12" class="bidinput" required>

         <label for="cate" class="bidlabel">choose product category:</label>
         <select name="catepro" id="cate" class="bidinput" required>
         <option value="electronics">Electronic</option>
         <option value="household">House hold</option>
         <option value="machine">Machine</option>
         <option value="software">Software</option>
         <option value="laptop">laptop</option>
        <option value="other">other</option>
          </select>  
         
          <label for="tex" class="bidlabel">Description :</label>
          <textarea name="tex1" id="tex" cols="30" rows="5"
          placeholder="discription maximum 50 length " class="bidinput"  required></textarea>  
          
          <label for="minbid"class="bidlabel">Minimum bidding :</label>
          <input type="number" name="minbid" id="minbid" placeholder="RS :" class="bidinput" required>

          <label for="dat" class="bidlabel">Bidding last date:</label>
          <input type="date" name="biddate" class="bidinput" required>

        <input type="hidden" id="email2456" name="useemail21" >
         
          <input type="submit" value=" Sumit " name="biddingform" class="biddingsub">
         
            </form>
        </div>
   </section>


   <!-- js file  -->
 <script src="auction2.js">

</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration:1000,
        offset:200,
    });
</script>

</body>
        
</html>