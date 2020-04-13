<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Floor">Floor</a>
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
            <!--== Country Campaigns ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit Floor</h4>

                    </div>
                     <div class="tab-inn">
                        <form action="<?php echo base_url() ?>admin/Floor/update" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="hidden" name="floor_id" value="<?php echo $floor->floor_id ?>">
                                    <input id="list-title" type="text" name="floor_no" class="validate" value="<?php echo $floor->floor_no ?>">
                                    <label for="list-title">Floor Number</label>
                                </div>
                                
                                <div class="input-field col s6">
                                    <input id="list-title" type="text" name="floor_name" class="validate" value="<?php echo $floor->floor_name ?>">
                                    <label for="list-title">Floor Name</label>
                                </div>
                       <div class="row">
                            
                                <div class="input-field col s2">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                                <div class="input-field col s2">
                                    <a href="<?php echo base_url() ?>admin/floor" class="waves-effect waves-light btn-large">Cancel</a>
                               
                                </div>
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