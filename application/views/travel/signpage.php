		<!-- sign-block
			================================================== -->
		<section class="sign">
			<div class="sign__area">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-sign-tab" data-toggle="tab" href="#nav-sign" role="tab" aria-controls="nav-sign" aria-selected="true">Sign in</a>
						<a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Register</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">

						<!-- sign-form-module -->
						<form class="sign-form">
							<label class="sign-form__label" for="username">
								Email address or Username:
							</label>
							<input class="sign-form__input-text" type="text" name="username" id="username" placeholder="Email or Username" />
							<label class="sign-form__label" for="password">
								Password:
							</label>
							<input class="sign-form__input-text" type="password" name="password" id="password" placeholder="Password" />
							<div class="sign-form__checkbox">
								<input class="sign-form__input-checkbox" type="checkbox" name="rememb-check" id="rememb-check"/>
								<span class="sign-form__checkbox-style"></span>
								<span class="sign-form__checkbox-text">Remember me</span>
							</div>
							<a class="sign-form__forget-link" href="#">Forget password?</a>

							<button  class="sign-form__submit" id="submit-loggin" type="submit">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
								Login
							</button>
							<p class="sign-form__text">
								or Login With
							</p>
							<ul class="sign-form__social">
								<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</form>

						<!-- End sign-form-module -->

					</div>
					<div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">


						<!-- sign-form-module -->
						<form class="sign-form">
							<label class="sign-form__label" for="email">
								Email address:
							</label>
							<input class="sign-form__input-text" type="text" name="email" id="email" placeholder="Enter your email" />
							<label class="sign-form__label" for="username2">
								Username:
							</label>
							<input class="sign-form__input-text" type="text" name="username2" id="username2" placeholder="Enter your name" />
							<label class="sign-form__label" for="password2">
								Password:
							</label>
							<input class="sign-form__input-text" type="password" name="password2" id="password2" placeholder="Password" />
							<label class="sign-form__label" for="con-password2">
								Confirm Password:
							</label>
							<input class="sign-form__input-text" type="password" name="con-password2" id="con-password2" placeholder="Confirm Password" />
							<div class="sign-form__checkbox">
								<input class="sign-form__input-checkbox" type="checkbox" name="rememb-check2" id="rememb-check2"/>
								<span class="sign-form__checkbox-style"></span>
								<span class="sign-form__checkbox-text">I've read and accept terms & conditions</span>
							</div>

							<button  class="sign-form__submit" type="submit" id="submit_signup">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
								Sign Up
							</button>
							<p class="sign-form__text">
								or Sign Up With
							</p>
							<ul class="sign-form__social">
								<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</form>

						<!-- End sign-form-module -->
					</div>
				</div>
			</div>
			<ul class="sign__slideshow">
				<li><span>Image 01</span></li>
				<li><span>Image 02</span></li>
				<li><span>Image 03</span></li>
			</ul>
		</section>
		<!-- End sign-block -->

	</div>
	<!-- End Container -->
	
	<script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.migrate.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI"></script>
	<!--build:js js/triptip-plugins.min.js -->
	<script src="<?php echo base_url() ?>/assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/select2.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.imagesloaded.min.js"></script>
  	<script src="<?php echo base_url() ?>/assets/js/jquery.isotope.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/retina-1.1.0.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.appear.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/infobox.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/markerclusterer.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/maps.js"></script>
	<!-- endbuild -->
	<script src="<?php echo base_url() ?>/assets/js/popper.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.countTo.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/script.js"></script>
	
</body>
</html>