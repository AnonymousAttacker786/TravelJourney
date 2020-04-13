        
<link href="<?php echo $this->config->item('admin_assets_url') ?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo $this->config->item('admin_assets_url') ?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->config->item('admin_assets_url') ?>jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Tour_package/tour_package_edit">Edit Tour Packages</a>
            </li>
        </ul>
    </div>
    
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="row">
                            <div class="col-md-12">
                                 <div class="panel with-nav-tabs panel-primary">
                                    <div class="panel-heading">
                                       <ul class="nav nav-tabs">
                                           <li class="active"><a href="#tab1primary" data-toggle="tab">Tour Date</a></li>
                                           <li><a href="#tab2primary" data-toggle="tab">Pickup Location</a></li>
                                           <li><a href="#tab3primary" data-toggle="tab">Drop Location</a></li>
                                           <li><a href="#tab3primary" data-toggle="tab">Places</a></li>
                                           <li><a href="#tab3primary" data-toggle="tab">Inclusion</a></li>
                                           <li><a href="#tab3primary" data-toggle="tab">Exclusion</a></li>
                                           <li><a href="#tab3primary" data-toggle="tab">Itinerary</a></li>
                                        
                                        </ul>
                                     </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                
                                <!--tour package edit-->
                                <div class="tab-pane fade in active" id="tab1primary">
                              <div class="sb2-2-3">
                                     <div class="row">
                                     <div class="col-md-12">
                                        <div class="box-inn-sp">
                                         <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                          <table class="table table-hover">
                                            <thead>
                                                  <tr>
                                                      <th>Sr.No</th>
                                                       <th>Departure Date</th>
                                                       <th>Arrival Date</th>
                                                       <th>Edit</th>
                                                       <th>Delete</th>
                                                   </tr>
                                            </thead>
                                           <tbody>
                                              <?php
                                              $srno = 1;
                                                ?>
                                                        <tr>
                                                            <td><?php echo $srno; ?></td>
                                                           
                                                            <td><?php echo $tour_date->departure_date ?></td>
                                                            <td><?php echo $tour_date->arrival_date ?></td>
                                                           
                                                             <td>
                                                                <a href="<?php echo base_url() ?>admin/tour_package/tour_package_edit/<?php echo $td->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                              </td>
                                                                <td>
                                                                   <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete/<?php echo $td->tour_package_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                 </td>
                                                        </tr>
                                                     <?php 
                                                            $srno++;
                                                      ?>
                                                     </tbody>
                                                    </table>
                                                     </div>
                                                    </div>
                                                  </div>
                                                </div>
                                             </div>
                                        </div>
                                      </div>
                                
                                
                              <!--tour date edit-->          
                          
                                <div class="tab-pane fade" id="tab2primary">
                                   
                                </div>
                             <!--pickup location edit-->          
                            
                              <div class="tab-pane fade" id="tab3primary">
                                  Primary 3
                              
                              
                              </div>
                                
                             <!--drop location edit-->          
                            
                              <div class="tab-pane fade" id="tab4primary">Primary 4</div>
                               
                              <!--places edit-->          
                             
                              
                              <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                           
                              <!-- inclusion edit-->          
                               
                              <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                              
                              <!-- exclusion edit-->          
                             
                              <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                             
                              
                              <!-- Itinerary edit-->          
                             
                              <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                             
                            </div>
                            </div>
                           </div>
                         </div>
                       </div>
                    <br/>
                    
                </div>
            </div>
        </div>
    </div>
</div>
