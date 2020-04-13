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
                        <h4>Add Floor</h4>

                    </div>
                     <div class="tab-inn">
                        <form action="<?php echo base_url() ?>admin/Floor/save" method="post">
                            <div class="row">
                                <div class="input-field col s5">
                                    <input id="list-title" type="text" name="floor_no" class="validate">
                                    <label for="list-title">Floor Number</label>
                                </div>
                                
                                <div class="input-field col s5">
                                    <input id="list-title" type="text" name="floor_name" class="validate">
                                    <label for="list-title">Floor Name</label>
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
                        <h4>Floor List</h4>

                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Floor No</th>
                                        <th>Floor Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $srno = 1;
                                    foreach ($floor_list as $fl) {
                                 ?>
                                        <tr>
                                            <td><span class="txt-dark weight-500"><?php echo $srno ?></span></td>
                                            <td><?php echo $fl->floor_no ?></td>
                                            <td><?php echo $fl->floor_name ?></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/floor/edit/<?php echo $fl->floor_id ?>" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/floor/delete/<?php echo $fl->floor_id ?>" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                            
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