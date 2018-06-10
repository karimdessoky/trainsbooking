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
	$route_id = $_POST["route_id"];
	$train_id = $_POST["train_id"];
	$num_seats = $_POST["num_seats"];
	$Available_seats = $_POST["available_seats"];
	$Booked_seats = $_POST["booked_seats"];
	if($Available_seats < $num_seats){
		header("location: reserve_error.php");
		return;
	}
	$Booked_seats += $num_seats;
	$do= "UPDATE trains SET Booked_seats = ".$Booked_seats." WHERE Train_id = ".$train_id."";
	$flag =mysqli_query($con,$do);
?>
  
  
  <style>
.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}
</style>
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
        <li class="active"><a href="drop.php"> Book another ticket</a></li>
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
	
    <div class="container">
		<div class="row">
			<div class="col-md-4" style=" float: none; margin: 0 auto">
			<br><br><br><br>
			<?php
			
			include "phpqrcode/qrlib.php";
			include('connect.php');
							
				if ($flag)
				{
					echo "Done Reserving ".$num_seats." Ticket(s)  <br>";
				}
				
				for($i=1; $i<=$num_seats; $i++){
					$ticked_id = $train_id.$route_id.$Booked_seats.$i;
					$seat_num = $train_id.$i;
					$wagoon = $route_id;
					echo "Ticket ID: ".$ticked_id."<br> ";
					echo "Seat Number: ".$seat_num."<br> ";
					echo "Wagoon Number: ".$wagoon."<br> ";
					echo "Train ID: ".$train_id."<br> ";
					echo "Route ID: ".$route_id."<br> ";
					QRcode::png("Ticket ID:".$ticked_id." Train id:".$train_id."  Seat Number:".$seat_num." Wagoon Number:".$wagoon , "phpqrcode/images/".$ticked_id.".png");
					echo "<img src='phpqrcode/images/".$ticked_id.".png' width='90' /> <br>";
					echo "<br><br><br> ";
					
					$SQL = "INSERT INTO tickets (id,train_id,route_id,seat_number,wagoon_number)
					 values ('$ticked_id','$train_id','$route_id','$seat_num','$wagoon')";
					$flag = mysqli_query($con, $SQL);
					if(!$flag){
						echo "error: ".mysqli_error($con);
					}
				}
			?>
			</div>
			<button class="button" onclick="myFunction()" style="color:white; background-color:red; ">Print this page</button>

		</div>
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







<script>
function myFunction() {
    window.print();
}
</script>




<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>