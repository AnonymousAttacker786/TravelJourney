<section>

    <div class="rows inner_banner inner_banner_4">

        <div class="container">
            <h2><span><?php echo $tour_package->tour_package_name ?> - </span> <?php echo $tour_package->tour_type_name ?></h2>

            <p>Book travel packages and enjoy your holidays with distinctive experience</p>
        </div>
    </div>

</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
    <div class="rows banner_book" id="inner-page-title">
        <div class="container">
            <div class="banner_book_1">
                <ul>
                    <li>Location : <?php
                        echo $tour_package->going_to_title;
                        ?></li>
                    <li><span class="fa fa-rupee"></span><?php echo $tour_package->price_per_person . ' / Adult' ?></li>
                    <li><span class="fa fa-rupee"></span><?php echo $tour_package->price_per_child . ' / Child' ?></li>
                    <li><?php echo $tour_package->no_of_days ?> Days / <?php echo $tour_package->no_of_days - 1 ?> Nights</li>
                    <li><a href="booking.html">Book Now</a> </li>
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
                    <h2><?php echo $tour_package->tour_package_name ?><span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span><span class="tour_rat">4.5</span></h2> </div>
                <!--====== TOUR DESCRIPTION ==========-->
                <div class="tour_head1">
                    <h3>Description</h3>
                    <p><?php echo $tour_package->description ?></p>
                </div>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <div class="tour_head1 hotel-book-room">
                    <h3>Photo Gallery</h3>
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-indicators-1">
                            <li data-target="#myCarousel1" data-slide-to="0"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t1.jpg" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="1"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t2.jpg" alt="Chania"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t3.jpg" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="3"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t4.jpg" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="4"><img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t5.jpg" alt="Chania">
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
                            <div class="item active"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t1.jpg" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t2.jpg" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t3.jpg" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t4.jpg" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t5.jpg" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t6.jpg" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t7.jpg" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t8.jpg" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="<?php echo $this->config->item('user_assets_url') ?>images/gallery/t9.jpg" alt="Chania" width="460" height="345"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                        <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
                    </div>
                </div>
                <!--====== TOUR LOCATION ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1">
                    <h3>About The Tour</h3>





                    <table>
                        <tr>
                            <th style="vertical-align: top">
                                <ul class="list-group">
                                    <li class="list-group-item active">Places Covered</li>
                                    <?php foreach ($tour_package_places as $tpp) { ?>
                                        <li class="list-group-item"><?php echo $tpp->title ?></li>
                                    <?php } ?>


                                </ul>
                            </th>
                            <th>
                            <th style="vertical-align: top" >
                        <li class="list-group-item active">Inclusion</li>
                        <?php foreach ($tour_package_inclusion as $tpi) { ?>
                            <li class="list-group-item"><?php echo $tpi->title ?></li>
                        <?php } ?>
                        </ul>
                        </th>
                        <th>

                        <th style="vertical-align: top" >
                        <li class="list-group-item active">Exclusion</li>
                        <?php foreach ($tour_package_exclusion as $tpe) { ?>
                            <li class="list-group-item"><?php echo $tpe->title ?></li>
                        <?php } ?>
                        </ul>

                        </th>
                        </tr>


                    </table>
                </div>
                <!--====== DURATION ==========-->
                <div class="tour_head1 l-info-pack-days days">
                    <h3>Detailed Day Wise Itinerary</h3>
                      
                  <ul>
                     <?php
                     $sr_no=1;
                     foreach ($tour_package_itinerary as $tpit) {  ?>
                    
                        <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4><span>Day :<?php echo $sr_no ?> </span><?php echo $tpit->title ?></h4>
                            <p><?php echo $tpit->description ?></p>
                        </li>
                       
                     <?php 
                     $sr_no++;
                     } ?>
                  
                 </ul>
                       
                </div>
                <div>

                </div>
            </div>

            <div class="col-md-3 tour_r">
                <!--====== TRIP INFORMATION ==========-->

                <div class="tour_right tour_incl tour-ri-com">
                    <h3>Pickup Locations</h3>
                    <ul>
                        <?php foreach ($tour_dates_pickup_location as $pl) { ?>
                            <li><?php echo $pl->pickup_location ?></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="tour_right tour_incl tour-ri-com">
                    <h3>Drop Locations</h3>
                    <ul>
                        <?php foreach ($tour_dates_drop_location as $dl) { ?>

                            <li><?php echo $dl->drop_location ?></li>

                        <?php } ?>
                    </ul>
                </div>

                <div class="tour_right tour_incl tour-ri-com">
                    <h3>Tour Dates</h3>
                    <ul>
                        <?php foreach ($tour_date as $td) { ?>

                            <li><?php echo date('d/m/Y', strtotime($td->departure_date)) . ' - ' . date('d/m/Y', strtotime($td->arrival_date)) ?></li>

                        <?php } ?>
                    </ul>
                </div>


                <!--====== HELP PACKAGE ==========-->
                <div class="tour_right head_right tour_help tour-ri-com">
                    <h3>Help & Support</h3>
                    <div class="tour_help_1">
                        <h4 class="tour_help_1_call">Call Us Now</h4>
                        <h4><i class="fa fa-phone" aria-hidden="true"></i> +91 90163 55582</h4> </div>
                </div>
                <!--====== PUPULAR TOUR PACKAGES ==========-->

            </div>
        </div>
    </div>
</div>
</section>
<!--====== TIPS BEFORE TRAVEL ==========-->
