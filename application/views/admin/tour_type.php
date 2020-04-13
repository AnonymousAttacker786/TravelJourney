<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre">Tour type
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
            <div class="col-md-12 sp-top-30">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Tour type</h4>
                        <p>E.g.,Sightseeing Tour,Shore excursion Tours,Adventure Tour</p>
                    </div>
                    <div class="tab-inn">
                        <form action="<?php echo base_url() ?>admin/tour_type/save" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="list-title" name="tour_type_name" type="text" value="" class="validate">
                                    <label for="list-title">Enter Title</label>
                                </div>

                                <div class="input-field col s2">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
             <!-- table -->

    <div class="sb2-2-3">
        <div class="row">
            <!--== Country Campaigns ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Tour type List</h4>
                        
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Tour Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                   $srno = 1;
                                   
                                   foreach ($tour_type as $tt) {
                                        ?>
                                     
                                    <tr>
                                        <td><span class="txt-dark weight-500"><?php echo $srno ?></span></td>
                                        <td><?php echo $tt->tour_type_name ?></td>
                                        <td>
                                            <a href="package-cat-edit.html" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/tour_type/delete/<?php echo $tt->tour_type_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                            
                                        </td>
                                        
                                    </tr>
                                   <?php 
                                   
                                   $srno++;
                                   } ?>    
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

