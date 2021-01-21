<?php
include 'connection.php';
if(isset($_POST['submit'])){
	//echo"Course Apply Submit";
	$success="";
	$error="";
	if(!empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['birthdate']) &&  !empty($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['message'])){
	 	$name = $_POST['name'];
	 	$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$birthdate = $_POST['birthdate'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
	 	$msg = $_POST['message'];

		$course_in = "INSERT INTO app_course (name, email, mobile_no, date, gender, address, message) VALUES ('$name', '$email', $mobile, '$birthdate', '$gender', '$address', '$msg')";
		
		if(mysqli_query($conn, $course_in)){
			$success = "Form Submitted Successfully.";
		} else{
			$error = "ERROR: Form Submission Failed. Please Try Again.";
		}
				   
	}else{
		$error = "ERROR: Please Fill All the Fields.";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Apply</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link  rel="stylesheet" href="css/menu.css" type="text/css" />

	<link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">

    </head>
</head>
<body class="headline">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">

            <ul id="nav">
                <li><a href="index.php" ><img src="img/logo.webp" alt="logo" style="height:35px;"></a></li>
                <li><a class="hsubs" href="index.php">Home</a></li> 
                <li><a class="hsubs" href="index.php">News</a></li>
                <li><a class="hsubs" href="#testimornial-area">Courses</a></li>
				<li class="active"><a class="hsubs" href="courseapply.php" >Apply Courses</a></li>
				<li><a class="hsubs" href="#aboutus">About Us</a></li>
                <li><a class="hsubs" href="#section5">Contact Us</a></li></li>
				<div id="lavalamp"></div>
				
            </ul>

        </div>
	</nav>    

			
				<div id="section4">
					<!-- Start Contact Area -->
					<section id="contact-area" class="contact-section">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 text-center inner">
									<div class="contact-content">
										<h1>Application form</h1>
										<div class="row">                            
											<div class="col-sm-12">
												<p>If you willing to join with us please fill this form and send to us </p>                           
											</div>
										</div>
										<?php
											if(!empty($success)){
											?>
												<div class="row">                            
													<div class="col-sm-12">
														<p style="color:green;"><?=$success;?></p>
													</div>
												</div>
											<?php
											}
											if(!empty($error)){	
											?>
												<div class="row">                            
													<div class="col-sm-12">
														<p style="color:red;"><?=$error;?></p>
													</div>
												</div>
										<?php } ?>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<form action=" " method="post" class="contact-form">
											<div class="col-sm-6 contact-form-left">
												<div class="form-group">
													<input name="name" type="text" class="form-control" id="name" placeholder="Name">
													<input type="email" name="email" class="form-control" id="mail" placeholder="Email">
													<input name="mobile" type="number" class="form-control" id="mobile" placeholder="Mobile No">
													<input name="birthdate" type="date" class="form-control" id="birthdate">
													<select name="gender" id="gender" class="form-control">
														<option value="male">Male</option>
														<option value="female">Female</option>
													</select><br>
													<textarea name="address" rows="4" class="form-control" id="address" placeholder="Address"></textarea>
													
												</div>
											</div>
											<div class="col-sm-6 contact-form-right">
												<div class="form-group">
													<textarea name="message" rows="6" class="form-control" id="comment" placeholder="Your message here..."></textarea>
													<button type="submit" name="submit" class="btn btn-default">Send</button>
												</div>
											</div>                        
										</form>    
									</div>                
								</div>
							</div>
						</section>
						<!-- End Contact Area -->
					</div>
					

					<!-- Start Footer Area -->
					<div id="section5">
						<footer id="footer-area">
								<div class="container">
									<div class="row mb-5">
									  <div class="col-md-6 col-lg-3">
										<div class="ftco-footer-widget mb-5">
											<h2 class="h2my">Have Questions?</h2>
											<div class="block-23 mb-3">
											  <ul>
												<li><span class="icon icon-map-marker"></span><span class="text">Glenn House, Houston Park, Montford Street, Manchester, M50 2RP, United Kingdom</span></li>
												<li><span class="icon icon-phone"></span><span class="text">+44 (0) 711834260</span></li>
												<li><span class="icon icon-envelope"></span><span class="text">info@oneduorg.com</span></li>
											  </ul>
											</div>
										</div>
									  </div>
	
									  <div class="col-md-6 col-lg-3">
										<div class="ftco-footer-widget mb-5 ml-md-4">
										  <h2 class="h2my">Links</h2>
										  <ul class="list-unstyled">
											<li><a href=""><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
											<li><a href=""><span class="ion-ios-arrow-round-forward mr-2"></span>News</a></li>
											<li><a href=""><span class="ion-ios-arrow-round-forward mr-2"></span>Courses</a></li>
											<li><a href=""><span class="ion-ios-arrow-round-forward mr-2"></span>About Us</a></li>
											
										  </ul>
										</div>
									  </div>
									  <div class="col-md-6 col-lg-3">
										<div class="ftco-footer-widget mb-5">
											<h2 class="h2my">Subscribe Us!</h2>
										  <form action="#" class="subscribe-form">
											<div class="form-group">
											  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
											  <input type="submit" value="Subscribe" class="form-control submit px-3">
											</div>
										  </form>
										</div>
									  
									  </div>
									</div>
									<div class="row">
									  <div class="col-md-12 text-center">
							
										<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved onEdu.org | Registered in the UK as company</p>
							  <p>number 11778318</p>
									  </div>
									</div>
								  </div>
							</footer>
						</div>
							<!-- End Footer Area -->
	
							<script src="js/jquery-1.11.2.min.js"></script>
							<script src="js/jquery.scrollUp.min.js"></script> <!-- https://github.com/markgoodyear/scrollup -->
							<script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
							<script src="js/parallax.js-1.3.1/parallax.js"></script> <!-- http://pixelcog.github.io/parallax.js/ -->
	
							<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
							  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
							<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
							<!-- AniJS core library -->
	  <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script> 
	  
	  <!-- Include to use $addClass, $toggleClass or $removeClass -->
	  <script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>
		<!-- Include scrollReveal -->
		<script src="https://unpkg.com/scrollreveal@4"></script>
		<script>
		  ScrollReveal().reveal('.headline');
	  </script>
	
							  
	<script>
	
		// HTML document is loaded. DOM is ready.
		$(function() {  
	
		// Parallax
			// $('.intro-section').parallax({
			// 	imageSrc: 'img/bg-1.jpg',
			// 	speed: 0.2
			// });
	
			$('.services-section').parallax({
				imageSrc: 'img/bg-2.jpg',
				speed: 0.2
			});
			$('.contact-section').parallax({
				imageSrc: 'img/bg-3.jpg',
				speed: 0.2
			});    
	
			// jQuery Scroll Up / Back To Top Image
			$.scrollUp({
					scrollName: 'scrollUp',      // Element ID
					scrollDistance: 300,         // Distance from top/bottom before showing element (px)
					scrollFrom: 'top',           // 'top' or 'bottom'
					scrollSpeed: 1000,            // Speed back to top (ms)
					easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
					animation: 'fade',           // Fade, slide, none
					animationSpeed: 300,         // Animation speed (ms)		        
					scrollText: '', // Text for element, can contain HTML		        
					scrollImg: true            // Set true to use image		        
				});
	
			// ScrollUp Placement
			$( window ).on( 'scroll', function() {
	
				// If the height of the document less the height of the document is the same as the
				// distance the window has scrolled from the top...
				if ( $( document ).height() - $( window ).height() === $( window ).scrollTop() ) {
	
					// Adjust the scrollUp image so that it's a few pixels above the footer
					$('#scrollUp').css( 'bottom', '80px' );
	
				} else {      
					// Otherwise, leave set it to its default value.
					$('#scrollUp').css( 'bottom', '30px' );        
				}
			});
	
			$('.single-page-nav').singlePageNav({
				offset: $('.single-page-nav').outerHeight(),
				speed: 1500,
				filter: ':not(.external)',
				updateHash: true
			});
	
			$('.navbar-toggle').click(function(){
				$('.single-page-nav').toggleClass('show');
			});
	
			$('.single-page-nav a').click(function(){
				$('.single-page-nav').removeClass('show');
			});
			
		});
	</script>
	</body>
	</html>