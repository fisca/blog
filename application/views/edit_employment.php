<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Edit Employment data</h2>
                    <h4 style="text-align: center; color: #89919c;">&nbsp;</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>

            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/employment/edit_process">
                <table class="table">
                    <?php
                    
                    foreach ($query as $row) : ?>                    
                        <tr><td><strong>Academic position</strong></td>
                            <td>
                                <input type="hidden" name="employment_id" value="<?php echo $row->employment_id; ?>">
                                <input type="text" name="academic" id="academic" value="<?php echo $row->academic; ?>">
                            </td>
                        </tr>
                        <tr><td><strong>Administrative position</strong> </td><td><input type="text" name="administrative" value="<?php echo $row->administrative; ?>"></td></tr>
                        <tr><td><strong>Research position</strong> </td><td><input type="text" name="research" value="<?php echo $row->research; ?>"></td></tr>

                        <tr><td><strong>ที่ติดต่อที่ทำงาน (Office's address)</strong> </td><td><input type="text" name="street_en" value="<?php echo $row->street_en; ?>"></td></tr>
                        <tr><td><strong>แขวง/ตำบล</strong></td><td><input type="text" name="sub_district_en" value="<?php echo $row->sub_district_en; ?>"></td></tr>
                        <tr><td><strong>เขต/อำเภอ</strong></td><td><input type="text" name="district_en" value="<?php echo $row->district_en; ?>"></td></tr>
                        
                        <tr>
                            <td>Province<span style="color: red;">**</span></td>
                            <td><?php include 'province.php'; 
                            if($row->province_en == 'Bangkok'){$pro_en = "Krung Thep Mahanakhon";}else{$pro_en = $row->province_en;}
                            ?>
                                <select name="province_en" required>
                                    <option value="">---- Select Province ----</option>
                                    <?php foreach ($province_en as $value): ?>                                    
                                        <option value="<?php echo $value; ?>"<?php echo pro_select($value, $pro_en); ?>><?php echo $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td><strong>รหัสไปรษณีย์</strong></td><td><input type="text" name="postal_code" value="<?php echo $row->postal_code; ?>"></td></tr>
                        <tr><td><strong>โทรศัพท์</strong></td><td><input type="text" name="phone" value="<?php echo $row->phone; ?>"></td></tr>
                        <tr><td><strong>โทรศัพท์มือถือ</strong></td><td><input type="text" name="mobile_phone" value="<?php echo $row->mobile_phone; ?>"></td></tr>
                        <tr><td><strong>Email</strong><span style="color: red;">**</span></td>
                            <td>
                                <input style="width: 100%;" type="email" name="email" required multiple value="<?php echo $row->email; ?>">                                
                            </td>
                        </tr>
                        <tr><td><strong>Website</strong></td><td><input style="width: 100%;" type="text" name="website" value="<?php echo $row->website; ?>"></td></tr>

                    <?php endforeach; ?>
                    <tr><td>&nbsp;</td><td><button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="<?php echo base_url() . "index.php/employment"; ?>">Cancel</a></td></tr>
                </table>
            </form>
            <script>
                $(function() {
                    $("#academic").focus();
                });
            </script>

            <p><strong>หมายเหตุ</strong>&nbsp; Email กรอกหลายอันได้โดยใช้เคริ่องหมาย comma (,) คั่น เช่น email1@sample.com, email2@sample.com เป็นต้น</p>

        </div>

    </div>

</div> <!-- /.container -->

