<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="<?php echo base_url() ?>admin/Customer/add">Add New User</a>
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
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New User</h4>
                                </div>
                                <div class="tab-inn">
                                    <form action="<?php echo base_url() ?>admin/customer/save" method="post">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" name="first_name" class="validate">
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" name="last_name" class="validate">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                            
                                        </div>
                                         <div class="row">
                                            <div class="input-field col s6">
                                                    <input id="phone" type="number" name="mo_no" class="validate">
                                                    <label for="phone">Mobile</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="email" type="email" name="email_id" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                       </div>
                                            
                                            
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" name="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password1" type="password" name="confirm_password" class="validate">
                                                <label for="password1">Confirm Password</label>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" class="waves-effect waves-light btn-large">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>