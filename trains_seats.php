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
	$route_id = $_GET["rid"];
	$train_id = $_GET["tid"];
	$query ="SELECT * FROM trains WHERE Train_id = '".$train_id."'";
	$do=mysqli_query($con,$query);
	$row = mysqli_fetch_array($do);
	$Train_name = $row['Train_name'];
	$Train_class = $row['Train_class'];
	$Booked_seats = $row['Booked_seats'];
	$Total_seats = $row['Total_seats'];
	$Available_seats = $Total_seats - $Booked_seats;
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
        <li><a href="aboutlogin.php">About</a></li>
        <li class="active"><a href="drop.php"> Book a ticket</a></li>
          <li><a href="maplogin.php">Map</a></li>
          <li><a href="faqlogin.php">FAQ</a></li>
          <li><a href="logout.php">log out</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!--End Of Navbar-->




<section class="contact-us text-center">
	<div class="fields">
    <div class="container">
		<div class="row">
			<div class="col-md-4" style=" float: none; margin: 0 auto">
				<br> <br> <br>
				<form class="text-center" method="POST" action="reserve.php">
					<input type="hidden" name="train_id" value="<?php echo $train_id; ?>" />
					<input type="hidden" name="route_id" value="<?php echo $route_id; ?>" />

					<input type="hidden" name="available_seats" value="<?php echo $Available_seats; ?>" />
					<input type="hidden" name="booked_seats" value="<?php echo $Booked_seats; ?>" />
					<div class="form-group">
						<div class="center">
							Train Name: <?php echo $Train_name ?> <br>
							Train Class: <?php echo $Train_class ?> <br>
							Available Seats: <?php echo $Available_seats ?> <br><br>
							<input type="text" name="num_seats" class="form-control input-number" value="1"/>
							<br>
							<input type="submit" value="Submit" class="btn btn-danger btn-block" />
						</div>
					</div>
				</form>
                <!--start pagation-->
            <nav aria-label="...">
  <ul class="pager">
    <li class="previous" "><a href="drop.php" style="background-color: rgb(187,59,59); color:white;"><span aria-hidden="true" >&larr;</span> Change data </a></li>
  </ul>
</nav>
<!--end pagation-->
			</div>
		</div>
	</div>
</div>
 </section>


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


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>