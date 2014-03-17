<div class="container">
    <div class="row"><div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Employment Position Data</h2>
                    <h4 style="text-align: center;">&nbsp;</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>
            <?php if (!$query) : ?>
                <h4 style="text-align: center; color: red;">ขออภัย คุณยังไม่ได้กรอกข้อมูล Employment Position</h4>
                <form method="post" action="<?php echo base_url(); ?>index.php/employment/add_employment">
                    <div style="text-align: center;">
                        <input type="hidden" name="researcher_key" value="<?php echo $researcher_key; ?>">
                        <button class="btn btn-default">กรอกข้อมูล Employment Position</button>
                    </div>
                </form>
            <?php else: ?>
                <table class="table">
                    <?php foreach ($query as $row) : ?>
                        <tr><td><strong>Academic position</strong></td><td><?php echo ucfirst($row->academic); ?></td></tr>
                        <tr><td><strong>Administrative position</strong></td><td><?php echo ucfirst($row->administrative); ?></td></tr>
                        <tr><td><strong>Research position</strong></td><td><?php echo ucfirst($row->research); ?></td></tr>
                        <tr><td><strong>Affiliated University/Institute</strong></td><td><?php echo $row->institute; ?></td></tr>
                        <tr><td><strong>Faculty/College/Center</strong></td><td><?php echo $row->faculty; ?></td></tr>
                        <tr><td><strong>Department/School/Division</strong></td><td><?php echo $row->department; ?></td></tr>

                        <tr><td><strong>ที่ติดต่อที่ทำงาน (Office's address)</strong> </td><td><?php echo $row->street_en; ?></td></tr>
                        <tr><td><strong>แขวง/ตำบล</strong></td><td><?php echo $row->sub_district_en; ?></td></tr>
                        <tr><td><strong>เขต/อำเภอ</strong></td><td><?php echo $row->district_en; ?></td></tr>
                        <tr><td><strong>จังหวัด</strong></td><td><?php echo $row->province_en; ?></td></tr>
                        <tr><td><strong>รหัสไปรษณีย์</strong></td><td><?php echo $row->postal_code; ?></td></tr>
                        <tr><td><strong>โทรศัพท์</strong></td><td><?php echo $row->phone; ?></td></tr>
                        <tr><td><strong>โทรศัพท์มือถือ</strong></td><td><?php echo $row->mobile_phone; ?></td></tr>
                        <tr><td><strong>Email</strong></td><td><?php echo $row->email; ?></td></tr>
                        <tr><td><strong>Website</strong></td><td><?php echo $row->website; ?></td></tr>
                    <?php endforeach; ?>
                    <tr>
                        <td>
                            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/employment/edit_employment">
                                <input type="hidden" name="researcher_id" value="<?php echo $row->researcher_id; ?>">
                                <button type="submit" class="btn btn-default">Edit</button>
                            </form>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </table>

            <?php endif; ?>
        </div>

    </div>

</div> <!-- /.container -->

