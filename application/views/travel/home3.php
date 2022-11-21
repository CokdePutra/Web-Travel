		<!-- discover-module section
			================================================== -->
		<section class="discover discover-favourite">
			<div class="container">

				<p class="discover__description">
					Find out perfect place to hangout in your city.
				</p>

				<h1 class="discover__title places-tab">
					Explore our favorite places.
				</h1>

				<form class="discover__form discover__form-favourite">
					<input class="discover__form-input discover__form-input-favourite" type="text" name="place-event" id="place-event" placeholder="What are you looking for?" />
					<select class="discover__form-input discover__form-input-favourite js-example-basic-multiple">
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
					<select class="discover__form-input discover__form-input-favourite js-example-basic-multiple">
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
					<button class="btn-default btn-default-red" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
				</form>

				<div class="discover__box">

					<!-- services-post3 module -->
					<a href="#" class="services-post3">
						<div class="services-post3__content">
							<i class="la la-futbol-o" aria-hidden="true"></i>
							<h2 class="services-post3__title">
								Sport
							</h2>
						</div>
					</a>
					<!-- end services-post3 module -->

					<!-- services-post3 module -->
					<a href="#" class="services-post3">
						<div class="services-post3__content">
							<i class="la la-hotel" aria-hidden="true"></i>
							<h2 class="services-post3__title">
								Hotel
							</h2>
						</div>
					</a>
					<!-- end services-post3 module -->

					<!-- services-post3 module -->
					<a href="#" class="services-post3">
						<div class="services-post3__content">
							<i class="la la-cutlery" aria-hidden="true"></i>
							<h2 class="services-post3__title">
								Restaurant
							</h2>
						</div>
					</a>
					<!-- end services-post3 module -->

					<!-- services-post3 module -->
					<a href="#" class="services-post3">
						<div class="services-post3__content">
							<i class="la la-shopping-cart" aria-hidden="true"></i>
							<h2 class="services-post3__title">
								Shopping
							</h2>
						</div>
					</a>
					<!-- end services-post3 module -->

					<!-- services-post3 module -->
					<a href="#" class="services-post3">
						<div class="services-post3__content">
							<i class="la la-ticket" aria-hidden="true"></i>
							<h2 class="services-post3__title">
								Art&amp;Culture
							</h2>
						</div>
					</a>
					<!-- end services-post3 module -->

					<!-- services-post3 module -->
					<a href="#" class="services-post3">
						<div class="services-post3__content">
							<i class="la la-glass" aria-hidden="true"></i>
							<h2 class="services-post3__title">
								Nightlife
							</h2>
						</div>
					</a>
					<!-- end services-post3 module -->
				</div>
				
			</div>
		</section>
		<!-- End discover-module section -->

		<!-- tabs-block
			================================================== -->
		<section class="tabs-block">
			<div class="container">
				<div class="tabs-block__box">
					<ul class="tabs-block__list">
						<li class="tabs-block__list-item">
							<a class="active-list" href="#places-tab"><i class="la la-compass" aria-hidden="true"></i>Popular Places</a>
						</li>
						<li class="tabs-block__list-item">
							<a href="#events-tab"><i class="la la-calendar" aria-hidden="true"></i>Popular Events</a>
						</li>
					</ul>
					<div class="tabs-block__content">
						<div class="tabs-block__content-tab owl-wrapper active-tab" id="places-tab">
							<div class="owl-carousel" data-num="5">
							
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
												<a href="<?php echo base_url(); ?>listingdetaillarge">Fifteen Restaurant & Cheese bar</a>
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
												<a href="<?php echo base_url(); ?>listingdetaillarge">Frankies 457 Spuntino</a>
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
							
								<div class="item">

									<!-- place-post module -->
									<div class="place-post">
										<div class="place-post__gal-box">
											<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/3.jpg" alt="place-image">
											<span class="place-post__rating average-rat">8.5</span>
											<a class="place-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="place-post__content">
											<p class="place-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">Open</span> 24/7
											</p>
											<h2 class="place-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">Hotel Van Gogh</a>
											</h2>
											<p class="place-post__description">
												Hostel
												<span>
													<i class="fa fa-usd red-col" aria-hidden="true"></i>
													<i class="fa fa-usd red-col" aria-hidden="true"></i>
													<i class="fa fa-usd" aria-hidden="true"></i>
													<i class="fa fa-usd" aria-hidden="true"></i>
												</span>
												<span class="place-post__description-review">
													<i class="fa fa-comment-o" aria-hidden="true"></i>
													48 Reviews
												</span>
											</p>
											<p class="place-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												Van de Veldestraat 5, Amsterdam
											</p>
										</div>
									</div>
									<!-- end place-post module -->

								</div>
							
								<div class="item">

									<!-- place-post module -->
									<div class="place-post">
										<div class="place-post__gal-box">
											<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/4.jpg" alt="place-image">
											<span class="place-post__rating">9.1</span>
											<a class="place-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="place-post__content">
											<p class="place-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">Likely Open</span>
											</p>
											<h2 class="place-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">Caffè Pascucci</a>
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
													58 Reviews
												</span>
											</p>
											<p class="place-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												Piazza della Repubblica, Florence
											</p>
										</div>
									</div>
									<!-- end place-post module -->

								</div>
							
								<div class="item">

									<!-- place-post module -->
									<div class="place-post">
										<div class="place-post__gal-box">
											<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/5.jpg" alt="place-image">
											<span class="place-post__rating solid-rat">6.2</span>
											<a class="place-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="place-post__content">
											<p class="place-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">Open</span> 24/7
											</p>
											<h2 class="place-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">Beautiful City Hostel & Hotel</a>
											</h2>
											<p class="place-post__description">
												Hotel
												<span>
													<i class="fa fa-usd red-col" aria-hidden="true"></i>
													<i class="fa fa-usd red-col" aria-hidden="true"></i>
													<i class="fa fa-usd" aria-hidden="true"></i>
													<i class="fa fa-usd" aria-hidden="true"></i>
												</span>
												<span class="place-post__description-review">
													<i class="fa fa-comment-o" aria-hidden="true"></i>
													11 Reviews
												</span>
											</p>
											<p class="place-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												12 rue de l'atlas, Paris
											</p>
										</div>
									</div>
									<!-- end place-post module -->

								</div>
							
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
												<a href="<?php echo base_url(); ?>listingdetaillarge">Fifteen Restaurant & Cheese bar</a>
											</h2>
											<p class="place-post__description">
												Restaurant
												<span>
													<i class="fa fa-usd red-col" aria-hidden="true"></i>
													<i class="fa fa-usd red-col" aria-hidden="true"></i>
													<i class="fa fa-usd red-col" aria-hidden="true"></i>
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
								
							</div>

							<div class="center-button">
								<a class="text-btn" href="#">
									View All Places <span>(482)</span>
								</a>
							</div>
						</div>

						<div class="tabs-block__content-tab owl-wrapper" id="events-tab">
							<div class="owl-carousel" data-num="5">
							
								<div class="item">

									<!-- event-post module -->
									<div class="event-post">
										<div class="event-post__gal-box">
											<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/6.jpg" alt="place-image">
											<span class="event-post__date">04/10</span>
											<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="event-post__content">
											<p class="event-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">6:30 pm</span>
											</p>
											<h2 class="event-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">Fifteen Restaurant & Cheese</a>
											</h2>
											<p class="event-post__description">
												Music
												<span class="event-post__description-review">
													<i class="fa fa-comment-o" aria-hidden="true"></i>
													23 Reviews
												</span>
											</p>
											<p class="event-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												457 Court St, Brooklyn
											</p>
										</div>
									</div>
									<!-- end event-post module -->

								</div>
							
								<div class="item">

									<!-- event-post module -->
									<div class="event-post">
										<div class="event-post__gal-box">
											<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/7.jpg" alt="place-image">
											<span class="event-post__date">02/08</span>
											<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="event-post__content">
											<p class="event-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">2:00 pm</span>
											</p>
											<h2 class="event-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">Children World of Adventures Resort</a>
											</h2>
											<p class="event-post__description">
												Parks
												<span class="event-post__description-review">
													<i class="fa fa-comment-o" aria-hidden="true"></i>
													61 Reviews
												</span>
											</p>
											<p class="event-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												London, United Kingdom
											</p>
										</div>
									</div>
									<!-- end event-post module -->

								</div>
							
								<div class="item">

									<!-- event-post module -->
									<div class="event-post">
										<div class="event-post__gal-box">
											<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/8.jpg" alt="place-image">
											<span class="event-post__date">02/08</span>
											<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="event-post__content">
											<p class="event-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">4:00 pm</span>
											</p>
											<h2 class="event-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">Secret Food Tour</a>
											</h2>
											<p class="event-post__description">
												Tours
												<span class="event-post__description-review">
													<i class="fa fa-comment-o" aria-hidden="true"></i>
													2 Reviews
												</span>
											</p>
											<p class="event-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												Via Mozart 14, Milan
											</p>
										</div>
									</div>
									<!-- end event-post module -->

								</div>
							
								<div class="item">

									<!-- event-post module -->
									<div class="event-post">
										<div class="event-post__gal-box">
											<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/9.jpg" alt="place-image">
											<span class="event-post__date">02/08</span>
											<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="event-post__content">
											<p class="event-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">8:00 pm</span>
											</p>
											<h2 class="event-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">The Alternative Selection</a>
											</h2>
											<p class="event-post__description">
												Music
												<span class="event-post__description-review">
													<i class="fa fa-comment-o" aria-hidden="true"></i>
													11 Reviews
												</span>
											</p>
											<p class="event-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												Cockpit Theatre, London
											</p>
										</div>
									</div>
									<!-- end event-post module -->

								</div>
							
								<div class="item">

									<!-- event-post module -->
									<div class="event-post">
										<div class="event-post__gal-box">
											<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/10.jpg" alt="place-image">
											<span class="event-post__date">23/12</span>
											<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="event-post__content">
											<p class="event-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">3:00 pm</span>
											</p>
											<h2 class="event-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">Dresden Day Trip from Berlin</a>
											</h2>
											<p class="event-post__description">
												Tours
												<span class="event-post__description-review">
													<i class="fa fa-comment-o" aria-hidden="true"></i>
													61 Reviews
												</span>
											</p>
											<p class="event-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												Berlin, Germany 
											</p>
										</div>
									</div>
									<!-- end event-post module -->

								</div>
							
								<div class="item">

									<!-- event-post module -->
									<div class="event-post">
										<div class="event-post__gal-box">
											<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/6.jpg" alt="place-image">
											<span class="event-post__date">04/10</span>
											<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										</div>
										<div class="event-post__content">
											<p class="event-post__info">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<span class="open">6:30 pm</span>
											</p>
											<h2 class="event-post__title">
												<a href="<?php echo base_url(); ?>listingdetaillarge">Fifteen Restaurant & Cheese</a>
											</h2>
											<p class="event-post__description">
												Music
												<span class="event-post__description-review">
													<i class="fa fa-comment-o" aria-hidden="true"></i>
													23 Reviews
												</span>
											</p>
											<p class="event-post__address">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												457 Court St, Brooklyn
											</p>
										</div>
									</div>
									<!-- end event-post module -->

								</div>
								
							</div>
							<div class="center-button">
								<a class="text-btn" href="#">
									View All Events <span>(482)</span>
								</a>
							</div>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- End tabs-block section -->

		<!-- how-it-work-block
			================================================== -->
		<section class="how-it-work how-it-work-mapbg">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title">
						How It Works
					</h1>
					<p class="section-header__description">
						Explore some of the best tips from around the world.
					</p>
				</div>
				<!-- end section-header module -->

				<div class="how-it-work__box">
					<div class="row">

						<div class="col-lg-4 col-md-6">
							
							<!-- how-work-post module -->
							<div class="how-work-post">

								<span class="how-work-post__icon">
									<i class="la la-compass" aria-hidden="true"></i>
								</span>

								<h2 class="how-work-post__title">
									Explore The City
								</h2>

								<p class="how-work-post__description">
									Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. 
								</p>

							</div>
							<!-- end how-work-post module -->

						</div>

						<div class="col-lg-4 col-md-6">
							
							<!-- how-work-post module -->
							<div class="how-work-post">

								<span class="how-work-post__icon">
									<i class="la la-binoculars" aria-hidden="true"></i>
								</span>

								<h2 class="how-work-post__title">
									Find Interesting Place
								</h2>

								<p class="how-work-post__description">
									Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.
								</p>

							</div>
							<!-- end how-work-post module -->

						</div>

						<div class="col-lg-4 col-md-6">
							
							<!-- how-work-post module -->
							<div class="how-work-post">

								<span class="how-work-post__icon">
									<i class="la la-plus-circle" aria-hidden="true"></i>
								</span>

								<h2 class="how-work-post__title">
									Add Your Listing
								</h2>

								<p class="how-work-post__description">
									In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. 
								</p>

							</div>
							<!-- end how-work-post module -->

						</div>

					</div>
				</div>
				
			</div>
		</section>
		<!-- End how-it-work-block -->

		<!-- banner-block
			================================================== -->
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-8">

						<!-- section-header module -->
						<div class="section-header">
							<h1 class="section-header__title white-style">
								Join Our Amazing Community
							</h1>
							<p class="section-header__description white-style">
								Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euimdod tincidunt ut laoreet dolore magna aliquam erat. 
							</p>
						</div>
						<!-- end section-header module -->

					</div>
					<div class="col-md-4">
						<a class="btn-default" href="#">
							<i class="fa fa-check-circle-o" aria-hidden="true"></i>
							Register Now
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner-block -->

		<!-- top-experience-block
			================================================== -->
		<section class="top-experience top-experience-rated">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title">
						Top-rated Experiences
					</h1>
					<p class="section-header__description">
						Sed egestas, ante et vulputate volutpat, eros pede semper est
					</p>
				</div>
				<!-- end section-header module -->


				<div class="top-experience__box owl-wrapper">
					<div class="owl-carousel" data-num="3">
					
						<div class="item">

							<!-- place-gal module -->
							<div class="place-gal">
								<img class="place-gal__image" src="<?php echo base_url(); ?>assets/upload/top1.jpg" alt="place-image">
								<div class="place-gal__content">
									<h2 class="place-gal__title">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/upload/flag1.jpg" alt="">
											Malaysia
										</a>
									</h2>
									<ul class="place-gal__list">
										<li class="place-gal__list-item">
											<a href="#">5 Cities</a>
										</li>
										<li class="place-gal__list-item">
											<a href="#">255 Listing</a>
										</li>
									</ul>
									<a class="btn-default" href="#">
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										Explore
									</a>
								</div>
							</div>
							<!-- end place-gal module -->

						</div>
					
						<div class="item">

							<!-- place-gal module -->
							<div class="place-gal">
								<img class="place-gal__image" src="<?php echo base_url(); ?>assets/upload/top2.jpg" alt="place-image">
								<div class="place-gal__content">
									<h2 class="place-gal__title">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/upload/flag2.jpg" alt="">
											Italia
										</a>
									</h2>
									<ul class="place-gal__list">
										<li class="place-gal__list-item">
											<a href="#">8 Cities</a>
										</li>
										<li class="place-gal__list-item">
											<a href="#">749 Listing</a>
										</li>
									</ul>
									<a class="btn-default" href="#">
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										Explore
									</a>
								</div>
							</div>
							<!-- end place-gal module -->

						</div>
					
						<div class="item">

							<!-- place-gal module -->
							<div class="place-gal">
								<img class="place-gal__image" src="<?php echo base_url(); ?>assets/upload/top3.jpg" alt="place-image">
								<div class="place-gal__content">
									<h2 class="place-gal__title">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/upload/flag3.jpg" alt="">
											France
										</a>
									</h2>
									<ul class="place-gal__list">
										<li class="place-gal__list-item">
											<a href="#">12 Cities</a>
										</li>
										<li class="place-gal__list-item">
											<a href="#">1003 Listing</a>
										</li>
									</ul>
									<a class="btn-default" href="#">
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										Explore
									</a>
								</div>
							</div>
							<!-- end place-gal module -->

						</div>
					
						<div class="item">

							<!-- place-gal module -->
							<div class="place-gal">
								<img class="place-gal__image" src="<?php echo base_url(); ?>assets/upload/top4.jpg" alt="place-image">
								<div class="place-gal__content">
									<h2 class="place-gal__title">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/upload/flag4.jpg" alt="">
											United States
										</a>
									</h2>
									<ul class="place-gal__list">
										<li class="place-gal__list-item">
											<a href="#">4 Cities</a>
										</li>
										<li class="place-gal__list-item">
											<a href="#">603 Listing</a>
										</li>
									</ul>
									<a class="btn-default" href="#">
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										Explore
									</a>
								</div>
							</div>
							<!-- end place-gal module -->

						</div>
						
					</div>
				</div>

			</div>
		</section>
		<!-- End top-experience-block -->

		<!-- trending-events-block
			================================================== -->
		<section class="trending-events">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title">
						Most Visited Events Worldwide
					</h1>
					<p class="section-header__description">
						Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. 
					</p>
				</div>
				<!-- end section-header module -->


				<div class="trending-events__box owl-wrapper">
					<div class="owl-carousel" data-num="5">
					
						<div class="item">

							<!-- event-post module -->
							<div class="event-post">
								<div class="event-post__gal-box">
									<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/6.jpg" alt="place-image">
									<span class="event-post__date">04/10</span>
									<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="event-post__content">
									<p class="event-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">6:30 pm</span>
									</p>
									<h2 class="event-post__title">
										<a href="#">Fifteen Restaurant & Cheese</a>
									</h2>
									<p class="event-post__description">
										Music
										<span class="event-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											23 Reviews
										</span>
									</p>
									<p class="event-post__address">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										457 Court St, Brooklyn
									</p>
								</div>
							</div>
							<!-- end event-post module -->

						</div>
					
						<div class="item">

							<!-- event-post module -->
							<div class="event-post">
								<div class="event-post__gal-box">
									<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/7.jpg" alt="place-image">
									<span class="event-post__date">02/08</span>
									<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="event-post__content">
									<p class="event-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">2:00 pm</span>
									</p>
									<h2 class="event-post__title">
										<a href="#">Children World of Adventures Resort</a>
									</h2>
									<p class="event-post__description">
										Parks
										<span class="event-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											61 Reviews
										</span>
									</p>
									<p class="event-post__address">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										London, United Kingdom
									</p>
								</div>
							</div>
							<!-- end event-post module -->

						</div>
					
						<div class="item">

							<!-- event-post module -->
							<div class="event-post">
								<div class="event-post__gal-box">
									<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/8.jpg" alt="place-image">
									<span class="event-post__date">02/08</span>
									<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="event-post__content">
									<p class="event-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">4:00 pm</span>
									</p>
									<h2 class="event-post__title">
										<a href="#">Secret Food Tour</a>
									</h2>
									<p class="event-post__description">
										Tours
										<span class="event-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											2 Reviews
										</span>
									</p>
									<p class="event-post__address">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										Via Mozart 14, Milan
									</p>
								</div>
							</div>
							<!-- end event-post module -->

						</div>
					
						<div class="item">

							<!-- event-post module -->
							<div class="event-post">
								<div class="event-post__gal-box">
									<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/9.jpg" alt="place-image">
									<span class="event-post__date">02/08</span>
									<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="event-post__content">
									<p class="event-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">8:00 pm</span>
									</p>
									<h2 class="event-post__title">
										<a href="#">The Alternative Selection</a>
									</h2>
									<p class="event-post__description">
										Music
										<span class="event-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											11 Reviews
										</span>
									</p>
									<p class="event-post__address">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										Cockpit Theatre, London
									</p>
								</div>
							</div>
							<!-- end event-post module -->

						</div>
					
						<div class="item">

							<!-- event-post module -->
							<div class="event-post">
								<div class="event-post__gal-box">
									<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/10.jpg" alt="place-image">
									<span class="event-post__date">23/12</span>
									<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="event-post__content">
									<p class="event-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">3:00 pm</span>
									</p>
									<h2 class="event-post__title">
										<a href="#">Dresden Day Trip from Berlin</a>
									</h2>
									<p class="event-post__description">
										Tours
										<span class="event-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											61 Reviews
										</span>
									</p>
									<p class="event-post__address">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										Berlin, Germany 
									</p>
								</div>
							</div>
							<!-- end event-post module -->

						</div>
					
						<div class="item">

							<!-- event-post module -->
							<div class="event-post">
								<div class="event-post__gal-box">
									<img class="event-post__image" src="<?php echo base_url(); ?>assets/upload/6.jpg" alt="place-image">
									<span class="event-post__date">04/10</span>
									<a class="event-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="event-post__content">
									<p class="event-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">6:30 pm</span>
									</p>
									<h2 class="event-post__title">
										<a href="#">Fifteen Restaurant & Cheese</a>
									</h2>
									<p class="event-post__description">
										Music
										<span class="event-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											23 Reviews
										</span>
									</p>
									<p class="event-post__address">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										457 Court St, Brooklyn
									</p>
								</div>
							</div>
							<!-- end event-post module -->

						</div>
						
					</div>
				</div>
				<div class="center-button">
					<a class="text-btn" href="#">
						View All Events <span>(64)</span>
					</a>
				</div>
			</div>
		</section>
		<!-- End trending-events-block -->

		<!-- news-block
			================================================== -->
		<section class="news">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title">
						News & Tips
					</h1>
					<p class="section-header__description">
						Suspendisse urna nibh, viverra non.
					</p>
				</div>
				<!-- end section-header module -->

				<div class="news__box">
					<div class="row">

						<div class="col-lg-3 col-md-6">
							
							<!-- news-post module -->
							<div class="news-post">
								<div class="news-post__gal">
									<img src="<?php echo base_url(); ?>assets/upload/b1.jpg" alt="">
									<span class="news-post__date">
										2018/12/26
									</span>
								</div>
								<div class="news-post__content">
									<h2 class="news-post__title">
										<a href="<?php echo base_url(); ?>singlepost">The Top Restaurants in London</a>
									</h2>
									<ul class="news-post__tags">
										<li><a href="#">Lifestyle,</a></li>
										<li><a href="#">Restaurants,</a></li>
										<li><a href="#">City</a></li>
									</ul>
									<p class="news-post__description">
										Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci ... 
									</p>
									<a class="text-btn text-btn-grey" href="#">
										Continue Reading ...
									</a>
								</div>
							</div>
							<!-- end news-post module -->

						</div>

						<div class="col-lg-3 col-md-6">
							
							<!-- news-post module -->
							<div class="news-post">
								<div class="news-post__gal">
									<img src="<?php echo base_url(); ?>assets/upload/b2.jpg" alt="">
									<span class="news-post__date">
										2018/12/26
									</span>
								</div>
								<div class="news-post__content">
									<h2 class="news-post__title">
										<a href="<?php echo base_url(); ?>singlepost">Best Museum of The World</a>
									</h2>
									<ul class="news-post__tags">
										<li><a href="#">Journey,</a></li>
										<li><a href="#">Travel,</a></li>
										<li><a href="#">City</a></li>
									</ul>
									<p class="news-post__description">
										Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci ... 
									</p>
									<a class="text-btn text-btn-grey" href="#">
										Continue Reading ...
									</a>
								</div>
							</div>
							<!-- end news-post module -->

						</div>

						<div class="col-lg-3 col-md-6">
							
							<!-- news-post module -->
							<div class="news-post">
								<div class="news-post__gal">
									<img src="<?php echo base_url(); ?>assets/upload/b3.jpg" alt="">
									<span class="news-post__date">
										2018/12/26
									</span>
								</div>
								<div class="news-post__content">
									<h2 class="news-post__title">
										<a href="<?php echo base_url(); ?>singlepost">Handpicked places</a>
									</h2>
									<ul class="news-post__tags">
										<li><a href="#">Lifestyle,</a></li>
										<li><a href="#">City</a></li>
									</ul>
									<p class="news-post__description">
										Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci ... 
									</p>
									<a class="text-btn text-btn-grey" href="#">
										Continue Reading ...
									</a>
								</div>
							</div>
							<!-- end news-post module -->

						</div>

						<div class="col-lg-3 col-md-6">
							
							<!-- news-post module -->
							<div class="news-post">
								<div class="news-post__gal">
									<img src="<?php echo base_url(); ?>assets/upload/b4.jpg" alt="">
									<span class="news-post__date">
										2018/12/26
									</span>
								</div>
								<div class="news-post__content">
									<h2 class="news-post__title">
										<a href="<?php echo base_url(); ?>singlepost">The Sydney Fire Show</a>
									</h2>
									<ul class="news-post__tags">
										<li><a href="#">Show,</a></li>
										<li><a href="#">Travel</a></li>
									</ul>
									<p class="news-post__description">
										Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci ... 
									</p>
									<a class="text-btn text-btn-grey" href="#">
										Continue Reading ...
									</a>
								</div>
							</div>
							<!-- end news-post module -->

						</div>

					</div>
				</div>

				<div class="center-button">
					<a class="text-btn" href="<?php echo base_url(); ?>blog">
						Read Our Blog
					</a>
				</div>
				
			</div>
		</section>
		<!-- End news-block -->

		<!-- statistic-block
			================================================== -->
		<section class="statistic statistic-bg-img">
			<div class="container">

				<div class="statistic__box">
					<div class="row">

						<div class="col-lg-3 col-sm-6">
							
							<!-- statistic-post module -->
							<div class="statistic-post">

								<span class="statistic-post__icon statistic-post__icon-primary">
									<i class="la la-fire" aria-hidden="true"></i>
								</span>

								<div class="statistic-post__content">
									<h1 class="statistic-post__title statistic-post__title-white">
										<span class="timer" data-from="0" data-to="100">100</span> +
									</h1>
									<p class="statistic-post__description">
										New Places Every Day 
									</p>
								</div>

							</div>
							<!-- end statistic-post module -->

						</div>

						<div class="col-lg-3 col-sm-6">
							
							<!-- statistic-post module -->
							<div class="statistic-post">

								<span class="statistic-post__icon statistic-post__icon-primary">
									<i class="la la-thumbs-up" aria-hidden="true"></i>
								</span>

								<div class="statistic-post__content">
									<h1 class="statistic-post__title statistic-post__title-white">
										<span class="timer" data-from="0" data-to="9500">9500</span> +
									</h1>
									<p class="statistic-post__description">
										Happy Costumers 
									</p>
								</div>

							</div>
							<!-- end statistic-post module -->

						</div>

						<div class="col-lg-3 col-sm-6">
							
							<!-- statistic-post module -->
							<div class="statistic-post">

								<span class="statistic-post__icon statistic-post__icon-primary">
									<i class="la la-comments" aria-hidden="true"></i>
								</span>

								<div class="statistic-post__content">
									<h1 class="statistic-post__title statistic-post__title-white">
										<span class="timer" data-from="0" data-to="25000">25000</span> +
									</h1>
									<p class="statistic-post__description">
										Costumers Review
									</p>
								</div>

							</div>
							<!-- end statistic-post module -->

						</div>

						<div class="col-lg-3 col-sm-6">
							
							<!-- statistic-post module -->
							<div class="statistic-post">

								<span class="statistic-post__icon statistic-post__icon-primary">
									<i class="la la-street-view" aria-hidden="true"></i>
								</span>

								<div class="statistic-post__content">
									<h1 class="statistic-post__title statistic-post__title-white">
										<span class="timer" data-from="0" data-to="5500">5500</span> +
									</h1>
									<p class="statistic-post__description">
										Unique Places and Events
									</p>
								</div>

							</div>
							<!-- end statistic-post module -->

						</div>

					</div>
				</div>
				
			</div>
		</section>
		<!-- End statistic-block -->