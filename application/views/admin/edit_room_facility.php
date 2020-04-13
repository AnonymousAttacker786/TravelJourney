<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Room">All Room List</a>
            </li>
            
        </ul>
    </div>

<div class="sb2-2-3">
        <div class="row">
            <!--== Country Campaigns ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit Room Facility</h4>

                    </div>
                     <div class="tab-inn">
                        <form action="<?php echo base_url() ?>admin/Room_facility/update" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                      <input type="hidden" name="room_facility_id" value="<?php echo $room_facility->room_facility_id ?>">
                                    <input id="list-title" type="text" name="title" class="validate" value="<?php echo $room_facility->title ?>" >
                                    <label for="list-title">Room Facility</label>
                                </div>
                                <div class="input-field col s2">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                                <div class="input-field col s2">
                                    <a href="<?php echo base_url() ?>admin/room" class="waves-effect waves-light btn-large">Cancel</a>
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