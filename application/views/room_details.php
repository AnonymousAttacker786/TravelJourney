<!--====== BANNER ==========-->
	<section>
		<div class="rows inner_banner inner_banner_2">
			<div class="container">
				<h2><span><?php echo $room->hotel_name ?></span></h2>
				
				<p><?php echo $room->location_description .' , ' .$room->hotel_location ?></p>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS - BOOKING ==========-->
	<section>
		<div class="rows banner_book" id="inner-page-title">
			<div class="container">
				<div class="banner_book_1">
					<ul>
						<li class="dl1"><?php echo 'Location : ' . $room->hotel_location ?></li>
						<li class="dl2"><?php echo 'Price Per Night : ' . $room->price_per_night ?></li>
						<li class="dl3"><?php echo 'Category : ' . $room->room_category ?></li>
						<li class="dl3"><?php echo 'Room Type : ' . $room->room_type ?></li>
						
                                                <li class="dl4"><a href="booking.html">Book Now</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space">
				<div class="col-md-9">
					<!--====== TOUR TITLE ==========-->
					<div class="tour_head">
						<h2><?php echo $room->hotel_name ?></h2> </div>
					<!--====== TOUR DESCRIPTION ==========-->
					
                                        <div class="tour_head1 hotel-com-color">
						<h3>About Hotel</h3>
						<p><?php echo $room->room_description ?></p>
					</div>
					<!--====== ROOMS: HOTEL BOOKING ==========-->
					<div class="tour_head1 hotel-book-room">
						<h3>Photo Gallery</h3>
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators carousel-indicators-1">
								<li data-target="#myCarousel1" data-slide-to="0"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s1.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="1"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s2.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="2"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s3.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="3"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s4.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="4"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s5.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="5"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s6.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="6"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s7.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="7"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s8.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="8"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s9.jpg" alt="Chania">
								</li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner carousel-inner1" role="listbox">
								<div class="item active"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s1.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s2.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s3.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s4.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s5.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s6.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s7.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s8.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/s9.jpg" alt="Chania" width="460" height="345"> </div>
							</div>
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
							<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
						</div>
					</div>
					<!--====== ABOUT THE TOUR ==========-->
					<div class="tour_head1">
						<h3>About Room</h3>
                                                  
                                                   <table>
                                                        <tr>
                                                         <th style="vertical-align: top">
                                                         <ul class="list-group">
                                                                <li class="list-group-item active">ROOM FACILITY</li>
                                                                 <?php foreach ($room_facility as $rf) { ?>
                                                                 <li class="list-group-item"><?php echo $rf->title ?></li>
                                                                <?php } ?>


                                                        </ul>
                                                        </th>
                                                        </tr>
                                                    </table>
					</div>
					<!--====== TOUR LOCATION ==========-->
					</div>
				<div class="col-md-3 tour_r">
					<!--====== TRIP INFORMATION ==========-->
					<div class="tour_right tour_incl tour-ri-com">
						<h3>Room Information</h3>
						<ul>
							<li><b>Floor No : </b><?php echo $room->floor_no ?></li>
                                                        <li><b>Room No : </b><?php echo $room->room_no ?></li>
                                                        <li><b>Room Title : </b><?php echo $room->room_title ?></li>
                                                        <li><b>Maximum Person : </b><?php echo $room->max_adult ?></li>
                                                        <li><b>Total Beds : </b><?php echo $room->no_of_beds ?></li>
						</ul>
					</div>
					<!--====== PACKAGE SHARE ==========-->
					<div class="tour_right head_right tour_help tour-ri-com">
						<h3>Help & Support</h3>
						<div class="tour_help_1">
							<h4 class="tour_help_1_call">Call Us Now</h4>
							<h4><i class="fa fa-phone" aria-hidden="true"></i>+91 9016355582</h4> </div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	