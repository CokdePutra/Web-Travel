		<!-- user-detail
			================================================== -->
		<section class="user-detail">
			<div class="user-detail__profile">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="user-detail__profile-box">
								<a class="user-detail__profile-image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avat1.jpg" alt=""></a>
								<h3 class="user-detail__profile-title">
									<a href="#">Matt Smith</a>
									<span class="user-detail__profile-location">
										<i class="fa fa-map-marker"></i>
										New York
									</span>
								</h3>
							</div>
						</div>
						<div class="col-lg-7">
							<a class="user-detail__profile-btn btn-default btn-default-red" href="#">
								<i class="la la-eye"></i>
								Follow
							</a>
							<ul class="user-detail__profile-list">
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
					</div>
				</div>
			</div>

			<!-- user scroll menu box -->
			<div class="user-detail__scroll-menu-box scroller-menu">
				<div class="container">
					<ul class="user-detail__scroll-menu navigate-section">
						<li>
							<a class="active" href="#my-lists-box" data-offset="30">My Lists</a>
						</li>
						<li>
							<a href="#tips-review-box" data-offset="30">Tips and Reviews</a>
						</li>
						<li>
							<a href="#cities-box" data-offset="30">Cities Visited</a>
						</li>
						<li>
							<a href="#favorites-box" data-offset="30">My Favorites</a>
						</li>
						<li>
							<a href="#follow-box" data-offset="30">Followers and Following</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- my lists box -->
			<div class="user-detail__mylist element-waypoint" id="my-lists-box">
				<div class="container">
					<h2 class="user-detail__subtitle">My Lists <span>(2)</span></h2>
					<div class="user-detail__mylist-box iso-call">
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
										<a href="#">Fifteen Restaurant & Cheese bar</a>
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
										<a href="#">Frankies 457 Spuntino</a>
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
				</div>
			</div>

			<!-- tips reviews box -->
			<div class="user-detail__review element-waypoint" id="tips-review-box">
				<div class="container">
					<h2 class="user-detail__subtitle">Tips and Reviews <span>(23)</span></h2>
					<div class="user-detail__review-box owl-wrapper">
						<div class="owl-carousel" data-num="3">
						
							<div class="item">

								<!-- review item module -->
								<div class="review-item">
									
									<div class="review-item__post">
										<div class="review-item__post-image">
											<img class="review-item__image" src="<?php echo base_url(); ?>assets/upload/thumb1.jpg" alt="">
										</div>
										<div class="review-item__post-content">
											<h2 class="review-item__post-title">
												<a href="#">Caffè Pascucci</a>
											</h2>
											<p class="review-item__post-location">
												<i class="fa fa-map-marker"></i>
												Piazza della Repubblica, Florence
											</p>
											<span class="review-item__post-reviews">
												<i class="fa fa-comment-o"></i>
												58 Reviews
											</span>
										</div>
									</div>
									<div class="review-item__content">
										<p class="review-item__date">
											<span class="review-item__rating">8.0</span>
											Posted October 7, 2018
										</p>
										<h3 class="review-item__title">
											Good Service but..
										</h3>
										<p class="review-item__description">
											Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
										</p>
										<a class="review-item__helpful" href="#">
											<i class="la la-thumbs-o-up"></i>
											Helpfull review
											<span>8</span>
										</a>
										<a class="review-item__reply" href="#">
											<i class="la la-mail-forward"></i>
											Reply
										</a>
									</div>	
								</div>
								<!-- end review item module -->

							</div>
						
							<div class="item">

								<!-- review item module -->
								<div class="review-item">
									
									<div class="review-item__post">
										<div class="review-item__post-image">
											<img class="review-item__image" src="<?php echo base_url(); ?>assets/upload/thumb2.jpg" alt="">
										</div>
										<div class="review-item__post-content">
											<h2 class="review-item__post-title">
												<a href="#">Golden Krust</a>
											</h2>
											<p class="review-item__post-location">
												<i class="fa fa-map-marker"></i>
												East Flatbush, Brookly
											</p>
											<span class="review-item__post-reviews">
												<i class="fa fa-comment-o"></i>
												14 Reviews
											</span>
										</div>
									</div>
									<div class="review-item__content">
										<p class="review-item__date">
											<span class="review-item__rating">9.0</span>
											Posted October 7, 2018
										</p>
										<h3 class="review-item__title">
											A must for history enthusiasts
										</h3>
										<p class="review-item__description">
											Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
										</p>
										<a class="review-item__helpful" href="#">
											<i class="la la-thumbs-o-up"></i>
											Helpfull review
											<span>2</span>
										</a>
										<a class="review-item__reply" href="#">
											<i class="la la-mail-forward"></i>
											Reply
										</a>
									</div>	
								</div>
								<!-- end review item module -->

							</div>
						
							<div class="item">

								<!-- review item module -->
								<div class="review-item">
									
									<div class="review-item__post">
										<div class="review-item__post-image">
											<img class="review-item__image" src="<?php echo base_url(); ?>assets/upload/thumb3.jpg" alt="">
										</div>
										<div class="review-item__post-content">
											<h2 class="review-item__post-title">
												<a href="#">Kaiserliche Schatzkammer</a>
											</h2>
											<p class="review-item__post-location">
												<i class="fa fa-map-marker"></i>
												Hofburg 1, Vienna 1010, Austria
											</p>
											<span class="review-item__post-reviews">
												<i class="fa fa-comment-o"></i>
												236 Reviews
											</span>
										</div>
									</div>
									<div class="review-item__content">
										<p class="review-item__date">
											<span class="review-item__rating solid-rat">6.0</span>
											Posted October 7, 2018
										</p>
										<h3 class="review-item__title">
											Cool exhibit
										</h3>
										<p class="review-item__description">
											Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. 

										</p>
										<a class="review-item__helpful" href="#">
											<i class="la la-thumbs-o-up"></i>
											Helpfull review
											<span>0</span>
										</a>
										<a class="review-item__reply" href="#">
											<i class="la la-mail-forward"></i>
											Reply
										</a>
									</div>	
								</div>
								<!-- end review item module -->

							</div>
						
							<div class="item">

								<!-- review item module -->
								<div class="review-item">
									
									<div class="review-item__post">
										<div class="review-item__post-image">
											<img class="review-item__image" src="<?php echo base_url(); ?>assets/upload/thumb1.jpg" alt="">
										</div>
										<div class="review-item__post-content">
											<h2 class="review-item__post-title">
												<a href="#">Caffè Pascucci</a>
											</h2>
											<p class="review-item__post-location">
												<i class="fa fa-map-marker"></i>
												Piazza della Repubblica, Florence
											</p>
											<span class="review-item__post-reviews">
												<i class="fa fa-comment-o"></i>
												58 Reviews
											</span>
										</div>
									</div>
									<div class="review-item__content">
										<p class="review-item__date">
											<span class="review-item__rating solid-rat">5.0</span>
											Posted October 7, 2018
										</p>
										<h3 class="review-item__title">
											Good Service but..
										</h3>
										<p class="review-item__description">
											Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
										</p>
										<a class="review-item__helpful" href="#">
											<i class="la la-thumbs-o-up"></i>
											Helpfull review
											<span>8</span>
										</a>
										<a class="review-item__reply" href="#">
											<i class="la la-mail-forward"></i>
											Reply
										</a>
									</div>	
								</div>
								<!-- end review item module -->

							</div>
						
							<div class="item">

								<!-- review item module -->
								<div class="review-item">
									
									<div class="review-item__post">
										<div class="review-item__post-image">
											<img class="review-item__image" src="<?php echo base_url(); ?>assets/upload/thumb2.jpg" alt="">
										</div>
										<div class="review-item__post-content">
											<h2 class="review-item__post-title">
												<a href="#">Golden Krust</a>
											</h2>
											<p class="review-item__post-location">
												<i class="fa fa-map-marker"></i>
												East Flatbush, Brookly
											</p>
											<span class="review-item__post-reviews">
												<i class="fa fa-comment-o"></i>
												14 Reviews
											</span>
										</div>
									</div>
									<div class="review-item__content">
										<p class="review-item__date">
											<span class="review-item__rating average-rat">7.0</span>
											Posted October 7, 2018
										</p>
										<h3 class="review-item__title">
											A must for history enthusiasts
										</h3>
										<p class="review-item__description">
											Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
										</p>
										<a class="review-item__helpful" href="#">
											<i class="la la-thumbs-o-up"></i>
											Helpfull review
											<span>2</span>
										</a>
										<a class="review-item__reply" href="#">
											<i class="la la-mail-forward"></i>
											Reply
										</a>
									</div>	
								</div>
								<!-- end review item module -->

							</div>
						
							<div class="item">

								<!-- review item module -->
								<div class="review-item">
									
									<div class="review-item__post">
										<div class="review-item__post-image">
											<img class="review-item__image" src="<?php echo base_url(); ?>assets/upload/thumb3.jpg" alt="">
										</div>
										<div class="review-item__post-content">
											<h2 class="review-item__post-title">
												<a href="#">Kaiserliche Schatzkammer</a>
											</h2>
											<p class="review-item__post-location">
												<i class="fa fa-map-marker"></i>
												Hofburg 1, Vienna 1010, Austria
											</p>
											<span class="review-item__post-reviews">
												<i class="fa fa-comment-o"></i>
												236 Reviews
											</span>
										</div>
									</div>
									<div class="review-item__content">
										<p class="review-item__date">
											<span class="review-item__rating">10.0</span>
											Posted October 7, 2018
										</p>
										<h3 class="review-item__title">
											Cool exhibit
										</h3>
										<p class="review-item__description">
											Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. 

										</p>
										<a class="review-item__helpful" href="#">
											<i class="la la-thumbs-o-up"></i>
											Helpfull review
											<span>0</span>
										</a>
										<a class="review-item__reply" href="#">
											<i class="la la-mail-forward"></i>
											Reply
										</a>
									</div>	
								</div>
								<!-- end review item module -->

							</div>
						
							<div class="item">

								<!-- review item module -->
								<div class="review-item">
									
									<div class="review-item__post">
										<div class="review-item__post-image">
											<img class="review-item__image" src="<?php echo base_url(); ?>assets/upload/thumb1.jpg" alt="">
										</div>
										<div class="review-item__post-content">
											<h2 class="review-item__post-title">
												<a href="#">Caffè Pascucci</a>
											</h2>
											<p class="review-item__post-location">
												<i class="fa fa-map-marker"></i>
												Piazza della Repubblica, Florence
											</p>
											<span class="review-item__post-reviews">
												<i class="fa fa-comment-o"></i>
												58 Reviews
											</span>
										</div>
									</div>
									<div class="review-item__content">
										<p class="review-item__date">
											<span class="review-item__rating low-rat">1.0</span>
											Posted October 7, 2018
										</p>
										<h3 class="review-item__title">
											Good Service but..
										</h3>
										<p class="review-item__description">
											Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
										</p>
										<a class="review-item__helpful" href="#">
											<i class="la la-thumbs-o-up"></i>
											Helpfull review
											<span>1</span>
										</a>
										<a class="review-item__reply" href="#">
											<i class="la la-mail-forward"></i>
											Reply
										</a>
									</div>	
								</div>
								<!-- end review item module -->

							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- cities box -->
			<div class="user-detail__cities element-waypoint" id="cities-box">
				<div class="container">
					<h2 class="user-detail__subtitle">Cities Visited <span>(6)</span></h2>
					<div class="user-detail__cities-box iso-call" data-item-showen="4">

						<div class="item">

							<!-- cities-post module-->
							<div class="cities-post">
								<img class="cities-post__image" src="<?php echo base_url(); ?>assets/upload/city1.jpg" alt=""/>
								<h2 class="cities-post__title"><a href="#">New York, US</a></h2>
								<ul class="cities-post__list">
									<li>8 Reviews Wrote</li>
									<li>1 List Created</li>
								</ul>
								<a class="cities-post__link text-btn" href="#">View All Lists <span>(482)</span></a>
							</div>
							<!-- End cities-post module-->

						</div>
						<div class="item">

							<!-- cities-post module-->
							<div class="cities-post">
								<img class="cities-post__image" src="<?php echo base_url(); ?>assets/upload/city2.jpg" alt=""/>
								<h2 class="cities-post__title"><a href="#">Vienna, Austria</a></h2>
								<ul class="cities-post__list">
									<li>3 Reviews Wrote</li>
									<li>0 List Created</li>
								</ul>
								<a class="cities-post__link text-btn" href="#">View All Lists <span>(58)</span></a>
							</div>
							<!-- End cities-post module-->

						</div>
						<div class="item">

							<!-- cities-post module-->
							<div class="cities-post">
								<img class="cities-post__image" src="<?php echo base_url(); ?>assets/upload/city3.jpg" alt=""/>
								<h2 class="cities-post__title"><a href="#">Barcelona, Spain</a></h2>
								<ul class="cities-post__list">
									<li>7 Reviews Wrote</li>
									<li>0 List Created</li>
								</ul>
								<a class="cities-post__link text-btn" href="#">View All Lists <span>(334)</span></a>
							</div>
							<!-- End cities-post module-->

						</div>
						<div class="item">

							<!-- cities-post module-->
							<div class="cities-post">
								<img class="cities-post__image" src="<?php echo base_url(); ?>assets/upload/city4.jpg" alt=""/>
								<h2 class="cities-post__title"><a href="#">London, United Kingdom</a></h2>
								<ul class="cities-post__list">
									<li>9 Reviews Wrote</li>
									<li>1 List Created</li>
								</ul>
								<a class="cities-post__link text-btn" href="#">View All Lists <span>(115)</span></a>
							</div>
							<!-- End cities-post module-->

						</div>
						<div class="item">

							<!-- cities-post module-->
							<div class="cities-post">
								<img class="cities-post__image" src="<?php echo base_url(); ?>assets/upload/city5.jpg" alt=""/>
								<h2 class="cities-post__title"><a href="#">Wroclaw, Poland</a></h2>
								<ul class="cities-post__list">
									<li>8 Reviews Wrote</li>
									<li>0 List Created</li>
								</ul>
								<a class="cities-post__link text-btn" href="#">View All Lists <span>(422)</span></a>
							</div>
							<!-- End cities-post module-->

						</div>
						<div class="item">

							<!-- cities-post module-->
							<div class="cities-post">
								<img class="cities-post__image" src="<?php echo base_url(); ?>assets/upload/city6.jpg" alt=""/>
								<h2 class="cities-post__title"><a href="#">Venice, Italy</a></h2>
								<ul class="cities-post__list">
									<li>7 Reviews Wrote</li>
									<li>0 List Created</li>
								</ul>
								<a class="cities-post__link text-btn" href="#">View All Lists <span>(58)</span></a>
							</div>
							<!-- End cities-post module-->

						</div>

					</div>
					<div class="center-button">
						<a  href="#" 
							class="text-btn load-others"
							data-less-text="Show Less Cities"
							data-more-text="Show More Cities"
							data-parent-class="user-detail__cities">
							<i class="la la-angle-down"></i>
							<span>Show More Cities</span>
						</a>
					</div>
				</div>
			</div>

			<!-- my lists box -->
			<div class="user-detail__favorites element-waypoint" id="favorites-box">
				<div class="container">
					<h2 class="user-detail__subtitle">My Favorites <span>(7)</span></h2>
					<div class="user-detail__favorites-box iso-call" data-item-showen="3">
						<div class="item">

							<!-- place-post module -->
							<div class="place-post">
								<div class="place-post__gal-box">
									<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/1.jpg" alt="place-image">
									<span class="place-post__rating">9.3</span>
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">Open</span> until 8:00 PM
									</p>
									<h2 class="place-post__title">
										<a href="#">Fifteen Restaurant & Cheese bar</a>
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
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="closed">Closed</span> until 11:00 AM
									</p>
									<h2 class="place-post__title">
										<a href="#">Frankies 457 Spuntino</a>
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
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">Open</span> 24/7
									</p>
									<h2 class="place-post__title">
										<a href="#">Hotel Van Gogh</a>
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
									<span class="place-post__rating">9.0</span>
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="closed">Closed</span> until 11:00 AM
									</p>
									<h2 class="place-post__title">
										<a href="#">Frankies 457 Spuntino</a>
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
									<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/5.jpg" alt="place-image">
									<span class="place-post__rating">9.1</span>
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">Likely Open</span>
									</p>
									<h2 class="place-post__title">
										<a href="#">Caffè Pascucci</a>
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
									<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/1.jpg" alt="place-image">
									<span class="place-post__rating solid-rat">6.2</span>
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">Open</span> 24/7
									</p>
									<h2 class="place-post__title">
										<a href="#">Beautiful City Hostel & Hotel</a>
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
									<img class="place-post__image" src="<?php echo base_url(); ?>assets/upload/2.jpg" alt="place-image">
									<span class="place-post__rating">9.3</span>
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
									<p class="place-post__info">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span class="open">Open</span> until 8:00 PM
									</p>
									<h2 class="place-post__title">
										<a href="#">Fifteen Restaurant & Cheese bar</a>
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
						<a  href="#" 
							class="text-btn load-others"
							data-less-text="Show Less Favorites"
							data-more-text="Show More Favorites"
							data-parent-class="user-detail__favorites-box">
							<i class="la la-angle-down"></i>
							<span>Show More Favorites</span>
						</a>
					</div>
				</div>
			</div>

			<!-- follow box -->
			<div class="user-detail__follow element-waypoint" id="follow-box">
				<div class="container">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="followers-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="followers" aria-selected="true">Followers (10)</a>
							<a class="nav-item nav-link" id="following-tab" data-toggle="tab" href="#following" role="tab" aria-controls="following" aria-selected="false">Following (3)</a>
						</div>
					</nav>

					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="followers" role="tabpanel" aria-labelledby="followers-tab">
							<div class="user-detail__follow-box owl-wrapper">
								<div class="owl-carousel" data-num="3">
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar5.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar6.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Kate G.</a>
																<span class="author-wrapper__location">
																	Dublin Ireland
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar7.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Christina Doe</a>
																<span class="author-wrapper__location">
																	United Kingdom
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar1.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar2.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Wayne Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar3.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar4.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar5.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar6.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar7.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
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

								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">
							<div class="user-detail__follow-box owl-wrapper">
								<div class="owl-carousel" data-num="3">
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar2.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Wayne Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
																</span>
															</h3>
														</div>
													</div>
													<div class="col-5">
														<a class="author-wrapper__btn follow-btn following" href="#">
															<i class="la la-eye"></i>
															Following
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar3.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
																</span>
															</h3>
														</div>
													</div>
													<div class="col-5">
														<a class="author-wrapper__btn follow-btn following" href="#">
															<i class="la la-eye"></i>
															Following
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
								
									<div class="item">

										<!-- Author-wrapper module -->
										<div class="author-wrapper author-wrapper-border">
											<div class="author-wrapper__profile">
												<div class="row">
													<div class="col-7">
														<div class="author-wrapper__content">
															<a class="author-wrapper__image" href="#"><img src="<?php echo base_url(); ?>assets/upload/avatar4.jpg" alt=""></a>
															<h3 class="author-wrapper__title">
																<a href="#">Joe Smith</a>
																<span class="author-wrapper__location">
																	United Kingdom
																</span>
															</h3>
														</div>
													</div>
													<div class="col-5">
														<a class="author-wrapper__btn follow-btn following" href="#">
															<i class="la la-eye"></i>
															Following
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

								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</section>
		<!-- End user-detail -->