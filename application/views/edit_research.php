<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Edit Research training</h2>
                    <h4 style="text-align: center;">&nbsp;</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>
            <?php
            if (!$query) :
                echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
            endif;
            ?>
            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/edit_training_process">
                <table class="table table-bordered">
                    <tr>                        
                        <th>&nbsp;</th><th>Institute</th><th>Period</th><th>Supervisor</th><th>&nbsp;</th>
                    </tr>

                    <?php

                    function option_select($value, $data) {
                        if ($value == $data) {
                            echo ' selected';
                        }
                    }

                    foreach ($query as $row) :
                        ?>
                        <tr>
                            <td>
                                <input type="hidden" name="training_id" value="<?php echo $row->training_id; ?>">
                                <select name="training_type">
                                    <option value=""<?php option_select('', $row->training_type); ?>>---- Select Training ----</option>
                                    <option value="postdoc"<?php option_select('postdoc', $row->training_type); ?>>Postdoctoral Training</option>
                                    <option value="short"<?php option_select('short', $row->training_type); ?>>Research Training : Short Term (<3 months)</option>
                                    <option value="long"<?php option_select('long', $row->training_type); ?>>Research Training : Long Term (>3 months)</option>
                                </select>
                            </td>
                            <td><input style="width: 100%;" type="text" name="institute" value="<?php echo $row->institute ?>"></td>
                            <td>
                                <input type="text" class="training_start" name="training_start" value="<?php echo date("m/d/Y", strtotime($row->training_start)); ?>"> - 
                                <input type="text" class="training_end" name="training_end" value="<?php echo date("m/d/Y", strtotime($row->training_end)); ?>">
                                <script>
                                    $(function() {
                                        // Date Picker
                                        $(".training_start").datepicker();
                                        $(".training_end").datepicker();
                                    }); /* END jQuery */
                                </script>
                            </td>
                            <td><input name="supervisor" value="<?php echo $row->supervisor; ?>"></td>
                            <td><!-- Button trigger modal -->
                                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Delete
                                </a>
                            </td>
                        </tr>                       

                    <?php endforeach; ?>

                    <tr><td>&nbsp;</td><td colspan="4"><button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="research">Cancel</a></td></tr>
                </table>
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
                            <button type="button" class="btn btn-primary" onclick="window.location='<?php echo base_url(); ?>index.php/research/delete_research/id/<?php echo $row->training_id; ?>'">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div> <!-- /.container -->

