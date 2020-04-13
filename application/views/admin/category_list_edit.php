<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Category"> Category</a>
            </li>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
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
                        <h4>Category</h4>
                        <p>E.g,Group Package,Individual Package,Family Package,Honeymooon Package etc</p>

                    </div>
                    <div class="tab-inn">
                    <form action="<?php echo base_url() ?>admin/Category/update" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s4">
                                    <a href="category_list.php"></a>
                                    <input type="hidden" name="category_id" value="<?php echo $category->category_id ?>">
                                    <input id="list-title" type="text" name="category_name" class="validate" value="<?php echo $category->category_name ?>">
                                    <label for="list-title">Enter Category Name</label>
                                </div>

                                <div class="input-field col s4">
                                    <select  name="going_to_id">
                                        <option value="">Going To</option>
                                        <?php
                                        foreach ($going_to_list as $g) {
                                            if ($category->going_to_id == $g->going_to_id) {
                                                ?>
                                                <option selected value="<?php echo $g->going_to_id ?>"><?php echo $g->going_to_title ?></option>
                                                <?php
                                            } else {
                                                ?>
                                                <option value="<?php echo $g->going_to_id ?>"><?php echo $g->going_to_title ?></option>
                                                <?php
                                            }
                                        }
                                        ?>


                                    </select>
                                    <label>Going To</label>
                                </div>
                                <div class="input-field col s4">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    <a href="<?php echo base_url() ?>admin/category" class="waves-effect waves-light btn-large">Cancel</a>

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

