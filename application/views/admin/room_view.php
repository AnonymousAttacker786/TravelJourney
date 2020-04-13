        
<link href="<?php echo $this->config->item('admin_assets_url') ?>css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo $this->config->item('admin_assets_url') ?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->config->item('admin_assets_url') ?>jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Room">All Room List</a>
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
                                        <li class="active"><a href="#tab1primary" data-toggle="tab">Room Facility</a></li>
                                         
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">

                                        <!--room faciliry edit-->
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
                                                                                <th>Room Facility</th>
                                                                                <th>Edit</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $srno = 1;
                                                                            foreach ($room_facility_list as $rfl) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $srno; ?></td>
                                                                                    <td><?php echo $rfl->title ?></td>
                                                                                   
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() ?>admin/room_facility/edit/<?php echo $rfl->room_facility_id . '/' . $rfl->room_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/room_facility/delete/<?php echo $rfl->room_facility_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                        <!--location edit-->          

                                        
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
