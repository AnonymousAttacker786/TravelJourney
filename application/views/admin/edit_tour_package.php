<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/tour_package/add_step1"> Edit Tour Package</a></li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Edit Tour Package</h4>
            </div>
            <div class="bor">
                <form id="tour_package_add_step1" action="<?php echo base_url() ?>admin/tour_package/update_tour_package" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="hidden" name="tour_package_id" value="<?php echo $tour_package->tour_package_id ?>">
                            <input id="list-title" type="text" class="validate" name="tour_package_name" value="<?php echo $tour_package->tour_package_name ?>">
                            <label for="list-title">Package Name</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="description"><?php echo $tour_package->description ?></textarea>
                            <label for="textarea1">Package Descriptions</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="price_per_person" value="<?php echo $tour_package->price_per_person ?>">
                            <label for="list-title">Price Per Person</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="price_per_child" value="<?php echo $tour_package->price_per_child ?>">
                            <label for="textarea1">Price Per Child</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="no_of_days" value="<?php echo $tour_package->no_of_days ?>">
                            <label for="list-title">No. of Days</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="origin" value="<?php echo $tour_package->origin ?>">
                            <label for="textarea1">Origin</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            
                            
                            <select name="going_to_id">
                                <option value="">Going To</option>

                                <?php
                                foreach ($going_to_list as $g) {
                                    if ($tour_package->going_to_id == $g->going_to_id) {
                                        ?>
                                        <option selected value="<?php echo $g->going_to_id ?>"><?php echo $g->going_to_title ?></option>
                                    <?php } else {
                                        ?>

                                        <option value="<?php echo $g->going_to_id ?>"><?php echo $g->going_to_title ?></option>
                                        <?php
                                    }
                                }
                                ?>

                            </select>
                            <label>Going To</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="category_id">
                                <option value="">Category</option>

                                <?php
                                foreach ($category_list as $c) {
                                    if ($tour_package->category_id == $c->category_id) {
                                        ?>
                                        <option  selected value="<?php echo $c->category_id ?>"><?php echo $c->category_name ?></option>
                                    <?php } else {
                                        ?>
                                        <option value="<?php echo $c->category_id ?>"><?php echo $c->category_name ?></option>
                                        <?php
                                    }
                                }
                                ?>

                            </select>
                            <label>Category</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="tour_type_id">
                                <option value="">Tour Type</option>

                                <?php
                                foreach ($tour_type_list as $ttpl) {
                                    if ($tour_package->tour_type_id == $ttpl->tour_type_id) {
                                        ?>
                                        <option selected value="<?php echo $ttpl->tour_type_id ?>"><?php echo $ttpl->tour_type_name ?></option>
                                        <?php
                                    } else {
                                        ?>
                                        <option value="<?php echo $ttpl->tour_type_id ?>"><?php echo $ttpl->tour_type_name ?></option>
                                        <?php
                                    }
                                }
                                ?>

                            </select>
                            <label>Tour Type</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="submit">
                            <a href="<?php echo base_url() ?>admin/tour_package/index" class="waves-effect waves-light btn-large">Cancel</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




</div>

