<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/tour_package/add_step8">Date Specific</a></li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add Itinerary</h4>
            </div>
            <form id="tour_package_add_step" method="post" action="<?php echo base_url() ?>admin/tour_package/update_tour_package_itinerary">
                <div class="tab-inn">
                    <div class="tab-inn">
                        <div class="row">
                            <div class="input-field col s5">
                                <input type="hidden" name="tour_package_itinerary_id" value="<?php echo $tour_package_itinerary->tour_package_itinerary_id ?>">
                                <input id="list-title" type="text" class="validate" name="title" value="<?php echo $tour_package_itinerary->title ?>">
                                <label for="list-title">Title</label>
                               
                            </div>
                            <div class="input-field col s5">
                                   <textarea id="textarea1" class="materialize-textarea" name="description"><?php echo $tour_package_itinerary->description ?></textarea>
                                   <label for="textarea1">Descriptions</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="SUBMIT">
                            </div>
                        </div>

                    </div>


                </div>
            </form>







        </div>
    </div>
</div>
