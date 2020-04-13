<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Category"> Category</a>
            </li>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
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
                        <h4>Category</h4>
                        <p>E.g,Group Package,Individual Package,Family Package,Honeymooon Package etc</p>

                    </div>



                    <div class="tab-inn">



                        <form action="<?php echo base_url() ?>admin/Category/save" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s3">
                                    <a href="category_list.php"></a>
                                    <input id="list-title" type="text" name="category_name" class="validate">
                                    <label for="list-title">Enter Category Name</label>
                                </div>

                                <div class="input-field col s3">
                                    <select  name="going_to_id">
                                        <option value="">Going To</option>
                                        <?php
                                        foreach ($going_to_list as $g) {
                                            ?>
                                            <option value="<?php echo $g->going_to_id ?>"><?php echo $g->going_to_title ?></option>
                                            <?php
                                        }
                                        ?>


                                    </select>
                                    <label>Going To</label>
                                </div>
                                <div class="input-field col s4">
                                    <form action="#">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="image" >
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Drop your image here">
                                            </div>
                                        </div>
                                    </form>
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

    <!-- table -->

    <div class="sb2-2-3">
        <div class="row">
            <!--== Country Campaigns ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown1'><i class="material-icons">more_vert</i></a>
                        <!-- Dropdown Structure -->

                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Category Title</th>
                                        <th>Location</th>
                                        <th>Aciton</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($category_list as $c) {
                                        ?>
                                        <tr>
                                            <td><span class="list-img">
                                                    <img src="<?php echo base_url() . $c->image ?>" alt="">
                                                </span>

                                            </td>
                                            <td><?php echo $c->category_name ?></td>
                                            <td><span class="txt-success"><span><?php echo $c->going_to_title ?></span></span>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/category/edit/<?php echo $c->category_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a onclick="return confirm('Are you sure?')" href="<?php echo base_url() ?>admin/category/delete/<?php echo $c->category_id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>


                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>


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

