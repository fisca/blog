<div class="container">
    <div class="row well">

        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/profile/edit_process">
            <?php foreach ($query as $row) : ?>
                <fieldset>
                    <legend class="text-center">Edit Profile</legend>

                    <input type="hidden" name="researcher_key" value="<?php echo $row->researcher_key; ?>">

                    <div class="form-group">
                        <label for="title_th" class="col-lg-2 control-label">คำนำหน้าชื่อ</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="title_th" id="title_th" value="<?php echo $row->title_th; ?>" placeholder="เช่น ดร., ผศ.ดร., ศ.ดร., นพ., ร.ต., นาย เป็นต้น">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname_th" class="col-lg-2 control-label">ชื่อ<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="firstname_th" id="firstname_th" required value="<?php echo $row->firstname_th; ?>" placeholder="ชื่อภาษาไทย">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastname_th" class="col-lg-2 control-label">สกุล<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="lastname_th" id="lastname_th" required value="<?php echo $row->lastname_th; ?>" placeholder="สกุลภาษาไทย">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title_en" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="title_en" id="title_en" value="<?php echo $row->title_en; ?>" placeholder="Dr., Prof.Dr., Mr., Ms. etc.">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname_en" class="col-lg-2 control-label">Firstname<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="firstname_en" id="firstname_en" required value="<?php echo $row->firstname_en; ?>" placeholder="Your firstname in English.">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastname_en" class="col-lg-2 control-label">Lastname<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="lastname_en" id="lastname_en" required value="<?php echo $row->lastname_en; ?>" placeholder="Your lastname in English.">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">เพศ (gender)</label>
                        <div class="col-lg-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="male" value="male"<?php
                                    if ($row->gender == 'male') {
                                        echo ' checked';
                                    }
                                    ?>>
                                    ชาย (male)
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="female" value="female"<?php
                                    if ($row->gender == 'female') {
                                        echo ' checked';
                                    }
                                    ?>>
                                    หญิง (female)
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="street_th" class="col-lg-2 control-label">ที่อยู่</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="street_th" id="street_th" value="<?php echo $row->street_th; ?>" placeholder="เลขที่ อาคาร ซอย ถนน">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sub_district_th" class="col-lg-2 control-label">แขวง/ตำบล</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="sub_district_th" id="sub_district_th" value="<?php echo $row->sub_district_th; ?>" placeholder="แขวง/ตำบล">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="district_th" class="col-lg-2 control-label">เขต/อำเภอ</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="district_th" id="district_th" value="<?php echo $row->district_th; ?>" placeholder="เขต/อำเภอ">
                        </div>
                    </div>

                    <?php include 'province.php'; ?>
                    <div class="form-group">
                        <label for="province_th" class="col-lg-2 control-label">จังหวัด</label>
                        <div class="col-lg-10">
                            <?php echo pro_list_th($row->province_th); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="postal_code" class="col-lg-2 control-label">รหัสไปรษณีย์</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="postal_code" id="postal_code" value="<?php echo $row->postal_code; ?>" placeholder="รหัสไปรษณีย์">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-lg-2 control-label">โทรศัพท์</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $row->phone; ?>" placeholder="โทรศัพท์">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mobile_phone" class="col-lg-2 control-label">โทรศัพท์มือถือ</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" value="<?php echo $row->mobile_phone; ?>" placeholder="โทรศัพท์มือถือ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email<span style="color: red;">**</span></label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" name="email" id="email" multiple required value="<?php echo $row->email; ?>" placeholder="email1@example.com, email2@example">
                            <span class="help-block">สามารถกรอก email ได้หลาย email โดยใช้เครื่องหมาย comma (,) คั่น เช่น email1@example.com, email2@example เป็นต้น</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="website" class="col-lg-2 control-label">Website</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="website" id="website" value="<?php echo $row->website; ?>" placeholder="http://www.example.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-saved"></span> Submit</button>                                 
                            &nbsp;<a href="<?php echo base_url() . "index.php/profile/key/" . $row->researcher_key; ?>"><strong>Cancel</strong></a>
                        </div>
                    </div>
                </fieldset>
            <?php endforeach; ?>
        </form>

        <script>
            $(function() {
                $("#title_th").focus();
            });
        </script>

    </div>

</div> <!-- /.container -->

