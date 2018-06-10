<?php

    include("connect.php");
    include("functions.php");
    
    if(!logged_in())
    {
        header("location:login.php");
        exit();
    }
?>


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
        <link rel='stylesheet'href='css/media.css'/>
        <link rel='stylesheet'href='css/animate.css'/>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"</script>
        <script src="js/respond.min.js"></script>
         <![endif]-->
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
        <li class="active"><a href="profile.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="aboutlogin.php">About</a></li>
           <li><a href="drop.php">Book a ticket</a></li>
          <li><a href="maplogin.php">Map</a></li>
          <li><a href="faqlogin.php">FAQ</a></li>
          <li><a href="logout.php">log out</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!--End Of Navbar-->
        
        <!--Start Carousel-->
        <div id="myslide" class="carousel slide hidden-xs" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators hidden-xs">
    <li data-target="#myslide" data-slide-to="0" class="active"></li>
    <li data-target="#myslide" data-slide-to="1"></li>
    <li data-target="#myslide" data-slide-to="2"></li>
    <li data-target="#myslide" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/1.jpg" alt="pic 1">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/2.jpg" alt="Pic2">
      <div class="carousel-caption">
      </div>
    </div>
       <div class="item">
      <img src="img/3.jpg" alt="Pic3">
      <div class="carousel-caption">
      </div>
    </div>
       <div class="item">
      <img src="img/04.jpg" alt="pic4">
      <div class="carousel-caption">
      </div>
      </div>
            </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!--End of Carousel-->
        
        <!--start of about-->
        <section class="about text-center wow bounceIn" data-wow-duration="2s" data-wow-offset="300">
            <div class="container">
                <h1>Meet Our New Offers <span>RailWayticket</span></h1>
                <p class="lead">Hello Let Me Introduce Our New Template RailWayticket. Created With All Love With <strong>Bootstrap</strong></p>
            </section>
            </div>
        <!--End of About-->
        
        <!-- start section features-->
        
        <section class="features  text-center">
            <div class="container">
                <h1>Our Features</h1>
                <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="feat buzz-out wow bounceInUp"data-wow-duration="2s" data-wow-offset="200">
                        <span class="glyphicon glyphicon-ok"></span>
                        <h4>100%Responsive</h4>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <div class="feat buzz-out wow bounceInDown"data-wow-duration="2s" data-wow-offset="200">
                        <span class="glyphicon glyphicon-eye-open"></span>
                        <h4>Awesome Display</h4>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <div class="feat buzz-out wow bounceInRight"data-wow-duration="2s" data-wow-offset="200">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        <h4>Retina Ready</h4>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <div class="feat buzz-out wow bounceInLeft"data-wow-duration="2s" data-wow-offset="200">
                        <span class="glyphicon glyphicon-pencil"></span>
                        <h4>Well Documented</h4>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--end section features-->
        
        <!--start of testimonials Section-->
        <section class="testimonials text-center">
            <div class="container">
            <h2>What Our Clients Say?</h2>
                
                 <div id="carousel_testimonials" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
              <p class="lead">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
            <span>Karim Dessoky</span>
        </div>
        <div class="item">
         <p class="lead"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
            <span>Nagham Mohamed</span>
        </div>
           <div class="item">
          <p class="lead"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
               <span>Ahmed Osama</span>
        </div>
           <div class="item">
        <p class="lead"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
               <span>Mohamed Salah</span>
               
          </div>
              <div class="item">
        <p class="lead"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
               <span>Ahmed Alsharief</span>
               
          </div>
    <ol class="carousel-indicators">
        <li data-target="#carousel_testimonials" data-slide-to="0" class="active">
        <img src="img/avatar_01.jpg" alt="Karim Dessoky"/>
        </li>
        <li data-target="#carousel_testimonials" data-slide-to="1">
            <img src="img/avatar_03.jpg"alt="Nagham Mohamed"/>
        </li>
        <li data-target="#carousel_testimonials" data-slide-to="2">
        <img src="img/avatar_02.jpg"alt="Ahmed Osama"/>
        </li>
        <li data-target="#carousel_testimonials" data-slide-to="3">
        <img src="img/avatar_01.jpg" alt="Mohamed Salah"/>
        </li>
        <li data-target="#carousel_testimonials" data-slide-to="4">
        <img src="img/avatar_04.jpg" alt="Ahmed Alshairef"/>
        </li>
      </ol>
                     </div>
        </div>
    </div>
        </section>
        
        <!-- end of testimonials section-->
        
        
    <!-- Start Section Price Table -->
        <section class="price_table text-center">
        <div class="container">
            <h1>Our Amazing Prices</h1>
            <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
                <h2 class="text-primary">Offer#1</h2>
                    <p class="center-block">$65</p>
                    <ul class="list-unstyled">
                    <li>Source: Cairo</li>
                    <li>Destination: Alex</li>
                    <li>Seat: Cairo</li>
                    <li>Date:2/20/2018</li>
                    <li>Time:7:10AM</li>
                    </ul>
                    <a href="#" class="btn btn-info">Order Now</a>
                </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="price_box wow fadeInDown" data-wow-duration="2s" data-wow-offset="200">
                <h2 class="text-primary">Offer#2</h2>
                    <p class="center-block">$40</p>
                    <ul class="list-unstyled">
                    <li>Source: Cairo</li>
                    <li>Destination: Alex</li>
                    <li>Seat: Cairo</li>
                    <li>Date:2/20/2018</li>
                    <li>Time:7:10AM</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
                <h2 class="text-success">Offer#3</h2>
                    <p class="center-block">$70</p>
                    <ul class="list-unstyled">
                    <li>Source: Cairo</li>
                    <li>Destination: Alex</li>
                    <li>Seat: Cairo</li>
                    <li>Date:2/20/2018</li>
                    <li>Time:7:10AM</li>
                    </ul>
                    <a href="#" class="btn btn-success">Order Now</a>
                </div>
                </div>
               <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="price_box wow fadeInDown" data-wow-duration="2s" data-wow-offset="200">
                <h2 class="text-danger">Offer#4</h2>
                    <p class="center-block">$80</p>
                    <ul class="list-unstyled">
                    <li>Source: Cairo</li>
                    <li>Destination: Alex</li>
                    <li>Seat: Cairo</li>
                    <li>Date:2/20/2018</li>
                    <li>Time:7:10AM</li>
                    </ul>
                    <a href="#" class="btn btn-danger">Order Now</a>
                </div>
                </div>
            </div>
            </div>
        </section>
        
        
    <!-- End Section Price Table -->   
        
        <!-- Start Section Our Team-->
        
        <section class="our_team text-center">
            <div class="team">
                <div class="container">
            <h1>Meet Our Awesome Team</h1>
             <div class="row">
            <div class="col-lg-3 col-sm-6">
                 <div class="person wow pulse" data-wow-duration="1s" data-wow-duration="400">
                <img class="img-circle" src="img/hamada3.jpg" alt="Karim Dessoky" />
                     <h3>Karim Dessoky</h3>
                     <p>This Is The Man Who Change The World With His Apple Products</p>
                     <i class="fa fa-google-plus fa-lg"></i>
                     <i class="fa fa-facebook fa-lg"></i>
                     <i class="fa fa-twitter fa-lg"></i>
                     <i class="fa fa-youtube fa-lg"></i>
                </div>
                 </div>
            <div class="col-lg-3 col-sm-6">
                 <div class="person wow pulse" data-wow-duration="1s" data-wow-duration="400">
               <img class="img-circle" src="img/hamada4.jpg" alt="Karim Dessoky" />
                     <h3>Nagham Mohamed</h3>
                     <p>This is Amazing Hacker Woman With A Much Knowledge In Hacking Systems</p>
                     <i class="fa fa-google-plus fa-lg"></i>
                     <i class="fa fa-facebook fa-lg"></i>
                     <i class="fa fa-twitter fa-lg"></i>
                     <i class="fa fa-youtube fa-lg"></i>
                </div>
                 </div>
                    <div class="col-lg-3 col-sm-6">
                 <div class="person wow pulse" data-wow-duration="1s" data-wow-duration="400">
            <img class="img-circle" src="img/hamada3.jpg" alt="Karim Dessoky"/>
                     <h3>Mohamed Salah</h3>
                     <p>This Is The Man Who Change The World With His Apple Products</p>
                     <i class="fa fa-google-plus fa-lg"></i>
                     <i class="fa fa-facebook fa-lg"></i>
                     <i class="fa fa-twitter fa-lg"></i>
                     <i class="fa fa-youtube fa-lg"></i>
                </div>
                 </div>
                    <div class="col-lg-3 col-sm-6">
                 <div class="person wow pulse" data-wow-duration="1s" data-wow-duration="400">
               <img class="img-circle" src="img/hamada4.jpg" alt="Karim Dessoky" />
                     <h3>Ahmed Osama</h3>
                     <p>This Is The Man Who Change The World With His Apple Products</p>
                     <i class="fa fa-google-plus fa-lg"></i>
                     <i class="fa fa-facebook fa-lg"></i>
                     <i class="fa fa-twitter fa-lg"></i>
                     <i class="fa fa-youtube fa-lg"></i>
                </div>
                 </div>
                 </div>
                </div>
            </div>
        </section>
        
        
        
        
        <!-- End Section Our Team-->
        
        <!-- Start Section Subscribe-->
        
        <section class="subscribe text-center">
        <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
            <h1>Keep In Touch</h1>
            <p class="lead"> Sign Up Newsletter Dont Worry About Spam We Hate it Too.</p>
            <form class="form-inline">
            <input class="form-control input-lg" type="text" placeholder="Write Your Email">
                <button class="btn btn-danger btn-lg"> <i class="fa fa-edit fa-lg"></i> Subscribe</button>
            </form>
            </div>
        </section>
        
        
        
        <!-- End Section Subscribe-->
        
        
        
       <!--Start section stat-->
        
        <section class="statistics text-center">
            <div class="data">
                 <div class="container">
            <h1>Our Main Statistics</h1>
          <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="stats">
                <i class="fa fa-users fa-3x"></i>
                    <p>9,550</p>
                    <span>Satisfied Users</span>
                </div>
             </div>
              <div class="col-md-3 col-sm-6">
                <div class="stats">
                <i class="fa fa-comments fa-3x"></i>
                    <p>25,550</p>
                    <span>Posted Comments</span>
                </div>
             </div>
              <div class="col-md-3 col-sm-6">
                <div class="stats">
                <i class="fa fa-suitcase fa-3x"></i>
                    <p>3,550</p>
                    <span>Projects Done</span>
                </div>
             </div>
              <div class="col-md-3 col-sm-6">
                <div class="stats">
                <i class="fa fa-support fa-3x"></i>
                    <p>95,550</p>
                    <span>Tickets Archived</span>
                </div>
             </div>
        </div>
            </div>
    </div>
        </section>
        
        
       <!--End section stat-->
        
        
        <!-- Start Section Our Skills-->
        
        <section class="our-skills">
        <div class="container">
            <h1 class="text-center">Our Skills</h1>
            <div class="row">
            <!-- Start Progress Skills-->
                
                <div class="col-md-5">
                 <div class="skills-progress">
                    <div class="progress">
                    <div class="progress-bar progress-bar-success progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        Html5 / Css3
                        </div>
                     </div>
                     <div class="progress">
                    <div class="progress-bar progress-bar-danger progress" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        PHP / MYSQL
                        </div>
                     </div>
                     <div class="progress">
                    <div class="progress-bar progress-bar-warining progress" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        javascript / Jquery
                        </div>
                     </div>
                     <div class="progress">
                    <div class="progress-bar progress-bar-info progress" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                        WordPress
                        </div>
                     </div>
                    </div>
                </div>
                
                
                
            
            <!-- End Progress Skills-->
                
                <!--Start Team Info-->
                <div class="col-md-6 col-md-offset-1">
                <div class="skills-info">
                    <h3>About The Team</h3>
                    <p class="lead">We Are Specialised Desiging And Programming Team Passionate About Web Design And Creating Digital Ideas To A Digital Dream And Make Your Wish Come True</p>
                    <button type="button" class="btn btn-primary">Talk With Professional</button>
                    </div>
                
                </div>
                
                <!--End Team Info-->
            </div>
            </div>
        </section>
        
        
        
        <!-- End Section Our Skills-->
        
        
        <!--start section Contact us-->
        
        
        <section class="contact-us text-center">
        <div class="fields">
            <div class="container">
                <div class="row">
            <i class="fa fa-user-circle-o fa-5x"></i>
            <h1>Tell Us What You Feel</h1>
                <p class="lead">Feel Free To Contact Us AnyTime</p>
                <!--Start Contact Form-->
                
                <form role="form">
                    <div class="col-md-6 wow bounceInLeft"data-wow-duration="1s" data-wow-offset="300">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Cellphone">
                    </div>
                    </div>
                    <div class="col-md-6 wow bounceInRight"data-wow-duration="1s" data-wow-offset="300">
                        <div class="form-group">
                        <textarea class="form-control input-lg" placeholder="Your Message"></textarea>
                        </div>
                        <button type="button" class="btn btn-danger btn-lg btn-block"> Contact Us </button>
                        </div>
                </form>
                
                
                
                
                
                <!--End Contact Form-->
                </div>    
            </div>
            </div>
        </section>
        
        
        <!--End section Contact us-->
        
        <!-- Start Section our clients-->
        <section class="our-clients">
        <div class="container">
            <div class="row">
            <ul class="list-unstyled">
                <li class="col-md-2 col-xs-4">
                <img class="img-responsive center-block wow bounceIn" src="img/img%201" width="126" height="28" alt="CNN" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay=".5s"/>
                </li>
                <li class="col-md-2 col-xs-4">
                <img class="img-responsive center-block wow bounceIn" src="img/img%202.jpg" width="126" height="28" alt="BBC" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="1s"/>
                </li>
                <li class="col-md-2 col-xs-4">
                <img class="img-responsive center-block wow bounceIn" src="img/img%203" width="126" height="28" alt="CNN" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="1.5s"/>
                </li>
                <li class="col-md-2 col-xs-4">
                <img class="img-responsive center-block wow bounceIn" src="img/img%204" width="126" height="28" alt="CNN" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="2s"/>
                </li>
                <li class="col-md-2 col-xs-4">
                <img class="img-responsive center-block wow bounceIn" src="img/img%205.png" alt="CNN" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="2.5s"/>
                </li>
                <li class="col-md-2 col-xs-4">
                <img class="img-responsive center-block wow bounceIn" src="img/img%206.png" alt="CNN" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="3s"/>
                </li>
                </ul>
            
            </div>
            </div>
        
        
        </section>
        
        
        
        <!-- End Section our clients-->
        
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
        
        <!--Start Loading Screen-->
        
        <section class="loading-overlay">
        <div class="spinner">
  <div class="double-bounce1"></div>
  <div class="double-bounce2"></div>
</div>
        </section>
         <!--End Loading Screen-->
        
        
        <!--start scroll-top-->
      <div id="scroll-top">
            <i class="fa fa-chevron-up fa-3x"></i>
        </div>
        
        <!--End scroll-top-->
        
        
        
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
    </body>
</html>