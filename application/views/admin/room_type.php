<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Room_type">Room Type</a>
            </li>
            
        </ul>
    </div>
    <?php
                 if ($this->session->flashdata('msg')) {
                 ?>
                  <div class="alert alert-success">
                   <?php echo $this->session->flashdata('msg') ?>
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
            <!--== Country Campaigns ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add Room Type</h4>

                    </div>
                     <div class="tab-inn">
                        <form action="<?php echo base_url() ?>admin/Room_type/save" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="list-title" type="text" name="room_type" class="validate">
                                    <label for="list-title">Room Type</label>
                                </div>
                                <div class="input-field col s2">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <!--== Country Campaigns ==-->

        </div>
    </div>
    <!--== table ==-->

    <div class="sb2-2-3">
        <div class="row">
            <!--== Country Campaigns ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Room Type List</h4>

                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Room Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    $srno = 1;
                                    foreach ($room_type_list as $rtl) {
                                        ?>
                                  
                                        <tr>
                                            <td><span class="txt-dark weight-500"><?php echo $srno ?></span></td>
                                            <td><?php echo $rtl->room_type ?></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/room_type/edit/<?php echo $rtl->room_type_id ?>" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/room_type/delete/<?php echo $rtl->room_type_id ?>" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                            
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

            <!--== Country Campaigns ==-->

        </div>
    </div>

</div>   