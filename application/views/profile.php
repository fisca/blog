<div class="container">
    <div class="row">


        <div class="col-md-12" style="background-color: #e7e3b1;">

            <div class="row">
                <div class="col-md-4" style="border: solid 1px black;">ค้นหานักวิจัย</div>
                <div class="col-md-4" style="border: solid 1px black;">พิมพ์ประวัติส่วนตัว</div>
                <div class="col-md-4" style="border: solid 1px black;">
                    <?php echo $welcome; ?>
                    <p>&nbsp;</p>
                </div>
            </div>

            <h4>ข้อมูลประวัติส่วนตัว</h4>
            <?php
            if (!$query) :
                echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
            endif;
            ?>
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
            </table>

            <p>&nbsp;</p>
        </div>

    </div>

</div> <!-- /.container -->

