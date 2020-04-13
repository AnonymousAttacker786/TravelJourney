<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/going_to"> Going To</a>
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
                        <h4>Going to Title</h4>
                        <p>E.g., India, Thiland, Gujarat, Rajasthan</p>

                    </div>

                    <div class="tab-inn">
                        <form action="<?php echo base_url() ?>admin/Going_to/update" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="hidden" name="going_to_id" value="<?php echo $going_to->going_to_id ?>">

                                    <input id="list-title" type="text" name="going_to_title" class="validate" value="<?php echo $going_to->going_to_title ?>">
                                    <label for="list-title">Enter Title</label>
                                </div>
                                <div class="input-field col s4">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    <a href="<?php echo base_url() ?>admin/going_to" class="waves-effect waves-light btn-large">Cancel</a>
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

