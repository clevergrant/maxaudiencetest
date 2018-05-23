<?php get_header(); ?>

	
	<div class="container-fluid banner-slideshow-container">
		
		<div class="row">

			<div class="banner-slideshow">
				<div class="slide-1"></div>
				<div class="slide-2"></div>
				<div class="slide-3"></div>
				<div class="slide-4"></div>
				<div class="slide-5"></div>
				<div class="slide-6"></div>
			</div>

		</div> <!-- /.row -->

	</div>

	<div class="container banner-content-container">
		<div class="banner-content">
			<h1>ACHIEVE YOUR <br/> HEALTH &amp; <br/> FITNESS GOALS!</h1>
			<button class="btn btn-large btn-slideshow">I'M A <br/> MEMBER</button>
			<button class="btn btn-large btn-slideshow">NOT A <br/> MEMBER</button>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row justify-content-center promotion-banner">
			<div class="col-3">
				<h2>Free 30 Day Trial Pass!</h2>
				<img width="75" src="<?php echo get_template_directory_uri() . '/images/logo/logo-mark.png'; ?>" alt="Get Fitness">
				<button class="btn btn-lg btn-promo">FREE TRIAL</button>
			</div>
			<div class="col-3">
				<h2>Online Specials - Join Now!</h2>
				<img width="75" src="<?php echo get_template_directory_uri() . '/images/logo/logo-mark.png'; ?>" alt="Get Fitness">
				<button class="btn btn-lg btn-promo">JOIN NOW</button>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row justify-content-center learn-more">
			<div class="col-4 square-1"></div>
			<div class="col-4">
				<img width="50" src="<?php echo get_template_directory_uri() . '/images/icons/fitness-classes.png'; ?>" alt="Get Fitness">
				<h3>Fitness Classes</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidedunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
				<button class="btn btn-learn-more">LEARN MORE</button>
			</div>
			<div class="col-4 square-3"></div>
			<div class="col-4">
				<img width="75" src="<?php echo get_template_directory_uri() . '/images/icons/club-amenities.png'; ?>" alt="Get Fitness">
				<h3>Club Amenities</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidedunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
				<button class="btn btn-learn-more">LEARN MORE</button>
			</div>
			<div class="col-4 square-5"></div>
			<div class="col-4">
				<img width="50" src="<?php echo get_template_directory_uri() . '/images/icons/personal-training.png'; ?>" alt="Get Fitness">
				<h3>Personal Training</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidedunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
				<button class="btn btn-learn-more">LEARN MORE</button>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row justify-content-center our-hours">
			<div class="col-auto">
				<br>
				<br>
				<img width="500" src="<?php echo get_template_directory_uri() . '/images/hours-couple.png'; ?>" alt="Get Fitness">
			</div>
			<div class="col-auto hours-column" >
				<br><br><br>
				<h1>
					<img width="50" src="<?php echo get_template_directory_uri() . '/images/icons/hours.png'; ?>" alt="Get Fitness">
					OUR HOURS
				</h1>
				<table>
					<body>
						<tr>
							<td style="padding: 1rem 5rem 1rem 1rem">Mon-Thurs</td>
							<td>4:30am - Midnight</td>
						</tr>
						<tr>
							<td style="padding: 1rem 5rem 1rem 1rem">Fri</td>
							<td>4:30am - 9:00pm</td>
						</tr>
						<tr>
							<td style="padding: 1rem 5rem 1rem 1rem">Sat &amp; Sun</td>
							<td>7:00am - 7:00pm</td>
						</tr>
					</body>
				</table>

				<div class="join-now-button">
					<p style="display: inline">Not a member yet? Sign up now!</p>
					<button class="btn btn-learn-more" style="margin-left: 1rem; min-width: 10rem;">JOIN NOW</button>
				</div>

				<div class="signup-form">
					<div class="row">
						<div class="col form-title">
							<img src="<?php echo get_template_directory_uri() . '/images/logo/logo-mark.png'; ?>" alt="Get Fitness">
							<h1>Get a Free 30 Day Trial Pass</h1>
						</div>
					</div>

					<form class="form-getfitness">
						<div class="form-row">
							<div class="col-8">
								<div class="form-row">
									<div class="col-6">
										<input type="text" class="form-control" placeholder="First name"/>
									</div>
									<div class="col-6">
										<input type="text" class="form-control" placeholder="Last name"/>
									</div>
								</div>
								<br>
								<div class="form-row">
									<div class="col">
										<input type="email" class="form-control" placeholder="Email address"/>
									</div>
								</div>
							</div>
							<div class="col-4 d-flex flex-column justify-content-center align-items-center">
								<input type="submit" class="btn btn-trial-pass" value="SEND"/>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

	<div class="container-fluid contact-us">
		<h1>
			<img width="100" src="<?php echo get_template_directory_uri() . '/images/logo/logo-mark.png'; ?>" alt="Get Fitness">
			CONTACT US
		</h1>
		<div class="row justify-content-center">
			<div class="col-4 d-flex flex-column align-items-center">
				<form class="contact-form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="First name"/>
						<input type="text" class="form-control" placeholder="Last name"/>
						<input type="email" class="form-control" placeholder="Email address"/>
						<input type="tel" class="form-control" placeholder="Phone (Optional)"/>
						<input type="submit" class="btn btn-trial-pass" value="SUBMIT">
					</div>
				</form>
			</div>
			<div class="col-4 map-area">
				<center>
					<img width="500" src="<?php echo get_template_directory_uri() . '/images/map.jpg'; ?>" alt="Get Fitness">
				</center>
				<div class="row justify-content-center">
					<div class="col-2 d-flex flex-column justify-content-center align-items-center">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/pin.png'; ?>" alt="Get Fitness">
					</div>
					<div class="col-6">
						<p>
							138745 Walsingham Rd.
						</p>
						<p>
							Largo, FL 33774
						</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-2 d-flex flex-column justify-content-center align-items-center">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/phone.png'; ?>" alt="Get Fitness">
					</div>
					<div class="col-6">
						<p>
							(727) 595-4505
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>