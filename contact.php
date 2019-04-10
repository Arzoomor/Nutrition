<?php
$page_title = 'Welcome to this Site!';
include('includes/header.html');
?>


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb ">
		<div class="container ">
			<div class="breadcrumb-banner color:black ">
				<div class="col-first ">
					<h1>Contact Us</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area ">
			<div class="row breadcrumb-banner">
				<div class="col-lg-3">
				<div class="col-md-6">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>Conestoga, Kitchener</h6>
							<p> 105 Kennedy Rd S Unit 11, Brampton, ON L6W 1M6</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">+1 (647) 863 2630</a></h6>
							<p>Mon to Thu 4am to 9pm</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">support@nutrition.com</a></h6>
							<p>Send us your query anytime!</p>
						</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">Name:
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
							<div class="form-group">Email:
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">Subject
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
							</div>
						
							<div class="form-group">Comment
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-align:left">
							<button type="submit" value="submit" class="primary-btn">Contact US</button>
						</div>
						

					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

	
<?php
include('includes/footer.html');
?>
