<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/tour_package/add_step2">Date Specific</a></li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Select Date</h4>
            </div>
            <form id="edit_tour_date" method="post" action="<?php echo base_url() ?>admin/tour_package/update_tour_date">
                <div class="tab-inn">

                    <div class="tab-inn">
     
                        <div class="row">
                                <input type="hidden" name="tour_date_id" value="<?php echo $tour_date_list->tour_date_id ?>">

                            <div class="input-field col s6">
                                From
                                <input id="list-title" type="date" value="<?php echo $tour_date_list->departure_date ?>" class="validate" name="from_date[]">
                             </div>

                            <div class="input-field col s6">
                                To
                                <input id="list-title" type="date" class="validate" value="<?php echo $tour_date_list->arrival_date ?>" name="to_date[]">
                            </div>
                                                       
                        </div>
                        <div class="row">
                            <div class="input-field col s2">
                                <input type="submit" class="waves-effect waves-light btn-large" value="SUBMIT">
                            </div>
                        </div>

                    </div>


                </div>
            </form>







        </div>
    </div>





</div>
