<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Research Data</h2>
                    <h4 style="text-align: center;">&nbsp;</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>
            <?php
            if (!$query) :
                echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
            endif;
            ?>
            <table class="table table-bordered">

                <tr><th>&nbsp</th><th style="text-align: center;">Institue</th><th style="text-align: center;">Period</th><th style="text-align: center;">Supervisor</th><th>&nbsp;</th></tr>

                <?php

                function training_type($type) {
                    switch ($type) {
                        case 'postdoc':
                            echo 'Postdoctoral Training';
                            break;
                        case 'short':
                            echo 'Research Training : Short Term (<3 months)';
                            break;
                        case 'short':
                            echo 'Research Training : Long Term (>3 months)';
                            break;
                        default:
                            echo '';
                            break;
                    }
                }

                foreach ($query as $row) :
                    ?>
                    <tr>
                        <td><strong><?php training_type($row->training_type); ?></strong></td>
                        <td><?php echo $row->institute; ?></td>
                        <td><?php echo date("F j, Y", strtotime($row->training_start)) . ' - ' . date("F j, Y", strtotime($row->training_end)); ?></td>
                        <td><?php echo $row->supervisor; ?></td>
                        <td>
                            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/edit_research">
                                <input type="hidden" name="training_id" value="<?php echo $row->training_id; ?>">
                                <button type="submit" class="btn btn-default">Edit</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>


                <tr>
                    <td><strong>Field of Expertise/Competency</strong></td>
                    <td colspan="3">
                        <?php foreach ($query_expertise as $r) : ?>
                        <?php echo $r->topic; ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/edit_research">
                            <input type="hidden" name="expertise" value="">
                            <button type="submit" class="btn btn-default">Edit</button>
                        </form>
                    </td>
                </tr>

            </table>
            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/add_research">
                <input type="hidden" name="expertise" value="">
                <button type="submit" class="btn btn-default">Add</button>
            </form>



            <p>&nbsp;</p>

        </div>

    </div>

</div> <!-- /.container -->

