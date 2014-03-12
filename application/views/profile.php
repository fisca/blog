<div class="container">
    <div class="row"><div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Profile</h2>
                    <h4 style="text-align: center;">(ข้อมูลประวัติส่วนตัว)</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>
            
            <?php if (!$query) : ?>
                <h4 style="text-align: center; color: red;">ขออภัย คุณยังไม่ได้กรอกข้อมูลประวัติส่วนตัว</h4>
                <form method="post" action="<?php echo base_url(); ?>index.php/profile/add_profile">
                    <div style="text-align: center;">
                        <input type="hidden" name="researcher_key" value="<?php echo $researcher_key; ?>">
                        <button class="btn btn-default">กรอกข้อมูลประวัติส่วนตัว</button>
                    </div>
                </form>
            <?php else: ?>

                <table class="table">
                    <?php foreach ($query as $row) : ?>
                        <tr><td><strong>คำนำหน้าชื่อ</strong></td><td><?php echo $row->title_th; ?></td></tr>
                        <tr><td><strong>ชื่อ</strong></td><td><?php echo $row->firstname_th; ?></td></tr>
                        <tr><td><strong>นามสกุล</strong></td><td><?php echo $row->lastname_th; ?></td></tr>
                        <tr><td><strong>Title</strong></td><td><?php echo $row->title_en; ?></td></tr>
                        <tr><td><strong>Firstname</strong></td><td><?php echo $row->firstname_en; ?></td></tr>
                        <tr><td><strong>Lastname</strong></td><td><?php echo $row->lastname_en; ?></td></tr>
                        <?php
                        if ($row->gender == 'male') {
                            $gender_th = 'ชาย';
                        } else {
                            $gender_th = 'หญิง';
                        }
                        ?>
                        <tr><td><strong>เพศ</strong></td><td><?php echo $gender_th; ?></td></tr>
                        <tr><td><strong>ที่อยู่ที่ติดต่อได้</strong> </td><td><?php echo $row->street_th; ?></td></tr>
                        <tr><td><strong>แขวง/ตำบล</strong></td><td><?php echo $row->sub_district_th; ?></td></tr>
                        <tr><td><strong>เขต/อำเภอ</strong></td><td><?php echo $row->district_th; ?></td></tr>
                        <tr><td><strong>จังหวัด</strong></td><td><?php echo $row->province_th; ?></td></tr>
                        <tr><td><strong>รหัสไปรษณีย์</strong></td><td><?php echo $row->postal_code; ?></td></tr>
                        <tr><td><strong>โทรศัพท์</strong></td><td><?php echo $row->phone; ?></td></tr>
                        <tr><td><strong>โทรศัพท์มือถือ</strong></td><td><?php echo $row->mobile_phone; ?></td></tr>
                        <tr><td><strong>Email</strong></td><td><?php echo $row->email; ?></td></tr>
                        <tr><td><strong>Website</strong></td><td><?php echo $row->website; ?></td></tr>
                    <?php endforeach; ?>
                    <tr>
                        <td>
                            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/profile/edit_profile">
                                <input type="hidden" name="researcher_key" value="<?php echo $row->researcher_key; ?>">
                                <button type="submit" class="btn btn-default">Edit profile</button>
                            </form>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </table>

            <?php endif; ?>


        </div>

    </div>

</div> <!-- /.container -->

