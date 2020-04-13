<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/tour_package/add_step4">Drop Location</a></li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
                
    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add Drop Location</h4>
             </div>
                <form id="tour_package_add_step4" action="<?php echo base_url() ?>admin/tour_package/update_tour_drop_location" method="post">
                    
                  <div class="tab-inn">
                    <div class="row">
                        <input type="hidden" name="tour_date_drop_location_id" value="<?php echo $tour_dates_drop_location->tour_date_drop_location_id ?>">
                        <div class="input-field col s10">
                            <input id="list-title" type="text" class="validate" name="drop_location" value="<?php echo $tour_dates_drop_location->drop_location ?>">
                            <label for="list-title">Add Drop Location</label>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="Next">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
