<section>
		<div class="tr-register">
			<div class="tr-regi-form v2-search-form">
				<h4>Search Best<span> Rooms</span></h4>
				<p>It's free and always will be.</p>
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
							</div>
							<div class="row">
                                                             
								<div class="input-field col s12">
									<select name="hotel_location">
                                                                            <option value="">Select Hotel Location</option>
                                
                                                                            <?php
                                                                               foreach ($room as $r) {
                                                                            ?>

										<option value="<?php echo $r->hotel_location ?>"><?php echo $r->hotel_location ?></option>
								            <?php
                                                                             }
                                                                            ?>
  

									</select>
                                                                      
								</div>
                                                               
                                                               <div class="input-field col s12">
									<select name="room_category_id">
                                                                            <option value="">Select Room Category</option>
                                
                                                                            <?php
                                                                               foreach ($room as $r) {
                                                                            ?>

										<option value="<?php echo $r->room_category_id ?>"><?php echo $r->room_category ?></option>
								            <?php
                                                                             }
                                                                            ?>
  

									</select>
								</div>
                                                               <div class="input-field col s12">
									<select name="room_type_id">
                                                                            <option value="">Select Room Type</option>
                                
                                                                            <?php
                                                                               foreach ($room as $r) {
                                                                            ?>

										<option value="<?php echo $r->room_type_id ?>"><?php echo $r->room_type ?></option>
								            <?php
                                                                             }
                                                                            ?>
  

									</select>
	
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="no_of_adult">
                                                                            <option value="">No Of Adults</option>
                                
                                                                            <?php
                                                                               foreach ($room as $r) {
                                                                            ?>

										<option value="<?php echo $r->max_adult ?>"><?php echo $r->max_adult ?></option>
								            <?php
                                                                             }
                                                                            ?>
  

									</select>
	
								</div>
								<div class="input-field col s6">
									<select name="price_per_night">
                                                                            <option value="">Price Per Night</option>
                                
                                                                            <?php
                                                                               foreach ($room as $r) {
                                                                            ?>

										<option value="<?php echo $r->price_per_night ?>"><?php echo 'Rs.'. $r->price_per_night ?></option>
								            <?php
                                                                             }
                                                                            ?>
  

									</select>
	

								</div>
							</div>							
                                                        <div class="row">
							       <div class="input-field col s12">
									<input value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
                                                        </div>
							<div class="row">
								<div class="p2_book">
                                                                     <ul>
                                                                        <li><a href="<?php echo $this->config->item('base_url') ?>room/search/<?php echo $r->hotel_location . '/' . $r->room_category_id . '/' . $r->room_type_id . '/' .$r->max_adult .'/'.$r->price_per_night ?>" class="link-btn">Search</a>
                                                                        </li>

                                                                    </li>
                                                                    </ul>
                                                                </div>
							</div>
			</div>
		</div>
	</section>
