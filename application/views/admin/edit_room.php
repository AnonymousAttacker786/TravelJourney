<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/room/room_edit">Edit Room</a></li>
           </ul>
    </div>
    <!--== DASHBOARD INFO ==-->

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Edit Room Details</h4>
           </div>
            <div class="bor">
                <form id="tour_package_add_step1" action="<?php echo base_url() ?>admin/Room/update_room" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                             <input type="hidden" name="room_id" value="<?php echo $room->room_id ?>">
                             <input id="list-title" type="number" class="validate" name="room_no" value="<?php echo $room->room_no ?>">
                            <label for="list-title">Room Number</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="room_title" value="<?php echo $room->room_title ?>">
                            <label for="list-title">Room Title</label>
                        </div>
                    </div>
                    <div class="row">
                            
                        <div class="input-field col s12">
                            <select name="hotel_id">
                                <option value="">Hotel Name</option>
                                 <?php
                                  foreach ($hotel_list as $hl) {
                                  if ($room->hotel_id == $hl->hotel_id) {
                                      ?>
                                      <option selected value="<?php echo $hl->hotel_id ?>"><?php echo $hl->hotel_name ?></option>
                                    <?php } else {
                                      ?>
                                    <option value="<?php echo $hl->hotel_id ?>"><?php echo $hl->hotel_name ?></option>
                                   <?php
                                     }
                                  }
                                    ?>
  
                            </select>
                            <label>Hotel Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="hotel_location" value="<?php echo $room->hotel_location ?>">
                            <label for="list-title">Hotel Location</label>
                        </div>
                        <div class="input-field col s12">
                               <textarea id="textarea1" class="materialize-textarea" name="location_description"><?php echo $room->location_description ?></textarea>
                               <label for="textarea1"> Location Descriptions</label>
                        </div>
                        
                        <div class="input-field col s12">
                            <select name="floor_id">
                                <option value="">Floor Number</option>
                                 <?php
                                   foreach ($floor_list as $fl) {
                                  if ($room->floor_id == $fl->floor_id) {
                                   
                                   ?>
                                  <option selected value="<?php echo $fl->floor_id ?>"><?php echo $fl->floor_no ?></option>
                                    <?php } else {
                                    ?>
                                       <option value="<?php echo $fl->floor_id ?>"><?php echo $fl->floor_no ?></option>
                                  <?php
                                     }
                                   }
                                  ?>

                            </select>
                            <label>Floor Number</label>
                        </div>
                        
                        
                        <div class="input-field col s12">
                            <select name="room_type_id">
                                <option value="">Room Type</option>
                                 <?php
                                     foreach ($room_type_list as $rtl) {
                                    if ($room->room_type_id == $rtl->room_type_id) {
                                   
                                   ?>
                                  <option selected value="<?php echo $rtl->room_type_id ?>"><?php echo $rtl->room_type ?></option>
                                   <?php } else {
                                    ?>
                                       <option value="<?php echo $rtl->room_type_id ?>"><?php echo $rtl->room_type ?></option>
                                    <?php
                                     }
                                   }
                                  ?>
                            </select>
                            <label>Room Type</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="room_category_id">
                                 <option value="">Room Category</option>
                                 <?php
                                    foreach ($room_category_list as $rcl) {
                                    if ($room->room_category_id == $rcl->room_category_id) {
                                   
                                   ?>
                                  <option selected value="<?php echo $rcl->room_category_id ?>"><?php echo $rcl->room_category ?></option>
                                   <?php } else {
                                    ?>
                                 
                                    <option value="<?php echo $rcl->room_category_id ?>"><?php echo $rcl->room_category ?></option>
                                    <?php
                                      }
                                    }
                                    ?> 
                            </select>
                            <label>Room Category</label>
                        </div>
                                               
                    </div>    
                     <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="max_adult" value="<?php echo $room->max_adult ?>">
                            <label for="list-title">Maximum Person</label>
                        </div>
                         
                         <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="no_of_beds" value="<?php echo $room->no_of_beds ?>">
                            <label for="list-title">Number Of Beds</label>
                        </div>
                         <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="price_per_night" value="<?php echo $room->price_per_night ?>">
                            <label for="list-title">Price Per Night</label>
                        </div>
                    </div>
                    <div class="row">
                     
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="room_description"><?php echo $room->room_description ?></textarea>
                            <label for="textarea1">Descriptions</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="SUBMIT">
                              <a href="<?php echo base_url() ?>admin/room" class="waves-effect waves-light btn-large">Cancel</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

