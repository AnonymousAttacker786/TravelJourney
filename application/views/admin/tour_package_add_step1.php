<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/tour_package/add_step1"> Add Tour Package</a></li>
           </ul>
    </div>
    <!--== DASHBOARD INFO ==-->

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add Tour Package</h4>
                <p>E.g, Amazing India</p>
            </div>
            <div class="bor">
                <form id="tour_package_add_step1" action="<?php echo base_url() ?>admin/tour_package/save_step1" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="tour_package_name" value="">
                            <label for="list-title">Package Name</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
                            <label for="textarea1">Package Descriptions</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="price_per_person">
                            <label for="list-title">Price Per Person</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="price_per_child">
                            <label for="textarea1">Price Per Child</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="no_of_days">
                            <label for="list-title">No. of Days</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="origin">
                            <label for="textarea1">Origin</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="going_to_id">
                                <option value="">Going To</option>
                                
                                    <?php foreach ($going_to_list as $g)
                                 {
                                    ?>
                                    <option value="<?php echo $g->going_to_id ?>"><?php echo $g->going_to_title ?></option>
                                    <?php 
                                    
                                }
                                ?>

                            </select>
                            <label>Going To</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="category_id">
                                <option value="">Category</option>

                                  <?php foreach ($category_list as $c)
                                 {
                                    ?>
                                    <option value="<?php echo $c->category_id ?>"><?php echo $c->category_name ?></option>
                                    <?php 
                                    
                                }
                                ?>
                            
                            </select>
                            <label>Category</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="tour_type_id">
                                <option value="">Tour Type</option>

                                  <?php foreach ($tour_type_list as $ttpl)
                                 {
                                    ?>
                                    <option value="<?php echo $ttpl->tour_type_id ?>"><?php echo $ttpl->tour_type_name ?></option>
                                    <?php 
                                    
                                }
                                ?>
                            
                            </select>
                            <label>Tour Type</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="specific_for">
                                <option value="">Specific For</option>

                                <option value="d">Dates</option>
                                <option value="m">Months</option>
                            </select>
                            <label>Specific For</label>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Tour Image">
                                </div>
                            </div>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('.addButton').on('click', function () {
            var index = $(this).data('index');
            if (!index) {
                index = 1;
                $(this).data('index', 1);
            }
            index++;
            $(this).data('index', index);

            var template = $(this).attr('data-template'),
                    $templateEle = $('#' + template + 'Template'),
                    $row = $templateEle.clone().removeAttr('id').insertBefore($templateEle).removeClass('hide'),
                    $el = $row.find('input').eq(0).attr('name', template + '[]');
            $('#defaultForm').bootstrapValidator('addField', $el);

            // Set random value for checkbox and textbox
            if ('checkbox' == $el.attr('type') || 'radio' == $el.attr('type')) {
                $el.val('Choice #' + index)
                        .parent().find('span.lbl').html('Choice #' + index);
            } else {
                $el.attr('placeholder', 'Textbox #' + index);
            }

            $row.on('click', '.removeButton', function (e) {
                $('#defaultForm').bootstrapValidator('removeField', $el);
                $row.remove();
            });
        });
    })
</script>

