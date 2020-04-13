<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/tour_package/add_step3">Pickup Location</a></li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->


    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add Pickup Location</h4>
            </div>
            <form id="tour_package_add_step3" action="<?php echo base_url() ?>admin/tour_package/update_tour_pickup_location" method="post">
                <div class="tab-inn">

                    <div class="row">
                        <input type="hidden" name="tour_date_pickup_location_id" value="<?php echo $tour_dates_pickup_location->tour_date_pickup_location_id ?>">
                        <div class="input-field col s10">
                            
                            <input id="list-title" type="text" name="pickup_location" value="<?php echo $tour_dates_pickup_location->pickup_location ?>" class="validate" >
                            <label for="list-title">Add Pickup Location</label>
                            <a href="edit_tour_dates_pickup_location.php"></a>
                        </div>
                     </div>
                   <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="SUBMIT">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

</div>

