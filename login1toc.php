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
                    <li> <a href="index.php">Home</a></li>
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
                        <li><a href="support1.php">Feedback</a></li>
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
                            <li> <a href="index.php">Home</a></li>
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
                                <li><a href="support1.php">Feedback</a></li>
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
                    <p >
                        <br>
                        Login / Register
                    </p>
                </div>
    
                <div class="secdes">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam explicabo, modi voluptates quasi qui
                        velit minima placeat voluptatem maiores veniam?
                    </p>
    
                    <div onclick="loginscroll1()">
                    <a ><i class="fa fa-plus" aria-hidden="true" style="padding: 10px;"></i>Explore</a>
                   </div> 
                </div>
    
            </div>
        </section>
    
    </section>
    
    <!-- nav section over -->
    <!-- connection -->
      
       <section class="formcont">
          <div class="formfle">
             <div class="login" data-aos="fade-right">
                <form action="login2toc.php" method="POST">
                     <div class="loghe">Log in
                     </div>
                    <label for="email1" class="login-label">Email :</label>
                    <input type="email" name="email12" id="email1" placeholder="enter your email"  required class="inputlogin">
                    <label for="pass1" class="login-label">Password :</label>
                    <input type="password" name="pass123" id="pass1" required placeholder="enter your password"  class="inputlogin">
                   
                   <input type="submit" value=" submit " name="signin1" class="logsub"> 
                </form>
              </div>

              <!-- register data -->

            <div class="logup" data-aos="fade-left">
                 <form action="logintoc.php" name="signup12" onsubmit="return onval()" method="POST">
                     <div class="loghe">
                        Register
                     </div>
             
                <label for="username" class="login-label">Username :</label>
                <input type="email" name="user1" id="username" required placeholder="enter your email"  class="inputlogin">

                <label for="passw2" class="login-label">Password :</label>
                <input type="password" name="pass12" id="passw2" placeholder="enter your password "  class="inputlogin">

                 <label for="ret" class="login-label">Retype :</label>
                 <input type="password" name="reypass" id="ret" placeholder="retype your password"  class="inputlogin">

                 <input type="submit" class="logsub" value=" submit " name="signup1">
                  
                    </form>
            </div>

             </div>
       </section>
    
       <!-- about -->
       
       <?php include('foooter.php')
       ?>
    
       
       <script src="auction2.js">
      
       </script>   
       
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset:200,
        duration:1000,
    });
  </script>
</body>
</html>