<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/room/add_step1"> Add Room</a></li>
           </ul>
    </div>
    <!--== DASHBOARD INFO ==-->

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add New Room</h4>
           </div>
            <div class="bor">
                <form id="tour_package_add_step1" action="<?php echo base_url() ?>admin/Room/save_step1" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="room_no">
                            <label for="list-title">Room Number</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="room_title">
                            <label for="list-title">Room Title</label>
                        </div>
                    </div>
                    <div class="row">
                            
                        <div class="input-field col s12">
                            <select name="hotel_id">
                                    <option value="">Hotel Name</option>
                                     <?php
                                  foreach ($hotel_list as $hl) {
                                  ?>
                                    <option value="<?php echo $hl->hotel_id ?>"><?php echo $hl->hotel_name ?></option>
                                   <?php
                                     }
                                    ?>
  
                            </select>
                            <label>Hotel Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="hotel_location">
                            <label for="list-title">Hotel Location</label>
                        </div>
                        <div class="input-field col s12">
                               <textarea id="textarea1" class="materialize-textarea" name="location_description"></textarea>
                               <label for="textarea1"> Location Descriptions</label>
                        </div>
                        
                        <div class="input-field col s12">
                            <select name="floor_id">
                                <option value="">Floor Number</option>
                                 <?php
                                     foreach ($floor_list as $fl) {
                                 ?>
                                       <option value="<?php echo $fl->floor_id ?>"><?php echo $fl->floor_no ?></option>
                                  <?php
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
                                 ?>
                                
                                    <option value="<?php echo $rtl->room_type_id ?>"><?php echo $rtl->room_type ?></option>
                                 <?php
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
                                 ?>
                                
                                <option value="<?php echo $rcl->room_category_id ?>"><?php echo $rcl->room_category ?></option>
                                 <?php
                                   }
                                  ?> 
                            </select>
                            <label>Room Category</label>
                        </div>
                        
                    </div>    
                     <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="max_adult">
                            <label for="list-title">Maximum Person</label>
                        </div>
                         
                         <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="no_of_beds">
                            <label for="list-title">Number Of Beds</label>
                        </div>
                         <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="price_per_night">
                            <label for="list-title">Price Per Night</label>
                        </div>
                    </div>
                    <div class="row">
                     
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="room_description"></textarea>
                            <label for="textarea1">Descriptions</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="room_image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Room Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="Next">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

