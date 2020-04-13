<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="<?php echo base_url() ?>admin/Room/add_step2">Room Facility</a></li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->


    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add Room Facility</h4>
            </div>
            <form id="tour_package_add_step3" action="<?php echo base_url() ?>admin/Room/save_step2" method="post" >
                <div class="tab-inn">

                    <div class="row">
                        <div class="input-field col s10">
                            <input id="list-title" type="text" name="title[]" class="validate" >
                            <label for="list-title">Room Facility</label>
                        </div>

                        <div class="input-field col s2">
                            <button type="button" class="btn btn-default btn-sm addButton" data-template="textbox">Add</button>
                        </div>
                    </div>
                    <div class="row hide" id="textboxTemplate">
                        <div class="input-field col s10">
                            <input id="list-title" type="text" class="validate">

                        </div>
                        <div class="input-field col s2">
                            <button type="button" class="btn btn-default btn-sm removeButton" data-template="textbox">remove</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="SUBMIT">
                        </div>
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
                    $el = $row.find('input').eq(0).attr('name','title' + '[]');
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

