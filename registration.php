<?php
SESSION_start();
include('connection.php');
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$status=$_SESSION['status'];
$sql="select * from tbl_login where username='$username' && password='$password' ";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==1 && $status=="admin")
{
	$nm=$_SESSION['username'];
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>CHIPPY</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	

	<header class="header trans_200">
		
		<!-- Top Bar -->
		<div class="top_bar" style="background-color:#d82a4e;">
			<div class="container"style="background-color:#d82a4e;" >
				<div class="row" style="background-color:#d82a4e;">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start"style="background-color:#d82a4e;">
						</div>
                    </div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
<p><font color="#d82a4e">
<?php
//echo "Welcome ", $nm , " to Our Dream ";
?>
</font></p>
                             <div class="top_bar_item" style="color:white;">Welocome To Our Family</div>
							
								<ul>

                                    <li> &nbsp </li>
								    <li><a href="health.php">Health Insurance</a></li>
                                    <li><a href="life.php">Life Insurance</a></li>
                                    <li><a href="vehicle.php">Vehicle Insurance</a></li>
                                    <li><a href="s.php">Register</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-column align-items-start justify-content-center">
									<div class="logo_line"></div>
									<div class="logo d-flex flex-row align-items-center justify-content-center">
										<div class="logo_text" style="color:#d82a4e;">Safeguard<span>4U</span></div>
										<div class="logo_box">+</div>
									</div>
									<div class="logo_sub">Insurance ManagementSystem</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</header>

	
	
	<!-- Home -->

	<div class="home">
		
		     <!DOCTYPE HTML>
<html>
<head>
<title>Registration Form</title>
<!-- Meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta tags -->
<!-- font-awesome-icons -->
<link href="css2/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<!-- Stylesheet -->
<link href="css2/style.css" rel='stylesheet' type='text/css' />
<!-- //Stylesheet -->
<!--fonts--> 
<link href="//fonts2.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts2.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
<!--//fonts--> 
</head>
<body style="background-color:#d82a4e;">
<div height="400px" style="background-color:#d82a4e;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp <a href="service.php">Service</a>
&nbsp <a href="registration.php">Register</a>
<a href="contact.php">Contact</a>
</div>
<!--background-->
<h1> Registration Form</h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Register Now</h2>
						<div class="book-form agileits-login" >
						
							<form action="check.php" method="post" >
								<div class="agileits_reservation_grid">
								<div class="phone_email">
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="username" placeholder="Enter Your name" required="" pattern="[A-Za-z]+">
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="city" placeholder="City" required="" pattern="[A-Za-z]+">
									</div>
								</div>
								
								<div class="phone_email">
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="phone" placeholder="Phone number" required="" pattern="[7-9]{1}[0-9]{9}">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="text" name="address" placeholder="Address" required="" pattern="[A-Za-z]+">
									</div>
								</div>
								
								<div class="phone_email">
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="aphone" placeholder="Alternative number" required="" pattern="[7-9]{1}[0-9]{9}">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="text" name="place" placeholder="Place" required="" pattern="[A-Za-z]+">
									</div>
								</div>
							    
								
								
								<div class="span1_of_1">
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-users" aria-hidden="true"></i>
											<select id="country" onchange="change_country(this.value)" class="frm-field required" name="gender">
												<option>gender</option>
												<option>Male</option>
												<option>Female</option>         
												
											</select>
										</div>	
								</div>
								<div class="span1_of_1 phone_email1">
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-h-square" aria-hidden="true"></i>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required" name="district">
												<option>District</option>
												<option>Alapuzha</option>
												<option>Idukki </option>         
												<option>Kottayam</option>
												<option>Ernakulam</option>
												<option>Kannur </option>         
												<option>Pathinamthitta</option>
												<option>Kasargodu</option>
												<option>Kollam </option>         
												<option>Kozhikode</option>
												<option>Malapuram </option>         
												<option>palakkadu</option>
												<option>Vayanad</option>
												<option>Thiruvanthpuram</option>         
												<option>Thrissur</option>
							
											</select>
										</div>	
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="phone_email">
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="email" placeholder="Email Id" required="">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="text" name="cemail" placeholder="Conform EmailId" required="">
									</div>
								</div>
								
								
                               <div class="phone_email">
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="password" placeholder="Password" required="">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="text" name="cpassword" placeholder="Conform Password" required="">
									</div>
								</div>
															
								<input type="submit" value="Book Now">
								<div class="clear"></div>
							</form>
						</div>

		</div>
   </div>
  <!--copyright-->
	<div class="copy w3ls" style="background-color:#d82a4e;">
		<p>&copy; 2018 Resort Booking Form . All Rights Reserved  | Design by CHIPPY </p>
	</div>
<!--//copyright-->
		<script type="text/javascript" src="js2/jquery-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css2/jquery-ui.css" />
				<script src="js2/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

     </body>
      </html>
	</div>

	

	


	
	<!-- Footer -->
       <footer class="footer">
		<div class="footer_container" style="background-color:#d82a4e;">
			<div class="container" style="background-color:#d82a4e;">
				<div class="row" >
					
					<!-- Footer - About -->
					<div class="col-lg-4 footer_col" style="background-color:#d82a4e;">
						<div class="footer_about" >
							<div class="footer_logo_container" >
								<a href="#" class="d-flex flex-column align-items-center justify-content-center">
									<div class="logo_content">
										<div class="logo d-flex flex-row align-items-center justify-content-center">
											<div class="logo_text" style="color:#d82a4e;">Safeguard<span>4U</span></div>
											<div class="logo_box">+</div>
										</div>
										<div class="logo_sub">INSURANCE MANAGEMENT SYSTEM</div>
									</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum.</p>
							</div>
							<ul class="footer_about_list">
								<li><div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+45 677 8993000 223</span></li>
								<li><div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div><span>office@template.com</span></li>
								<li><div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
							</ul>
						</div>
					</div>


					<!-- Footer - Links -->
					<div class="col-lg-4 footer_col">
						<div class="footer_links footer_column">
							<div class="footer_title">Useful Links</div>
							<ul>
								<li><a href="#">Testimonials</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Apply for a Job</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Our Partners</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Free services</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Our Screening Program</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer - News -->
					<div class="col-lg-4 footer_col">
						<div class="footer_news footer_column">
							<div class="footer_title">Useful Links</div>
							<ul>
								<li>
									<div class="footer_news_title"><a href="news.html">Aliquam ac eleifend metus</a></div>
									<div class="footer_news_date">March 10, 2018</div>
								</li>
								<li>
									<div class="footer_news_title"><a href="news.html">Donec in libero sit amet mi vulputate</a></div>
									<div class="footer_news_date">March 10, 2018</div>
								</li>
								<li>
									<div class="footer_news_title"><a href="news.html">Aliquam ac eleifend metus</a></div>
									<div class="footer_news_date">March 10, 2018</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright" style="background-color:white;">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
							<div class="cr" style="color:#d82a4e;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by CHIPPY
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="footer_social ml-lg-auto">
								<ul>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>


<?php
}

else
{
header("location:../safeguard/login.php");
}
?>                     

</body>
</html>






