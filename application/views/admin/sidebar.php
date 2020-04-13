
<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li><img src="<?php echo $this->config->item('admin_assets_url') ?>images/alpesh logo.jpg" alt="">
                    </li>
                    <li>
                        <h5>Alpesh Chaudhari <span> Web, Developer</span></h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url() ?>admin/going_to"><i class="fa fa-plane" aria-hidden="true"></i> Going to</a></li>
                    <li><a href="<?php echo base_url() ?>admin/category"><i class="fa fa-list" aria-hidden="true"></i> Category</a></li>
                   <li><a href="<?php echo base_url() ?>admin/tour_type"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Type</a>
                                            </li>
                    
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Tour packages</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="<?php echo base_url() ?>admin/tour_package/add_step1">Add</a></li>
                                <li><a href="<?php echo base_url() ?>admin/tour_package/index">List</a></li>                                
                                                     
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="<?php echo base_url() ?>admin/Customer">All Users</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>admin/Customer/add">Add New user</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php echo base_url() ?>admin/Hotel" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Hotels</a>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-hotel" aria-hidden="true"></i>Room</a>
                            <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="<?php echo base_url() ?>admin/Room">All Room</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>admin/Room/add_step1">Add New Room</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                  <li><a href="<?php echo base_url() ?>admin/Room_type" class="collapsible-header"><i class="fa fa-hotel" aria-hidden="true"></i>Room Type</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>admin/Floor" class="collapsible-header"><i class="fa fa-list-ol" aria-hidden="true"></i>Floor</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>admin/Room_category" class="collapsible-header"><i class="fa fa-list-alt" aria-hidden="true"></i>Room Category</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>admin/Location" class="collapsible-header"><i class="fa fa-location-arrow" aria-hidden="true"></i>Location</a>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Booking & Enquiry</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="hotel-booking-all.html">Hotel</a>
                                </li>
                                <li><a href="package-booking-all.html">Package</a>
                                </li>
                                <li><a href="sight-see-booking-all.html">Sight Seeings</a>
                                </li>
                                <li><a href="event-booking-all.html">Events</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articals</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="blog-all.html">All Blogs</a>
                                </li>
                                <li><a href="blog-add.html">Add Blog</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="social-media.html"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>admin/login" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
