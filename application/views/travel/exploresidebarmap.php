		<!-- explore-module
			================================================== -->
		<section class="explore">
			<div class="explore__side-content">

				<div class="explore__filter explore__filter-side">
					<form class="explore__form">
						<h2 class="explore__filter-title">
							<span>Results For:</span> Trending Listings
						</h2>

						<input class="explore__form-input" type="text" name="search-ar" id="search-ar" placeholder="Looking for?" />

						<div class="row">
							<div class="col-sm-6">
								<select class="explore__form-input js-example-basic-multiple">
									<option>Location? </option>
									<option>New York</option>
									<option>California</option>
									<option>Washington</option>
									<option>New Jersey</option>
									<option>Miami</option>
									<option>San Francisco</option>
									<option>Boston</option>
									<option>Pensilvania</option>
									<option>Other</option>
								</select>
							</div>
							<div class="col-sm-6">
								<select class="explore__form-input js-example-basic-multiple">
									<option>Categories: </option>
									<option>Art's</option>
									<option>Health</option>
									<option>Hotels</option>
									<option>Real Estate</option>
									<option>Rentals</option>
									<option>Restaurant</option>
									<option>Shopping</option>
									<option>Travel</option>
									<option>Vacation</option>
								</select>
							</div>
						</div>
						<h2 class="explore__form-desc">
							Advanced Search
							<a href="#" class="advanced-toggle">
								more 
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
						</h2>
						<div class="explore__form-advanced">
							<span>Price Range:</span>
							<ul class="explore__form-price-list">
								<li><a href="#">$</a></li>
								<li><a href="#">$$</a></li>
								<li><a href="#" class="active">$$$</a></li>
								<li><a href="#">$$$$</a></li>
							</ul>
							<ul class="explore__form-checkbox-list explore__form-checkbox-list-side">
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="open-check" id="open-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">Open now</span>
								</li>
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="child-check" id="child-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">Child friendly</span>
								</li>
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="near-me-check" id="near-me-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">Near me</span>
								</li>
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="24-check" id="24-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">24hours</span>
								</li>
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="free-parking-check" id="free-parking-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">Free Parking</span>
								</li>
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="pet-check" id="pet-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">Pet Friendly</span>
								</li>
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="smooking-check" id="smooking-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">Smoking allowed</span>
								</li>
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="wifi-check" id="wifi-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">Wifi</span>
								</li>
								<li>
									<input class="explore__input-checkbox" type="checkbox" name="credit-card-check" id="credit-card-check"/>
									<span class="explore__checkbox-style"></span>
									<span class="explore__checkbox-text">Accepts credit card</span>
								</li>
							</ul>
						</div>
					</form>
				</div>
				<div class="explore__box explore__box-side">

					<div class="explore__wrap iso-call">

						<div class="item">

							<!-- place-post module -->
							<div class="place-post">
								<div class="place-post__gal-box">
									<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/1.jpg" alt="place-image">
									<span class="place-post__rating">9.3</span>
									<a class="place-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">Open</span> until 8:00 PM
									</p>
									<h2 class="place-post__title">
										<a href="<?php echo base_url(); ?>listingdetailarge">Fifteen Restaurant & Cheese bar</a>
									</h2>
									<p class="place-post__description">
										Restaurant
										<span>
											<i class="fa fa-usd red-col" aria-hidden="true"></i>
											<i class="fa fa-usd red-col" aria-hidden="true"></i>
											<i class="fa fa-usd" aria-hidden="true"></i>
											<i class="fa fa-usd" aria-hidden="true"></i>
										</span>
										<span class="place-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											54 Reviews
										</span>
									</p>
									<p class="place-post__address">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										1149 3rd St (Wilshire), Santa Monica
									</p>
								</div>
							</div>
							<!-- end place-post module -->
							
						</div>	

						<div class="item">

							<!-- place-post module -->
							<div class="place-post">
								<div class="place-post__gal-box">
									<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/2.jpg" alt="place-image">
									<span class="place-post__rating">9.0</span>
									<a class="place-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="closed">Closed</span> until 11:00 AM
									</p>
									<h2 class="place-post__title">
										<a href="<?php echo base_url(); ?>listingdetailarge">Frankies 457 Spuntino</a>
									</h2>
									<p class="place-post__description">
										Cafe
										<span>
											<i class="fa fa-usd red-col" aria-hidden="true"></i>
											<i class="fa fa-usd red-col" aria-hidden="true"></i>
											<i class="fa fa-usd red-col" aria-hidden="true"></i>
											<i class="fa fa-usd" aria-hidden="true"></i>
										</span>
										<span class="place-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											23 Reviews
										</span>
									</p>
									<p class="place-post__address">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										457 Court St, Brooklyn
									</p>
								</div>
							</div>
							<!-- end place-post module -->
							
						</div>

					</div>
					<div class="center-button">
						<a class="btn-default btn-default-red load-post-container" 
							data-load="load-container.html"  
							data-number="2" 
							href="#">
							<i class="fa fa-refresh"></i>
							Load More Listing
						</a>
					</div>


				</div>
			</div>

			<div class="explore__map-side">
				<!-- map block
				================================================== -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15776.338957195008!2d115.2337831!3d-8.6834917!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad78f1ff66b638d2!2sSMK%20TI%20Bali%20Global%20Denpasar!5e0!3m2!1sid!2sid!4v1633671405051!5m2!1sid!2sid" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<!-- End map block -->
			</div>	

		</section>
		<!-- End explore-module -->

	</div>
	<!-- End Container -->
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.migrate.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI"></script>
	<!--build:js js/triptip-plugins.min.js -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.imagesloaded.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/retina-1.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/infobox.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/markerclusterer.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/maps.js"></script>
	<!-- endbuild -->
	<script src="<?php echo base_url(); ?>assets/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
	
</body>
</html>