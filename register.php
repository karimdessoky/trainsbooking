







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
    
    $errorusername= "";
    $erroremail= "";
    $errorpassword= "";
    $errorsuccess="";


    if(isset($_POST['submit']))
    {
        $username =$_POST['username'];
        $email =$_POST['email'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];
        $mobilenumber=$_POST['mobilenumber'];

      
        
        
        $date = date("F, d , Y");
        
        
        if(strlen($username) < 3)
        {
            $errorusername = "First name is too short";
        }
        
        
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $erroremail = "Please enter valid email address";
        }
        else if(email_exists($email, $con))
        {
            $erroremail = "Someone is already registered with this email";
        }
        else if(strlen($password) < 3)
        {
            $errorpassword = "Password must be greater than 8 characters";
        }
        else if($password !== $confirmpassword)
        {
            $errorpassword = "Password does not match";
        }
        
       
        else
        {   
                
                
                
                
                    $insertQuery = "INSERT INTO passengers (username, email, password,mobilenumber,date) VALUES ('$username','$email','$password','$mobilenumber','$date')";
                    if(mysqli_query($con, $insertQuery)){
                        $errorsuccess = "You are successfully registered";
                    }
                    
        
                            
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
            
               
            <i class="fa fa-train fa-5x" style="color: rgb(187,59,59);"> </i>
            <h3>Travel is the only thing you buy that makes you richer</h3>
                <p class="lead">Register to start your adventure</p>
                <!--Start Contact Form-->
                
                <form role="form" action="register.php" method="POST">
                    
                    <?php  if($errorsuccess !="") ?> 
                    <?php echo $errorsuccess; ?>

                    <div class="form-group">
                    <input type="text" class=" input-lg" name="username" placeholder="username" required>
                    <br>
                    <?php  if($errorusername !="") ?> 
                    <?php echo $errorusername; ?>
                    </div>
                    
                    <div class="form-group">
                    <input type="email" class=" input-lg"
                    style="background: rgba(82,78,78,0.6); color:#FFF; border:none" 
                    name="email" placeholder="email" required>
                    <br>
                    <?php  if($erroremail !="")?> 
                    <?php echo $erroremail; ?>
                   </div>
                    
                    <div class="form-group">
                    <input type="password" class=" input-lg" 
                    style="background: rgba(82,78,78,0.6);
                    color:#FFF;border:none" name="password" placeholder="password" required>
                    <br>
                    <?php  if($errorpassword !="")?> 
                    <?php echo $errorpassword; ?>
                    </div>
					 
                     <div class="form-group">
                    <input type="password" class=" input-lg" 
                    style="background: rgba(82,78,78,0.6);color:#FFF;border:none"
                    name="confirmpassword" placeholder="confrim password" required>
                    </div>

					 <div class="form-group">
                    <input type="tel" class=" input-lg" 
                    style="background: rgba(82,78,78,0.6);color:#FFF;border:none" name="mobilenumber" placeholder="mobile number" required>
                    </div>
					<button type="submit" name="submit" class="btn btn-danger btn-lg "> Register </button>

                    
                </form>
                <br>
                <a href="login.php" class="btn btn-danger btn-lg "> Already have an Account</a>
				
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
                <p class="feature-area__content_body-text" tabindex="0"> Download the free Amtrak mobile app for iPhone® and Android™ today for simple, intuitive access to all the travel information you need, whenever you need it.</p>
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
                   Copyright&copy;2018 <span>RailWayTicket</span>.Dessoky
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