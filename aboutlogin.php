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
          include('connect.php');
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
        <li><a href="profile.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="aboutlogin.php">About</a></li>
        <li ><a href="drop.php"> Book a ticket</a></li>
          <li><a href="maplogin.php">Map</a></li>
           <li><a href="faqlogin.php">FAQ</a></li>
           <li><a href="logout.php">log out</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!--End Of Navbar-->
        
        
        <!--start About Us -->
        
        <section class="about-us text-center">
        <div class="container">
            <h1>About Us</h1>
            <hr>
            <p>Slow Thought: a manifesto. We need a philosophy of Slow Thought to ease thinking into a more playful and porous dialogue about what it means to live. Vincenzo Di Nicola. Essay/. Biology. Animal agents. </p>
            <img class="img-thumbnail" src ="img/team.gif" alt="team">
            </div>
        </section>
        
        
          <!--End About Us -->
        
        <!-- start about features-->
     <section class="about-features text-center">
        <div class="container">
         <div class="row">
            <div class="col-sm-4">
             <i class="fa fa-code fa-5x"></i>
                <h3>We Love Code</h3>
                <p>Slow Thought: a manifesto. We need a philosophy of Slow Thought to ease thinking into a more playful and porous dialogue about what it means to live. Vincenzo Di Nicola. Essay/. Biology. Animal agents.</p>
             </div>
              <div class="col-sm-4">
             <i class="fa fa-child fa-5x"></i>
                <h3>We Are Happy</h3>
                <p>Slow Thought: a manifesto. We need a philosophy of Slow Thought to ease thinking into a more playful and porous dialogue about what it means to live. Vincenzo Di Nicola. Essay/. Biology. Animal agents.</p>
             </div>
              <div class="col-sm-4">
             <i class="fa fa-group fa-5x"></i>
                <h3>We Are Social</h3>
                <p>Slow Thought: a manifesto. We need a philosophy of Slow Thought to ease thinking into a more playful and porous dialogue about what it means to live. Vincenzo Di Nicola. Essay/. Biology. Animal agents.</p>
             </div>
            </div>
         </div>
        </section>
        
         <!-- end about features-->
        
    <!-- Start about ceo-->
        <section class="about-ceo">
        <div class="container">
            <div class="row">
            <div class="col-sm-5">
                <img class="img-responsive" src="img/ceo2.jpg">
                </div>
                <div class="col-sm-7">
                    <h2>We Are Happy To Help You</h2>
                    <p class="lead">Slow Thought: a manifesto. We need a philosophy of Slow Thought to ease thinking into a more playful and porous dialogue about what it means to live. Vincenzo Di Nicola. Essay/. Biology. Animal agents</p>
                    <a class="btn btn-primary">Contact Us</a>
                </div>
            </div>
            </div>
        </section>
        
          <!-- end about ceo-->
        <!--Star Ultimate Footer Section-->
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
        

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
    </body>
</html>