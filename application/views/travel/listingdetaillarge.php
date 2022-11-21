		<!-- listing-detail
			================================================== -->
		<section class="listing-detail">

			<div class="listing-detail__gal">
				<picture>
					<source media="(min-width: 991px)" srcset="<?php echo base_url(); ?>/assets/upload/single-large.jpg">
					<source media="(min-width: 568px)" srcset="<?php echo base_url(); ?>/assets/upload/single-large-2.jpg">
					<source media="(min-width: 200px)" srcset="<?php echo base_url(); ?>/assets/upload/single-large-3.jpg">
					<img src="<?php echo base_url(); ?>assets/upload/single-large.jpg" alt="">
				</picture>
				<div class="listing-detail__gal-box">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p class="listing-detail__rate">9.3 <span>/ 10</span></p>
								<h1 class="listing-detail__title">Fifteen Restaurant & Cheese Bar</h1>
								<p class="listing-detail__address"><i class="fa fa-map-marker"></i>1149 3rd St (Wilshire), Santa Monica</p>
							</div>
							<div class="col-md-6">
								<div class="listing-detail__buttons">
									<a class="btn-default navigate-btn" href="#leave-review">
										<i class="la la-pencil" aria-hidden="true"></i>
										Write a Review
									</a>
									<a class="btn-default" href="#">
										<i class="la la-heart-o" aria-hidden="true"></i>
										Save
									</a>
									<a class="btn-default" href="#">
										<i class="la la-share-alt" aria-hidden="true"></i>
										Share
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="listing-detail__scroll-menu-box scroller-menu">
				<div class="container">
					<ul class="listing-detail__scroll-menu navigate-section">
						<li>
							<a class="active" href="#overview-box">Overview</a>
						</li>
						<li>
							<a href="#gallery-box">Gallery</a>
						</li>
						<li>
							<a href="#tips-reviews-box">Tips and Reviews</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="listing-detail__content">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="listing-detail__content-box">

								<!-- overview box -->
								<div class="listing-detail__overview element-waypoint" id="overview-box">
									<h2 class="listing-detail__content-title">Overview</h2>
									<p class="listing-detail__content-description">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
									</p>
								</div>

								<!-- gallery-box -->
								<div class="listing-detail__gallery element-waypoint" id="gallery-box">
									<h2 class="listing-detail__content-title">Gallery</h2>
									<div class="listing-detail__gallery-inner owl-wrapper">
										<div class="owl-carousel" data-num="4">
										
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/upload/g1.jpg" alt="">
											</div>
										
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/upload/g2.jpg" alt="">
											</div>
										
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/upload/g3.jpg" alt="">
											</div>
										
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/upload/g4.jpg" alt="">
											</div>
										
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/upload/g5.jpg" alt="">
											</div>
										
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/upload/g6.jpg" alt="">
											</div>

										</div>
									</div>
								</div>

								<!-- tips & reviews-box -->
								<div class="listing-detail__reviews element-waypoint" id="tips-reviews-box">
									<h2 class="listing-detail__content-title">
										Tips & Reviews 
										<a href="#leave-review" class="navigate-btn"><i class="la la-pencil"></i> Write a Review</a>
									</h2>
									<div class="listing-detail__reviews-box">

										<!-- reviews list -->
										<ul class="reviews-list">

											<li class="reviews-list__item">
												<div class="reviews-list__item-box">
													<img class="reviews-list__item-image" src="<?php echo base_url(); ?>assets/upload/avatar2.jpg" alt="">
													<div class="reviews-list__item-content">
														<h3 class="reviews-list__item-title">
															Philip W
														</h3>
														<span class="reviews-list__item-location">
															Ormskirk, United Kingdom
														</span>
														<p class="reviews-list__item-date">
															Posted October 7, 2018
															<span class="reviews-list__item-rating">8.0</span>
														</p>
														<h3 class="reviews-list__item-title">
															Good Service but..
														</h3>
														<p class="reviews-list__item-description">
															Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
														</p>
														<a class="reviews-list__item-helpful" href="#">
															<i class="la la-thumbs-o-up"></i>
															Helpfull review
															<span>8</span>
														</a>
														<a class="reviews-list__item-reply" href="#">
															<i class="la la-mail-forward"></i>
															Reply
														</a>
													</div>	
												</div>
											</li>

											<li class="reviews-list__item">
												<div class="reviews-list__item-box">
													<img class="reviews-list__item-image" src="<?php echo base_url(); ?>assets/upload/avatar3.jpg" alt="">
													<div class="reviews-list__item-content">
														<h3 class="reviews-list__item-title">
															Jury
														</h3>
														<span class="reviews-list__item-location">
															Sopot, Poland
														</span>
														<p class="reviews-list__item-date">
															Posted October 1, 2018
															<span class="reviews-list__item-rating average-rat">7.0</span>
														</p>
														<h3 class="reviews-list__item-title">
															Nice!
														</h3>
														<p class="reviews-list__item-description">
															Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
														</p>
														<a class="reviews-list__item-helpful active" href="#">
															<i class="la la-thumbs-o-up"></i>
															Helpfull review
															<span>2</span>
														</a>
														<a class="reviews-list__item-reply" href="#">
															<i class="la la-mail-forward"></i>
															Reply
														</a>
													</div>	
												</div>
											</li>

											<li class="reviews-list__item">
												<div class="reviews-list__item-box">
													<img class="reviews-list__item-image" src="<?php echo base_url(); ?>assets/upload/avatar4.jpg" alt="">
													<div class="reviews-list__item-content">
														<h3 class="reviews-list__item-title">
															Samantha B
														</h3>
														<span class="reviews-list__item-location">
															Viena, Austria
														</span>
														<p class="reviews-list__item-date">
															Posted October 1, 2018
															<span class="reviews-list__item-rating low-rat">2.0</span>
														</p>
														<h3 class="reviews-list__item-title">
															Horrible!
														</h3>
														<p class="reviews-list__item-description">
															Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. 
														</p>
														<a class="reviews-list__item-helpful" href="#">
															<i class="la la-thumbs-o-up"></i>
															Helpfull review
															<span>0</span>
														</a>
														<a class="reviews-list__item-reply" href="#">
															<i class="la la-mail-forward"></i>
															Reply
														</a>
													</div>	
												</div>

												<ul class="reviews-list with-depth">

													<li class="reviews-list__item">
														<div class="reviews-list__item-box">
															<img class="reviews-list__item-image" src="<?php echo base_url(); ?>assets/upload/avatar-p.jpg" alt="">
															<div class="reviews-list__item-content">
																<h3 class="reviews-list__item-title">
																	Mr Demarest
																</h3>
																<span class="reviews-list__item-location">
																	Austria
																</span>
																<p class="reviews-list__item-date">
																	Posted October 1, 2018
																</p>
																<p class="reviews-list__item-description">
																	Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
																</p>
																<a class="reviews-list__item-helpful" href="#">
																	<i class="la la-thumbs-o-up"></i>
																	Helpfull review
																	<span>0</span>
																</a>
																<a class="reviews-list__item-reply" href="#">
																	<i class="la la-mail-forward"></i>
																	Reply
																</a>
															</div>	
														</div>
													</li>
												</ul>
											</li>

											<li class="reviews-list__item">
												<div class="reviews-list__item-box">
													<img class="reviews-list__item-image" src="<?php echo base_url(); ?>assets/upload/avatar5.jpg" alt="">
													<div class="reviews-list__item-content">
														<h3 class="reviews-list__item-title">
															Andreas
														</h3>
														<span class="reviews-list__item-location">
															Paphos, Cyprus
														</span>
														<p class="reviews-list__item-date">
															Posted October 1, 2018
															<span class="reviews-list__item-rating solid-rat">6.0</span>
														</p>
														<h3 class="reviews-list__item-title">
															Lunch for two!
														</h3>
														<p class="reviews-list__item-description">
															Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
														</p>
														<a class="reviews-list__item-helpful" href="#">
															<i class="la la-thumbs-o-up"></i>
															Helpfull review
															<span>1</span>
														</a>
														<a class="reviews-list__item-reply" href="#">
															<i class="la la-mail-forward"></i>
															Reply
														</a>
													</div>	
												</div>
											</li>

										</ul>
										<!-- reviews-list -->

										<!-- Contact form module -->
										<form class="contact-form" id="leave-review">
											<h2 class="contact-form__title">
												Rate us and Write a Review
											</h2>
											<div class="row">
												<div class="col-md-6">
													<p class="contact-form__rate">
														Your rating for this listing:
													</p>
													<p class="contact-form__rate-bx">
														<i class="la la-star"></i>
														<i class="la la-star"></i>
														<i class="la la-star"></i>
														<i class="la la-star"></i>
														<i class="la la-star"></i>
														<i class="la la-star"></i>
														<i class="la la-star"></i>
														<i class="la la-star"></i>
														<i class="la la-star"></i>
														<i class="la la-star"></i>
													</p>
													<p class="contact-form__rate-bx-show">
														<span class="rate-actual">0</span> / 10
													</p>
												</div>
												<div class="col-md-6">
													<div class="contact-form__upload-btn">
														<input class="contact-form__input-file" type="file" name="photo-upload" id="photo-upload" />
														<span>
															<i class="la la-cloud-upload"></i>
															Upload Photos
														</span>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<input class="contact-form__input-text" type="text" name="name" id="name" placeholder="Name:" />
												</div>
												<div class="col-md-6">
													<input class="contact-form__input-text" type="text" name="mail" id="mail" placeholder="Email:" />
												</div>
											</div>
											<textarea class="contact-form__textarea" name="comment" id="comment" placeholder="Comment"></textarea>
											<input class="contact-form__submit" type="submit" name="submit-contact" id="submit_contact" value="Submit Review" />
										</form>
										<!-- End Contact form module -->

									</div>

								</div>

							</div>
						</div>
						<div class="col-lg-4">
							<div class="sidebar">

							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15776.338957195008!2d115.2337831!3d-8.6834917!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad78f1ff66b638d2!2sSMK%20TI%20Bali%20Global%20Denpasar!5e0!3m2!1sid!2sid!4v1633671405051!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

								<div class="sidebar__widget sidebar__widget-listing-details">
									<h2 class="sidebar__widget-title">
										Details
									</h2>
									<ul class="sidebar__listing-list">
										<li>
											<i class="la la-map-marker"></i>
											305 Franklin Ave (at Lafayette Ave), Brooklyn
										</li>
										<li>
											<i class="la la-mobile-phone"></i>
											+44 20 7336 8898
										</li>
										<li>
											<i class="la la-link"></i>
											https://yourrestaurant.com
										</li>
										<li>
											<i class="la la-clock-o"></i>
											<span class="color-close">Closed until Noon</span>
											<div>
												<p>
													Mon–Thu, Sun <span class="right-align">Noon–Midnight</span>
												</p>
												<p>
													Fri–Sat <span class="right-align">Noon–1:00 AM</span>
												</p>
											</div>
										</li>
									</ul>
								</div>

								<div class="sidebar__widget sidebar__widget-author">
									<h2 class="sidebar__widget-title">
										Author
									</h2>
									
									<!-- Author-wrapper module -->
									<div class="author-wrapper">
										<div class="author-wrapper__profile">
											<div class="row">
												<div class="col-7">
													<div class="author-wrapper__content">
														<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar1.jpg" alt=""></a>
														<h3 class="author-wrapper__title">
															<a href="#">Matt Smith</a>
															<span class="author-wrapper__location">
																New York
															</span>
														</h3>
													</div>
												</div>
												<div class="col-5">
													<a class="author-wrapper__btn follow-btn" href="#">
														<i class="la la-eye"></i>
														Follow
													</a>
												</div>
											</div>
										</div>
										<ul class="author-wrapper__list">
											<li>
												<span>42</span>
												List
											</li>
											<li>
												<span>12</span>
												Followers
											</li>
											<li>
												<span>34</span>
												Following
											</li>
											<li>
												<span>56</span>
												Reviews
											</li>
										</ul>
									</div>
									<!-- End Author-wrapper module-->
								</div>

								<div class="sidebar__widget sidebar__widget-tags">
									<h2 class="sidebar__widget-title">
										Listing Tags
									</h2>
									<ul class="sidebar__tags-list">
										<li><a href="#">Cafe</a></li>
										<li><a href="#">Restaurant</a></li>
										<li><a href="#">food</a></li>
										<li><a href="#">Romantic</a></li>
										<li><a href="#">Cozy</a></li>
										<li><a href="#">Sea Food</a></li>
										<li><a href="#">Healthy Food</a></li>
										<li><a href="#">Pasta</a></li>
									</ul>
								</div>

								<div class="sidebar__widget sidebar__advertise">
									<span class="sidebar__advertise-title">
										advertising box
									</span>
									<img src="<?php echo base_url(); ?>assets/upload/add.jpg" alt="">
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			


		</section>
		<!-- End listing-detail -->