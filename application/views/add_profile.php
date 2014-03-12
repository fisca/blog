<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Add Profile</h2>
                    <h4 style="text-align: center; color: #89919c;">(เพิ่มข้อมูลประวัติส่วนตัว)</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>

            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/profile/add_process">
                <table class="table">

                    <tr><td><strong>คำนำหน้าชื่อ</strong></td>
                        <td>
                            <input type="hidden" name="researcher_key" value="<?php echo $add_key; ?>">
                            <input type="text" name="title_th" id="title_th" value="" style="width: 50%;" placeholder="เช่น ดร., ศ.ดร., นพ., ร.ต., ม.ล. ฯลฯ">
                        </td>
                    </tr>
                    <tr><td><strong>ชื่อ</strong><span style="color: red;">**</span></td><td><input type="text" name="firstname_th" required value="" style="width: 50%;"></td></tr>
                    <tr><td><strong>นามสกุล</strong><span style="color: red;">**</span></td><td><input type="text" name="lastname_th" required value="" style="width: 50%;"></td></tr>
                    <tr><td><strong>Title</strong></td><td><input type="text" name="title_en" value="" style="width: 50%;" placeholder="Dr., Prof.Dr., Mr., Ms. etc. "></td></tr>
                    <tr><td><strong>Firstname</strong><span style="color: red;">**</span></td><td><input type="text" name="firstname_en" required value="" style="width: 50%;"></td></tr>
                    <tr><td><strong>Lastname</strong><span style="color: red;">**</span></td><td><input type="text" name="lastname_en" required value="" style="width: 50%;"></td></tr>                        
                    <tr><td><strong>เพศ</strong></td>
                        <td>
                            <input type="radio" name="gender" value="male"> ชาย &nbsp;
                            <input type="radio" name="gender" value="female"> หญิง
                        </td>
                    </tr>

                    <tr><td><strong>ที่อยู่ที่ติดต่อได้</strong> </td><td><input type="text" name="street_th" value="" placeholder="เลขที่ อาคาร ซอย ถนน หมู่บ้าน" style="width: 100%;"></td></tr>
                    <tr><td><strong>แขวง/ตำบล</strong></td><td><input type="text" name="sub_district_th" value="" style="width: 50%;"></td></tr>
                    <tr><td><strong>เขต/อำเภอ</strong></td><td><input type="text" name="district_th" value="" style="width: 50%;"></td></tr>
                    <?php include 'province.php'; ?>    
                    <tr><td><strong>จังหวัด</strong></td><td><?php echo $province; ?></td></tr>
                    <tr><td><strong>รหัสไปรษณีย์</strong></td><td><input type="text" name="postal_code" value=""></td></tr>
                    <tr><td><strong>โทรศัพท์</strong></td><td><input type="text" name="phone" value=""></td></tr>
                    <tr><td><strong>โทรศัพท์มือถือ</strong></td><td><input type="text" name="mobile_phone" value=""></td></tr>
                    <tr><td><strong>Email</strong><span style="color: red;">**</span></td>
                        <td>
                            <input style="width: 100%;" type="email" name="email" required multiple value="" placeholder="email1@example.com, email2@example.com">                                
                        </td>
                    </tr>
                    <tr><td><strong>Website</strong></td><td><input style="width: 100%;" type="text" name="website" value="" placeholder="http://www.example.com"></td></tr>


                    <tr><td>&nbsp;</td><td><button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="index">Cancel</a></td></tr>
                </table>
            </form>
            <script>
                $(function() {
                    $("#title_th").focus();
                });
            </script>

            <p><strong>หมายเหตุ</strong>&nbsp; Email กรอกหลายอันได้โดยใช้เคริ่องหมาย comma (,) คั่น เช่น email1@sample.com, email2@sample.com เป็นต้น</p>

        </div>

    </div>

</div> <!-- /.container -->

