 <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="<?php echo base_url() ?>admin/Customer"> All User</a>
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
                                    <h4>User Details</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                              $srno = 1 ;     
                                              foreach ($sign_up as $s) {
                                                ?>

                                                <tr>
                                                     <td><?php echo $srno ?></td>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo $s->first_name .' '. $s->last_name ?></span></a>
                                                    </td>
                                                    <td><?php echo '+91' . ' ' . $s->mo_no ?></td>
                                                    <td><?php echo $s->email_id ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>admin/customer/edit/<?php echo $s->cust_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>admin/customer/delete/<?php echo $s->cust_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                
                                                    <?php
                                                    $srno ++;
                                                    
                                              } ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       