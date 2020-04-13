<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Room_facility">Room Facility</a>
            </li>
            
        </ul>
    </div>

<div class="sb2-2-3">
        <div class="row">
            <!--== Country Campaigns ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add Room Facility</h4>

                    </div>
                     <div class="tab-inn">
                        <form action="<?php echo base_url() ?>admin/Room_facility/save" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="list-title" type="text" name="title" class="validate">
                                    <label for="list-title">Room Facility</label>
                                </div>
                                <div class="input-field col s2">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <!--== Country Campaigns ==-->

        </div>
    </div>
    <!--== table ==-->

    <div class="sb2-2-3">
        <div class="row">
            <!--== Country Campaigns ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Room Facility List</h4>

                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Room Facility</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td><span class="txt-dark weight-500">1</span></td>
                                            <td>abc</td>
                                            <td>
                                                <a href="#" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a onclick="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                            
                                            </td>

                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Country Campaigns ==-->

        </div>
    </div>

</div>   