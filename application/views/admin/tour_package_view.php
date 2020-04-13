        
<link href="<?php echo $this->config->item('admin_assets_url') ?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo $this->config->item('admin_assets_url') ?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->config->item('admin_assets_url') ?>jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
        </ul>
    </div>
    <?php
    if ($this->session->flashdata('msg')) {
        ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('msg') ?>
        </div>
        <?php
    } else if ($this->session->flashdata('err')) {
        ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('err') ?>
        </div>
        <?php
    }
    ?>

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
                                        <li><a href="#tab4primary" data-toggle="tab">Places</a></li>
                                        <li><a href="#tab5primary" data-toggle="tab">Inclusion</a></li>
                                        <li><a href="#tab6primary" data-toggle="tab">Exclusion</a></li>
                                        <li><a href="#tab7primary" data-toggle="tab">Itinerary</a></li>

                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">

                                        <!--tour date edit-->
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
                                                                            foreach ($tour_date_list as $td) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $srno; ?></td>
                                                                                    <td><?php echo date('d/m/Y', strtotime($td->departure_date)) ?></td>
                                                                                    <td><?php echo date('d/m/Y', strtotime($td->arrival_date)) ?></td>

                                                                                    <td>
                                                                                        <a href="<?php echo base_url() ?>admin/tour_package/tour_date_edit/<?php echo $td->tour_date_id . '/' . $td->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete_tour_date/<?php echo $td->tour_date_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                              $srno++;
                                                                         
                                                                            }
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


                                        <!--tour pickup location edit-->          

                                        <div class="tab-pane fade" id="tab2primary">
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
                                                                                <th>Pickup Location</th>
                                                                                <th>Edit</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $srno = 1;
                                                                            foreach ($tour_pickup_location_list as $tpl) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $srno; ?></td>
                                                                                    <td><?php echo $tpl->pickup_location ?></td>
                                                                                    
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() ?>admin/tour_package/tour_pickup_location_edit/<?php echo $tpl->tour_date_pickup_location_id . '/' . $tpl->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete_tour_package_pickup_location/<?php echo $tpl->tour_date_pickup_location_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                              $srno++;
                                                                         
                                                                            }
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
                                        <!-- tour drop location edit-->          

                                        <div class="tab-pane fade" id="tab3primary">
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
                                                                                <th>Drop Location</th>
                                                                                <th>Edit</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $srno = 1;
                                                                            foreach ($tour_drop_location_list as $tdl) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $srno; ?></td>
                                                                                    <td><?php echo $tdl->drop_location ?></td>
                                                                                    
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() ?>admin/tour_package/tour_drop_location_edit/<?php echo $tdl->tour_date_drop_location_id . '/' . $tdl->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete_tour_package_drop_location/<?php echo $tdl->tour_date_drop_location_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                              $srno++;
                                                                         
                                                                            }
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

                                        <!--tour places edit-->          

                                        <div class="tab-pane fade" id="tab4primary">
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
                                                                                <th>Tour Package Places</th>
                                                                                <th>Edit</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $srno = 1;
                                                                            foreach ($tour_package_places_list as $tpp) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $srno; ?></td>
                                                                                    <td><?php echo $tpp->title ?></td>
                                                                                    
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() ?>admin/tour_package/tour_package_places_edit/<?php echo $tpp->tour_package_place_id . '/' . $tpp->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete_tour_package_places/<?php echo $tpp->tour_package_place_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                              $srno++;
                                                                         
                                                                            }
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

                                        <!--tour package inclusion edit-->          


                                        <div class="tab-pane fade" id="tab5primary">
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
                                                                                <th>Tour Package Inclusion</th>
                                                                                <th>Edit</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $srno = 1;
                                                                            foreach ($tour_package_inclusion_list as $tpi) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $srno; ?></td>
                                                                                    <td><?php echo $tpi->title ?></td>
                                                                                    
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() ?>admin/tour_package/tour_package_inclusion_edit/<?php echo $tpi->tour_package_inclusion_id . '/' . $tpi->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete_tour_package_inclusion/<?php echo $tpi->tour_package_inclusion_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                              $srno++;
                                                                         
                                                                            }
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

                                        <!-- tour package exclusion edit-->          

                                        <div class="tab-pane fade" id="tab6primary">
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
                                                                                <th>Tour Package Exclusion</th>
                                                                                <th>Edit</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $srno = 1;
                                                                            foreach ($tour_package_exclusion_list as $tpe) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $srno; ?></td>
                                                                                    <td><?php echo $tpe->title ?></td>
                                                                                    
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() ?>admin/tour_package/tour_package_exclusion_edit/<?php echo $tpe->tour_package_exclusion_id . '/' . $tpe->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete_tour_package_exclusion/<?php echo $tpe->tour_package_exclusion_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                              $srno++;
                                                                         
                                                                            }
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

                                        <!-- tour package itinerary edit-->          

                                        <div class="tab-pane fade" id="tab7primary">
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
                                                                                <th>Title</th>
                                                                                <th>Description</th>
                                                                                <th>Edit</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $srno = 1;
                                                                            foreach ($tour_package_itinerary_list as $tpit) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $srno; ?></td>
                                                                                    <td><?php echo $tpit->title ?></td>
                                                                                    <td><?php echo $tpit->description ?></td>
                                                                                    
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() ?>admin/tour_package/tour_package_itinerary_edit/<?php echo $tpit->tour_package_itinerary_id . '/' . $tpit->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete_tour_package_itinerary/<?php echo $tpit->tour_package_itinerary_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                              $srno++;
                                                                         
                                                                            }
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
