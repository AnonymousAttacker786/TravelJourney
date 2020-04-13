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
                        <h4>Edit Room Type</h4>

                    </div>
                     <div class="tab-inn">
                        <form action="<?php echo base_url() ?>admin/Room_type/update" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="hidden" name="room_type_id" value="<?php echo $room_type->room_type_id ?>">
                                    <input id="list-title" type="text" name="room_type" class="validate" value="<?php echo $room_type->room_type ?>">
                                    <label for="list-title">Room Type</label>
                                </div>
                                <div class="input-field col s2">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                                 <div class="input-field col s2">
                                    <a href="<?php echo base_url() ?>admin/room_type" class="waves-effect waves-light btn-large">Cancel</a>
                                 </div>
                           </div>
                        </form>

                    </div>
                </div>
            </div>

            <!--== Country Campaigns ==-->

        </div>
    </div>
    
</div>   