<div class="container">
    <div class="row well">

        <h2 style="text-align: center;">Profile <span class="glyphicon glyphicon-user"></span></h2>
        <h4 style="text-align: center;">(ข้อมูลประวัติส่วนตัว)</h4>

        <?php if (!$query) : ?>
        <div class="row">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6 alert alert-warning text-center"><strong style="color: red;">ขออภัย คุณยังไม่ได้กรอกข้อมูลประวัติส่วนตัว</strong></div>
                <div class="col-md-3">&nbsp;</div>
            </div>
            <form method="post" action="<?php echo base_url(); ?>index.php/profile/add_profile">
                <div style="text-align: center;">
                    <input type="hidden" name="researcher_key" value="<?php echo $researcher_key; ?>">
                    <button class="btn btn-default">กรอกข้อมูลประวัติส่วนตัว</button>
                </div>
            </form>                

        <?php else: ?>

            <?php foreach ($query as $row) : ?>

                <div class="col-md-2"><strong style="color: #89919c;">ชื่อ-นามสกุล</strong></div>
                <div class="col-md-10">
                    <?php
                    if ($row->title_th) {
                        echo $row->title_th;
                    } echo $row->firstname_th . ' ' . $row->lastname_th;
                    ?>
                </div>
                <div class="col-md-2"><strong style="color: #89919c;">ที่อยู่ที่ติดต่อได้</strong></div>
                <?php
                if ($row->province_th == "กรุงเทพมหานคร") {
                    $sub_didt_th = $row->sub_district_th;
                    $dist_th = $row->district_th;
                    $prov_th = $row->province_th;
                } else {
                    $sub_didt_th = 'ต.' . $row->sub_district_th;
                    $dist_th = 'อ.' . $row->district_th;
                    $prov_th = 'จ.' . $row->province_th;
                }

                if ($row->district_th == 'พัทยา') {
                    $dist_th = $row->district_th;
                }
                ?>
                <div class="col-md-10">
                    <?php
                    echo $row->street_th . ' ' . $sub_didt_th . ' ' . $dist_th . ' ' . $prov_th . ' ' . $row->postal_code;
                    ?>
                </div>

                <div class="col-md-2"><strong style="color: #89919c;">โทรศัพท์</strong></div>
                <div class="col-md-10"><?php echo $row->phone; ?></div>
                <div class="col-md-2"><strong style="color: #89919c;">โทรศัพท์มือถือ</strong></div>
                <div class="col-md-10"><?php echo $row->mobile_phone; ?></div>
                <div class="col-md-2"><strong style="color: #89919c;">Email</strong></div>
                <div class="col-md-10"><?php echo $row->email; ?></div>
                <?php if ($row->website) { ?>
                    <div class="col-md-2">
                        <strong style="color: #89919c;">Website</strong>
                    </div>
                    <div class="col-md-10">
                        <?php echo $row->website; ?>
                    </div>
                <?php } ?>                    

            <?php endforeach; ?>
            <p>&nbsp;</p>
            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/profile/edit_profile">
                <input type="hidden" name="researcher_key" value="<?php echo $row->researcher_key; ?>">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit profile</button>
            </form>



        <?php endif; ?>



    </div>



</div> <!-- /.container -->

