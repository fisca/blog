<div class="container">
    <div class="row">


        <div class="col-md-12">

            <div class="row">
                <div class="col-md-4" style="border: solid 1px black;">ค้นหานักวิจัย</div>
                <div class="col-md-4" style="border: solid 1px black;">พิมพ์ประวัติส่วนตัว</div>
                <div class="col-md-4" style="border: solid 1px black;">
                    <?php echo $welcome; ?>
                </div>
            </div>

            <h4>ข้อมูลประวัติการศึกษา</h4>
            <?php
            if (!$query) :
                echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
            endif;
            ?>
            <table class="table table-bordered">
                <tr>
                    <th>ลำดับ</th><th>ปีที่จบ</th><th>ระดับการศึกษา (degree)</th><th>สาขา (major)</th><th>แก้ไข</th>
                </tr>

                <?php
                $i = 1;
                foreach ($query as $row) :
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->grad_year; ?></td>
                        <td><?php echo ucfirst($row->degree) . "'s degree"; ?></td>
                        <td><?php echo $row->major; ?></td>
                        <td>
                            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/education/edit_education">
                                <input type="hidden" name="education_id" value="<?php echo $row->education_id; ?>">
                                <button type="submit" class="btn btn-default">แก้ไข</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    $i++;
                endforeach;
                ?>

            </table>

            <p>&nbsp;</p>

        </div>

    </div>

</div> <!-- /.container -->

