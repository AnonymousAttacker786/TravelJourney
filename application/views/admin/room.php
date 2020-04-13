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
                    <div class="inn-title">
                        <h4>All Rooms</h4>
                        
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Room No</th>
                                        <th>Room Name</th>
                                        <th>Floor No</th>
                                        <th>Room Details</th>
                                        <th>person</th>
                                        <th>No Of Beds</th>
                                        <th>Price Per Night</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    foreach ($room as $r) {
                                        ?>
                                        <tr>
                                            <td><span class="list-img"><img src="<?php echo base_url() . $r->room_image ?>" alt=""</span></td>
                                            <td><?php echo $r->room_no ?></td>
                                            <td><?php echo $r->room_title ?></td>
                                            <td><?php echo $r->floor_no ?></td>
                                            <td><a href="#">
                                                    <span class="list-enq-name"><?php echo $r->hotel_name ?></span>
                                                    <span class="list-enq-city"><?php echo $r->room_category. ', ' . $r->hotel_location . ' (' . $r->room_type . ')' ?></span></a>
                                            </td>
                                            <td><?php echo $r->max_adult ?></td>
                                            <td><?php echo $r->no_of_beds ?></td>
                                            <td><?php echo $r->price_per_night ?></td>
                                            
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/room/view/<?php echo $r->room_id ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="<?php echo base_url() ?>admin/room/room_edit/<?php echo $r->room_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/room/delete/<?php echo $r->room_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                           </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
