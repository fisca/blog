<div class="container">
    <div class="row well">
        <h2 style="text-align: center;">Research data <span class="glyphicon glyphicon-fire"></span></h2>
        <p>&nbsp;</p>

        <?php if (!$query) : ?>
            <div class="row">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6 alert alert-warning text-center"><strong style="color: red;">ขออภัย คุณยังไม่ได้กรอกข้อมูล research data</strong></div>
                <div class="col-md-3">&nbsp;</div>
            </div>
            <form method="post" action="<?php echo base_url(); ?>index.php/research/add_research">
                <div style="text-align: center;">
                    <input type="hidden" name="researcher_key" value="<?php echo $researcher_key; ?>">
                    <button class="btn btn-default">กรอกข้อมูล Research</button>
                </div>
            </form>
        <?php else: ?>

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
                        case 'long':
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
                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>


                <tr>
                    <td><strong>Field of Expertise/Competency</strong></td>
                    <?php foreach ($query_expertise as $r) : ?>
                        <td colspan="3">

                            <?php echo $r->topic; ?>

                        </td>
                        <td>
                            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/edit_expertise">
                                <input type="hidden" name="expertise_id" value="<?php echo $r->expertise_id; ?>">
                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                            </form>
                        </td>
                    <?php endforeach; ?>
                </tr>

            </table>

            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/add_research">
                <input type="hidden" name="expertise" value="">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add</button>
            </form>

        <?php endif; ?> 



    </div>

</div> <!-- /.container -->

