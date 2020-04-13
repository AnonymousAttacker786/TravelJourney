<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Tour_package/index">All Tour Packages</a>
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
                        <h4>All package</h4>
                        
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tour Package Title</th>
                                        <th>Price</th>
                                        <th>No. of days</th>
                                        <th>Origin</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    foreach ($tour_package as $t) {
                                        ?>
                                        <tr>
                                            <td><span class="list-img"><img src="<?php echo base_url() . $t->image ?>" alt=""></span></td>
                                            <td><a href="#">
                                                    <span class="list-enq-name"><?php echo $t->tour_package_name ?></span>
                                                    <span class="list-enq-city"><?php echo $t->category_name . ', ' . $t->going_to_title . ' (' . $t->tour_type_name . ')' ?></span></a>
                                            </td>
                                            <td><?php echo $t->price_per_person . '/Person' ?></br><?php echo $t->price_per_child . '/Child' ?></td>
                                            <td><?php echo $t->no_of_days ?></td>
                                            <td><?php echo $t->origin ?></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/tour_package/view/<?php echo $t->tour_package_id ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </td>
                                                   
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/tour_package/tour_package_edit/<?php echo $t->tour_package_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a  onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_package/delete/<?php echo $t->tour_package_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
