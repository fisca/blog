<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Education</h2>
                    <h4 style="text-align: center;">(ข้อมูลประวัติการศึกษา)</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>
            <?php if (!$query) : ?>
                <h4 style="text-align: center; color: red;">ขออภัย คุณยังไม่ได้กรอกข้อมูลประวัติส่วนตัว</h4>
                <form method="post" action="<?php echo base_url(); ?>index.php/education/add_education">
                    <div style="text-align: center;">
                        <input type="hidden" name="researcher_key" value="<?php echo $researcher_key; ?>">
                        <button class="btn btn-default">กรอกข้อมูลประวัติการศึกษา</button>
                    </div>
                </form>
            <?php else: ?>

                <table class="table table-bordered">
                    <tr>
                        <th style="text-align: center;">ลำดับ</th><th style="text-align: center;">ปีที่จบ</th><th style="text-align: center;">ระดับการศึกษา (degree)</th><th  style="text-align: center;">สาขา (major)</th><th  style="text-align: center;">แก้ไข</th>
                    </tr>

                    <?php
                    $i = 1;
                    foreach ($query as $row) :
                        ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $i; ?></td>
                            <td style="text-align: center;"><?php echo $row->grad_year; ?></td>
                            <td style="text-align: center;"><?php echo ucfirst($row->degree) . "'s degree"; ?></td>
                            <td style="text-align: center;"><?php echo $row->major; ?></td>
                            <td style="text-align: center;">
                                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/education/edit_education">
                                    <input type="hidden" name="education_id" value="<?php echo $row->education_id; ?>">
                                    <button type="submit" class="btn btn-default">Edit</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    endforeach;
                    ?>
                </table>

                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/education/add_education">
                    <input type="hidden" name="researcher_id" value="<?php echo $row->researcher_id; ?>">
                    <button type="submit" class="btn btn-default">เพิ่มข้อมูล</button>
                </form>

                <p>&nbsp;</p>

            <?php endif; ?>

        </div>

    </div>

</div> <!-- /.container -->

