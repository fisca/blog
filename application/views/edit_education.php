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

            <h3 style="text-align: center;">แก้ไข ข้อมูลประวัติส่วนตัว</h3>
            <?php
            if (!$query) :
                echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
            endif;
            ?>
            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/profile/edit_process">
                <table class="table">
                    <?php foreach ($query as $row) : ?>                    
                        <tr><td><strong>คำนำหน้าชื่อ</strong></td>
                            <td>
                                <input type="hidden" name="researcher_id" value="<?php echo $row->researcher_id; ?>">
                                <div class="form-group">
                                    <input type="text" name="title_th" id="title_th" value="<?php echo $row->title_th; ?>">
                                </div>                                
                            </td>
                        </tr>
                        <tr><td><strong>ชื่อ</strong><span style="color: red;">**</span></td><td><input type="text" name="firstname_th" required value="<?php echo $row->firstname_th; ?>"></td></tr>
                        <tr><td><strong>นามสกุล</strong><span style="color: red;">**</span></td><td><input type="text" name="lastname_th" required value="<?php echo $row->lastname_th; ?>"></td></tr>
                        <tr><td><strong>Title</strong></td><td><input type="text" name="title_en" value="<?php echo $row->title_en; ?>"></td></tr>
                        <tr><td><strong>Firstname</strong><span style="color: red;">**</span></td><td><input type="text" name="firstname_en" required value="<?php echo $row->firstname_en; ?>"></td></tr>
                        <tr><td><strong>Lastname</strong><span style="color: red;">**</span></td><td><input type="text" name="lastname_en" required value="<?php echo $row->lastname_en; ?>"></td></tr>                        
                        <tr><td><strong>เพศ</strong></td>
                            <td>
                                <input type="radio" name="gender" value="male"<?php
                                if ($row->gender == 'male') {
                                    echo ' checked';
                                }
                                ?>> ชาย &nbsp;
                                <input type="radio" name="gender" value="female"<?php
                                if ($row->gender == 'female') {
                                    echo ' checked';
                                }
                                ?>> หญิง
                            </td>
                        </tr>

                        <tr><td><strong>ที่อยู่ที่ติดต่อได้</strong> </td><td><input type="text" name="street_th" value="<?php echo $row->street_th; ?>"></td></tr>
                        <tr><td><strong>แขวง/ตำบล</strong></td><td><input type="text" name="sub_district_th" value="<?php echo $row->sub_district_th; ?>"></td></tr>
                        <tr><td><strong>เขต/อำเภอ</strong></td><td><input type="text" name="district_th" value="<?php echo $row->district_th; ?>"></td></tr>
                        <?php include 'province.php'; ?>    
                        <tr><td><strong>จังหวัด</strong></td><td><?php echo pro_list_th($row->province_th); ?></td></tr>
                        <tr><td><strong>รหัสไปรษณีย์</strong></td><td><input type="text" name="postal_code" value="<?php echo $row->postal_code; ?>"></td></tr>
                        <tr><td><strong>โทรศัพท์</strong></td><td><input type="text" name="phone" value="<?php echo $row->phone; ?>"></td></tr>
                        <tr><td><strong>โทรศัพท์มือถือ</strong></td><td><input type="text" name="mobile_phone" value="<?php echo $row->mobile_phone; ?>"></td></tr>
                        <tr><td><strong>Email</strong><span style="color: red;">**</span></td>
                            <td>
                                <input style="width: 100%;" type="email" name="email" required multiple value="<?php echo $row->email; ?>">
                                <br><span class="help-block">สามารถกรอกหลาย email ได้ โดยใช้เครื่องหมาย comma คั่น</span>
                            </td></tr>
                        <tr><td><strong>Website</strong></td><td><input style="width: 100%;" type="text" name="website" value="<?php echo $row->website; ?>"></td></tr>

                    <?php endforeach; ?>
                </table>
                <p>&nbsp;</p>
                <button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="<?php echo base_url() . "index.php/profile/id/" . $row->researcher_id; ?>">Cancel</a>
                <p>&nbsp;</p>
            </form>
            <script>
                $(function() {
                    $("#title_th").focus();
                });
            </script>

        </div>

    </div>

</div> <!-- /.container -->

