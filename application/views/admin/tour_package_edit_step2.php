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
            <form id="tour_package_add_step" method="post" action="<?php echo base_url() ?>admin/tour_package/update_step2">
                <div class="tab-inn">

                    <div class="tab-inn">
     
                        <div class="row">
                            <input type="hidden" name="tour_date_id" value="<?php echo $tour_date->tour_date_id ?>">
                           
                            <div class="input-field col s5">
                                From
                                <input id="list-title" type="date" class="validate" name="from_date[]">
                             </div>

                            <div class="input-field col s5">
                                To
                                <input id="list-title" type="date" class="validate" name="to_date[]">
                            </div>
                            <div class="input-field col s2">
                                <button type="button" class="btn btn-default btn-sm addButton" data-template="form">Add</button>
                            </div>
                        </div>

                        <div class="row hide" id="formTemplate">
                            <div class="input-field col s5">
                                <input id="list-title" type="date" class="validate">

                            </div>
                            <div class="input-field col s5">
                                <input id="list-title" type="date" class="validate">

                            </div>
                            <div class="input-field col s2">
                                <button type="button" class="btn btn-default btn-sm removeButton" data-template="removeButton">Remove</button>
                            </div>


                        </div>


                        

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="NEXT">
                                 <a href="<?php echo base_url() ?>admin/tour_package/tour_package_edit" class="waves-effect waves-light btn-large">Cancel</a>

                            </div>
                        </div>

                    </div>


                </div>
            </form>







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
                    $el = $row.find('input').eq(0).attr('name', 'from_date' + '[]');
                    $el = $row.find('input').eq(1).attr('name', 'to_date' + '[]');
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

        $('#defaultForm')
                .bootstrapValidator({
                    message: 'This value is not valid',
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        'from_date[]': {
                            validators: {
                                notEmpty: {
                                    message: 'The textbox field is required'
                                }
                            }
                        },

                    }
                })
                .on('error.field.bv', function (e, data) {
                    //console.log('error.field.bv -->', data.element);
                })
                .on('success.field.bv', function (e, data) {
                    //console.log('success.field.bv -->', data.element);
                })
                .on('added.field.bv', function (e, data) {
                    //console.log('Added element -->', data.field, data.element);
                })
                .on('removed.field.bv', function (e, data) {
                    //console.log('Removed element -->', data.field, data.element);
                });
    });
</script>

