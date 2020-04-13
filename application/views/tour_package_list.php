
<!--====== HOTELS LIST ==========-->
<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
    <div class="container">
        <div class="row inner_banner inner_banner_3 bg-none">
            <div class="hot-page2-alp-tit">
                <h1>Top Travel Packages</h1>
                <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. </p>
            </div>
        </div>
        <div class="row">
            <div class="hot-page2-alp-con">
                <!--LEFT LISTINGS-->
                <!--END LEFT LISTINGS-->
                <!--RIGHT LISTINGS-->
                <div class="col-md-12 hot-page2-alp-con-right">
                    <div class="hot-page2-alp-con-right-1">
                        <!--LISTINGS-->

                        <div class="row">
                            <!--LISTINGS START-->
                            <?php
                            foreach ($tour_package as $t) {
                                ?>


                                <div class="hot-page2-alp-r-list">

                                    <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                        <a href="javascript:void(0);">
                                            <div class="hot-page2-hli-1"> <img src="<?php echo base_url() . $t->image ?>" alt=""> </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="trav-list-bod">
                                            <a href="tour-details.html"><h3><?php echo $t->tour_package_name . ', ' . $t->going_to_title ?></h3></a>
                                            <p><?php echo $t->description ?></p>
                                        </div>
                                       
                        
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                            <div class="hot-page2-alp-r-hot-page-rat"></div> <span class="hot-list-p3-1"><b>Prices Starting</b></span> 
                                            <h4 class="red-text"><center>Rs. <?php echo $t->price_per_person . '/Adult' ?></center></h4>
                                            <h4 class="red-text"><center>Rs. <?php echo $t->price_per_child . '/Child' ?></center></h4>                                            <span class="hot-list-p3-4">
                                            </span>
                                            
                                           
                                           <div class="p2_book">
                                                <ul>
                                                    <li><a href="booking.html" class="link-btn">Book Now</a>
                                                    </li>    
                                                    <li><a href="<?php echo $this->config->item('base_url') ?>tour_package/detail/<?php echo $t->tour_package_id ?>" class="link-btn">View Details</a>
                                                     </li>

                                                </ul>
                                     </div>

                                        </div>
                                    </div>

                                </div>
                            <?php } ?> 

                        </div>

                    </div>
                </div>
                <!--END RIGHT LISTINGS-->
            </div>
        </div>
    </div>
</section>
