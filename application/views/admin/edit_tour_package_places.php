<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/tour_package/add_step5">Places</a></li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <form id="tourPackageForm" action="<?php echo base_url() ?>admin/tour_package/update_tour_package_places" method="post">
                
    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add Places</h4>
             </div>
                <form id="tourPackageForm">
                    <div class="tab-inn">
                                    
                        <div class="row">
                           <input type="hidden" name="tour_package_place_id" value="<?php echo $tour_package_places->tour_package_place_id ?>">
                           <div class="input-field col s10">
                                <input id="list-title" type="text" class="validate" name="title" value="<?php echo $tour_package_places->title ?>">
                                <label for="list-title">Add Places</label>
                           </div>
                       
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
           </div>
        </div>
    </div>
   </form>
</div>

