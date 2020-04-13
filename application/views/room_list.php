<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
		<div class="container">
			<div class="row inner_banner inner_banner_3 bg-none">
				<div class="hot-page2-alp-tit">
					<h1>Hotel & Restaurants in Vancouver </h1>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. </p>
				</div>
			</div>
			<div class="row">
				<			
                    <div class="hot-page2-alp-con-right-1">
                        <!--LISTINGS-->

                        <div class="row">
                            <!--LISTINGS START-->
                            <?php
                            foreach ($room as $r) {
                                ?>


                                <div class="hot-page2-alp-r-list">

                                    <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                        <a href="javascript:void(0);">
                                            <div class="hot-page2-hli-1"> <img src="<?php echo base_url() . $r->room_image ?>" alt=""> </div>
                                        </a>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <h3><?php echo $r->hotel_name ?></h3></a>
					  
                                        <div class="ticket">
                                                     <ul>
                                                         <li><?php echo $r->room_type ?></li>
                                                         <li><?php echo $r->room_category ?></li>
                                                         
                                                         
                                                         
                                                         
                                                     </ul>
                                        </div>
                                                  
                                        <div class="hot-page2-alp-ri-p2">
						  <ul>
					              <li><?php echo $r->location_description . ' ,' . $r->hotel_location ?></li>
                                                  </ul>
                                                
                                      </div>
                                    <div class="featur">
                                            <ul>
                                                <li><?php echo 'Maximum Person :'.$r->max_adult ?></li>
                                              <br/>  <li><?php echo 'Total Beds :'.$r->no_of_beds ?></li>
                                            </ul>
                                   </div>
                        
                                   
                                    </div>
                                    <div class="col-md-3">
                                            <div class="hot-page2-alp-ri-p3"><span class="hot-list-p3-1"><b>Price Per Night</b></span><h4><span class="hot-list-p3-2"><?php echo $r->price_per_night ?>  </span></h4><span class="hot-list-p3-4">
                                            </span> </div>
                                        <div class="p2_book">
                                        <ul>
                                            <li><a href="booking.html" class="link-btn">Book Now</a>
                                            </li>    
                                            <li><a href="<?php echo $this->config->item('base_url') ?>room/detail/<?php echo $r->room_id ?>" class="link-btn">View Details</a>
                                                </li>

                                            </li>
                                      </ul>
                                     </div>

				    </div>
                                </div>
                            <?php } ?> 

                        </div>
                      </div>
                
                    </div>
              	</div>
			</div>
			 
	</section>
	