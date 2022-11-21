
		<!-- discover-module section
			================================================== -->
		<section class="discover">
			<div class="container">

				<p class="discover__description">
					Find out perfect place to hangout in your city.
				</p>

				<h1 class="discover__title places-tab">
					Discover great places.
				</h1>

				<!-- by default discover__title events tab is hidden -->
				<h1 class="discover__title events-tab">
					Discover great events.
				</h1>

				<ul class="discover__list">
					<li class="discover__list-item">
						<a class="place active-list" href="#"><i class="la la-compass" aria-hidden="true"></i>Places</a>
					</li>
					<li class="discover__list-item">
						<a class="events" href="#"><i class="la la-calendar" aria-hidden="true"></i>Events</a>
					</li>
				</ul>

				<form class="discover__form">
					<input class="discover__form-input" type="text" name="place-event" id="place-event" placeholder="What are you looking for?" />
					<select class="discover__form-input js-example-basic-multiple">
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
					<select class="discover__form-input js-example-basic-multiple">
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

				<p class="discover__hashtags">
					<span>Popular categories:</span> 
					<a href="<?php echo base_url(); ?>explorecategory">#restaurant,</a>
					<a href="<?php echo base_url(); ?>explorecategory">#hotels,</a>
					<a href="<?php echo base_url(); ?>explorecategory">#vacation,</a>
					<a href="<?php echo base_url(); ?>explorecategory">#rentals,</a>
					<a href="<?php echo base_url(); ?>explorecategory">#nightlive,</a>
					<a href="<?php echo base_url(); ?>explorecategory">#shopping,</a>
					<a href="<?php echo base_url(); ?>explorecategory">... </a>
				</p>
				
			</div>
		</section>
		<!-- End discover-module section -->

		<!-- top-experience-block
			================================================== -->
		<section class="top-experience">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title white-style">
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
								<img class="place-gal__image" src="<?php echo base_url(); ?>assets/upload//top1.jpg" alt="place-image">
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
											<img src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>/assets/upload//flag2.jpg" alt="">
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
								<img class="place-gal__image" src="<?php echo base_url(); ?>assets/upload//top3.jpg" alt="place-image">
								<div class="place-gal__content">
									<h2 class="place-gal__title">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/upload//flag3.jpg" alt="">
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
											<img src="<?php echo base_url(); ?>assets/upload//flag4.jpg" alt="">
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

		<!-- services-block
			================================================== -->
		<section class="services">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title">
						Find Your Services
					</h1>
					<p class="section-header__description">
						Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod
					</p>
				</div>
				<!-- end section-header module -->


				<div class="services__box">
					<div class="row">
						
						<div class="col-xl-2 col-md-4 col-sm-6">

							<!-- services-post module -->
							<a href="#" class="services-post">
								<div class="services-post__content">
									<i class="la la-futbol-o" aria-hidden="true"></i>
									<h2 class="services-post__title">
										Sport
									</h2>
									<p class="services-post__location">
										12 Locations
									</p>
								</div>
							</a>
							<!-- end services-post module -->

						</div>
						
						<div class="col-xl-2 col-md-4 col-sm-6">

							<!-- services-post module -->
							<a href="#" class="services-post">
								<div class="services-post__content">
									<i class="la la-hotel" aria-hidden="true"></i>
									<h2 class="services-post__title">
										Hotel
									</h2>
									<p class="services-post__location">
										16 Locations
									</p>
								</div>
							</a>
							<!-- end services-post module -->

						</div>
						
						<div class="col-xl-2 col-md-4 col-sm-6">

							<!-- services-post module -->
							<a href="#" class="services-post">
								<div class="services-post__content">
									<i class="la la-cutlery" aria-hidden="true"></i>
									<h2 class="services-post__title">
										Restaurant
									</h2>
									<p class="services-post__location">
										22 Locations
									</p>
								</div>
							</a>
							<!-- end services-post module -->

						</div>
						
						<div class="col-xl-2 col-md-4 col-sm-6">

							<!-- services-post module -->
							<a href="#" class="services-post">
								<div class="services-post__content">
									<i class="la la-shopping-cart" aria-hidden="true"></i>
									<h2 class="services-post__title">
										Shopping
									</h2>
									<p class="services-post__location">
										30 Locations
									</p>
								</div>
							</a>
							<!-- end services-post module -->

						</div>
						
						<div class="col-xl-2 col-md-4 col-sm-6">

							<!-- services-post module -->
							<a href="#" class="services-post">
								<div class="services-post__content">
									<i class="la la-ticket" aria-hidden="true"></i>
									<h2 class="services-post__title">
										Art &amp; Culture
									</h2>
									<p class="services-post__location">
										8 Locations
									</p>
								</div>
							</a>
							<!-- end services-post module -->

						</div>

						<div class="col-xl-2 col-md-4 col-sm-6">

							<!-- services-post module -->
							<a href="#" class="services-post">
								<div class="services-post__content">
									<i class="la la-glass" aria-hidden="true"></i>
									<h2 class="services-post__title">
										Nightlife
									</h2>
									<p class="services-post__location">
										19 Locations
									</p>
								</div>
							</a>
							<!-- end services-post module -->

						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- End services-block -->

		<!-- trending-places-block
			================================================== -->
		<section class="trending-places">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title">
						Top Trending Places
					</h1>
					<p class="section-header__description">
						Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
					</p>
				</div>
				<!-- end section-header module -->


				<div class="trending-places__box owl-wrapper">
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
										<a href="<?php echo base_url(); ?>listingdetailarge">Fifteen Restaurant & Cheese bar</a>
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
				</div>
				<div class="center-button">
					<a class="text-btn" href="#">
						View All Places <span>(482)</span>
					</a>
				</div>
			</div>
		</section>
		<!-- End trending-places-block -->

		<!-- trending-events-block
			================================================== -->
		<section class="trending-events">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title">
						Top Trending Events
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
										<a href="<?php echo base_url(); ?>listingdetailarge">Fifteen Restaurant & Cheese</a>
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
										<a href="<?php echo base_url(); ?>listingdetailarge">Children World of Adventures Resort</a>
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
										<a href="<?php echo base_url(); ?>listingdetailarge">Secret Food Tour</a>
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
										<a href="<?php echo base_url(); ?>listingdetailarge">The Alternative Selection</a>
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
										<a href="<?php echo base_url(); ?>listingdetailarge">Dresden Day Trip from Berlin</a>
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
										<a href="<?php echo base_url(); ?>listingdetailarge">Fifteen Restaurant & Cheese</a>
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

		<!-- how-it-work-block
			================================================== -->
		<section class="how-it-work">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title white-style">
						How It Works
					</h1>
					<p class="section-header__description white-style">
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

								<h2 class="how-work-post__title how-work-post__title-white">
									Explore The City
								</h2>

								<p class="how-work-post__description how-work-post__description-white">
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

								<h2 class="how-work-post__title how-work-post__title-white">
									Find Interesting Place
								</h2>

								<p class="how-work-post__description how-work-post__description-white">
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

								<h2 class="how-work-post__title how-work-post__title-white">
									Add Your Listing
								</h2>

								<p class="how-work-post__description how-work-post__description-white">
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

		<!-- statistic-block
			================================================== -->
		<section class="statistic">
			<div class="container">

				<div class="statistic__box">
					<div class="row">

						<div class="col-lg-3 col-sm-6">
							
							<!-- statistic-post module -->
							<div class="statistic-post">

								<span class="statistic-post__icon">
									<i class="la la-fire" aria-hidden="true"></i>
								</span>

								<div class="statistic-post__content">
									<h1 class="statistic-post__title">
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

								<span class="statistic-post__icon">
									<i class="la la-thumbs-up" aria-hidden="true"></i>
								</span>

								<div class="statistic-post__content">
									<h1 class="statistic-post__title">
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

								<span class="statistic-post__icon">
									<i class="la la-comments" aria-hidden="true"></i>
								</span>

								<div class="statistic-post__content">
									<h1 class="statistic-post__title">
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

								<span class="statistic-post__icon">
									<i class="la la-street-view" aria-hidden="true"></i>
								</span>

								<div class="statistic-post__content">
									<h1 class="statistic-post__title">
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

		<!-- testimonial-block
			================================================== -->
		<section class="testimonial">
			<div class="container">

				<!-- section-header module -->
				<div class="section-header">
					<h1 class="section-header__title">
						People Talking About Us
					</h1>
					<p class="section-header__description">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
					</p>
				</div>
				<!-- end section-header module -->

				<div class="testimonial__box owl-wrapper">
					<div class="owl-carousel" data-num="3">
					
						<div class="item">
							
							<!-- testimonial-post module -->
							<div class="testimonial-post">

								<div class="testimonial-post__content">

									<span class="testimonial-post__quote">"</span>

									<p class="testimonial-post__description">
										“ Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh, nullam mollis. Ut justo. Suspendisse potenti. ”
									</p>

								</div>

								<img class="testimonial-post__image" src="<?php echo base_url(); ?>assets/upload/test1.jpg" alt="testimonial-image">

								<h2 class="testimonial-post__title">
									Michael Osborne
								</h2>

							</div>
							<!-- end testimonial-post module -->

						</div>
					
						<div class="item">
							
							<!-- testimonial-post module -->
							<div class="testimonial-post">

								<div class="testimonial-post__content">

									<span class="testimonial-post__quote">"</span>

									<p class="testimonial-post__description">
										“Ut justo suspendisse potenti. Sed vel lacus mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus.”
									</p>

								</div>

								<img class="testimonial-post__image" src="<?php echo base_url(); ?>assets/upload/test2.jpg" alt="testimonial-image">

								<h2 class="testimonial-post__title">
									Lara Joy
								</h2>

							</div>
							<!-- end testimonial-post module -->

						</div>
					
						<div class="item">
							
							<!-- testimonial-post module -->
							<div class="testimonial-post">

								<div class="testimonial-post__content">

									<span class="testimonial-post__quote">"</span>

									<p class="testimonial-post__description">
										“Sed vel lacus mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. ” 
									</p>

								</div>

								<img class="testimonial-post__image" src="<?php echo base_url(); ?>assets/upload/test3.jpg" alt="testimonial-image">

								<h2 class="testimonial-post__title">
									John Smith
								</h2>

							</div>
							<!-- end testimonial-post module -->

						</div>
					
						<div class="item">
							
							<!-- testimonial-post module -->
							<div class="testimonial-post">

								<div class="testimonial-post__content">

									<span class="testimonial-post__quote">"</span>

									<p class="testimonial-post__description">
										“ Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh, nullam mollis. Ut justo. Suspendisse potenti. ”
									</p>

								</div>

								<img class="testimonial-post__image" src="<?php echo base_url(); ?>assets/upload/test1.jpg" alt="testimonial-image">

								<h2 class="testimonial-post__title">
									Michael Osborne
								</h2>

							</div>
							<!-- end testimonial-post module -->

						</div>

					</div>
				</div>
				
			</div>
		</section>
		<!-- End testimonial-block -->
		
			<section class="testimonial">
			<div class="container">
				<div class="row">
					<div class="col-3"></div>
					<div class="col-6">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-3"></div>
				</div>
			</div>
		</section>