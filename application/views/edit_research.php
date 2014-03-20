<div class="container">
    <div class="row well">
        <h2 style="text-align: center;">Edit Research training <span class="glyphicon glyphicon-fire"></span></h2>
        <p>&nbsp;</p>

        <?php
        if (!$query) :
            echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
        endif;
        ?>

        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/research/edit_training_process">

            <?php

            function option_select($value, $data) {
                if ($value == $data) {
                    echo ' selected';
                }
            }

            foreach ($query as $row) :
                ?>
                <fieldset>
                    <input type="hidden" name="training_id" value="<?php echo $row->training_id; ?>">

                    <div class="form-group">
                        <label for="training_type" class="col-lg-2 control-label">Training type<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <select class="form-control" name="training_type" id="training_type">
                                <option value=""<?php option_select('', $row->training_type); ?>>---- Select Training ----</option>
                                <option value="postdoc"<?php option_select('postdoc', $row->training_type); ?>>Postdoctoral Training</option>
                                <option value="short"<?php option_select('short', $row->training_type); ?>>Research Training : Short Term (<3 months)</option>
                                <option value="long"<?php option_select('long', $row->training_type); ?>>Research Training : Long Term (>3 months)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="institute" class="col-lg-2 control-label">Institute<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="institute" id="institute" required value="<?php echo $row->institute; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Period<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="training_start form-date" name="training_start" value="<?php echo date("m/d/Y", strtotime($row->training_start)); ?>"> - 
                            <input type="text" class="training_end form-date" name="training_end" value="<?php echo date("m/d/Y", strtotime($row->training_end)); ?>">
                            <script>
                                $(function() {
                                    // Date Picker
                                    $(".training_start").datepicker();
                                    $(".training_end").datepicker();
                                }); /* END jQuery */
                            </script>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="supervisor" class="col-lg-2 control-label">Supervisor<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="supervisor" id="supervisor" value="<?php echo $row->supervisor; ?>">
                        </div>
                    </div>

                </fieldset>

            <?php endforeach; ?>                   
            <button type="submit" class="btn btn-default">Submit</button> &nbsp;
            <a href="research">Cancel</a> &nbsp;
            <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</a>

        </form>








        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Delete research training data!</h4>
                    </div>
                    <div class="modal-body">
                        Do you really want to delete the data?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>                            
                        <button type="button" class="btn btn-primary" onclick="window.location = '<?php echo base_url(); ?>index.php/research/delete_research/id/<?php echo $row->training_id; ?>'">Confirm</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div> <!-- /.container -->

