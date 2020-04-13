<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/tour_package/add_step9">Gallery</a></li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Gallery</h4>
                
            </div>
            <div class="bor">
                <form id="tourPackageForm" action="<?php echo base_url() ?>admin/Tour_package/save_step9" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" name="package_id" class="validate">
                            <label for="list-title">Tour Package</label>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Drop your image here">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




</div>

