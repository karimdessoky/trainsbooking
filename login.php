<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Final Project</title>
        <link rel='stylesheet'href ='css/bootstrap.css'/>
        <link rel='stylesheet'href ='css/font-awesome.min.css'/>
        <link rel='stylesheet'href ='css/style.css'/>   
        <link rel='stylesheet'href ="css/pages.css"/>
        <link rel='stylesheet'href='css/media.css'/>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"</script>
        <script src="js/respond.min.js"></script>
         <![endif]-->


      <?php

    include("connect.php");
    include("functions.php");
    
    if(logged_in())
    {
        header("location:profile.php");
        exit();
    }
    
    $errorpassword = "";
    $erroremail = "";

    if(isset($_POST['submit']))
    {
    
        $email =$_POST['email'];
        $password=$_POST['password'];
        $checkBox = isset($_POST['keep']);
        
        if(email_exists($email,$con))
        {
            $result = mysqli_query($con, "SELECT password FROM passengers WHERE email='$email'");
            $retrievepassword = mysqli_fetch_assoc($result);
            
            if($password != $retrievepassword['password'])
            {
                $errorpassword = "Password is incorrect";
            }
            else
            {
                $_SESSION['email'] = $email;
                
                if($checkBox == "on")
                {
                    setcookie("email",$email, time()+3600);
                }
                
                header("location: profile.php");
            }
            
            
        }
        else
        {
            $erroremail = "Email Does not exists";
        }
        
    
    }

?>
    </head>
    <body>
	

 <!-- Start Our Navbar-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#OurNavbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo.png" width="275" alt="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="OurNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="active"><a href="login.php">login</a></li>
          <li><a href="map.php">Map</a></li>
          <li><a href="faq.php">FAQ</a></li>
          
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!--End Of Navbar-->
    
       <!--start section register-->
            <section class="contact-us text-center">
               <div class="fields">
               	<div class="container">
        <div class="row">
            <i class="fa fa-user-circle fa-5x" style="color: rgb(187,59,59);"></i>
            <h3>Travel is the only thing you buy that makes you richer</h3>
                <p class="lead">login .. travel ...LIVE </p>




                <!--Start Contact Form-->
                
                <form role="form" action="login.php" method="POST">
                    
                
                    <div>
                    <input type="text" class="input-lg" name="email" placeholder="email" required>
                    <br>
                    <?php  if($erroremail !="")?> 
                    <?php echo $erroremail; ?>
                    </div>

                    <br>

                    <div>
                    <input type="password" class="input-lg" 
                    style="background: rgba(82,78,78,0.6);color:#FFF;border:none" 
                    name="password" placeholder="password" required>
                    <br>
                    <?php  if($errorpassword !="")?> 
                    <?php echo $errorpassword; ?>
                    </div>
                      <br>

					<input type="checkbox" class="form-control btn-sm "" name="keep" />
                    <label>Keep me logged in</label><br/><br/>
					 
					
					<button type="submit" name="submit" class="btn btn-danger btn-lg "> Login</button>

                    <br> <br>
                </form>
                
                  <a href="register.php" class="btn btn-danger btn-lg">Don't Have an Account</a>
                  
				</div>
			</div>
		</div>
			</section>
                
                
                
                <!--End Contact Form-->
	  


	  <!--Start Ultimate Footer Section-->
        <section class="footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <h2 class="feature-area__content_title" tabindex="0"> Travel Smarter with Mobile App</h2>
                <hr>
                <h3 class="feature-area__content_title" tabindex="0">Available for iPhone® and Android™ devices</h3>
                <p class="feature-area__content_body-text" tabindex="0">Need a fast way to book your ticket? Lost while getting to the station? Want to board the train by showing your ticket on your phone?</p>
                <p class="feature-area__content_body-text" tabindex="0"> Download the free Railway Booking Ticket mobile app for iPhone® and Android™ today for simple, intuitive access to all the travel information you need, whenever you need it.</p>
                <a class="btn btn-primary">Get The App Now!</a>
                </div>
    
        <div class="col-lg-4">
                <br>
                <br>
                 <br>
            <br>
            <img class="media-object" src="img/qr.jpg"/>
                </div>
            </div>
            </div>
            <div class="copyright text-center">
                   Copyright&copy;2018 <span>RailWayTicket</span>.Team
            </div>
        </section>
        
        
        <!--End Ultimate Footer Section-->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <!--start loading section -->
	        
	  <!--end loading section -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
      
    </body>
</html>