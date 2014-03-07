<div class="container">
    <div class="row">


        <div class="col-md-12">

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Edit Education</h2>
                    <h4 style="text-align: center;">(แก้ไขข้อมูลประวัติการศึกษา)</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>
            <?php

            function option_select($value, $data) {
                if ($value == $data) {
                    return ' selected';
                }
            }

            if (!$query) :
                echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
            endif;
            ?>
            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/education/edit_process">
                <table class="table">


                    <?php foreach ($query as $row) : ?>
                        <tr>                        
                            <td>ปีที่จบการศึกษา<span style="color: red;">**</span></td><td>
                                <input type="hidden" name="education_id" value="<?php echo $row->education_id; ?>">
                                <select name="grad_year" required>
                                    <option value=""<?php echo option_select('', $row->grad_year); ?>>---- Select Year ----</option>
                                    <?php for ($y = 1960; $y <= date("Y"); $y++) : ?>
                                        <option value="<?php echo $y; ?>"<?php echo option_select($y, $row->grad_year); ?>><?php echo $y; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>ระดับการศึกษา (degree)<span style="color: red;">**</span></td>
                            <td>
                                <select name="degree" required>
                                    <option value=""<?php echo option_select('', $row->degree); ?>>---- Select Degree ----</option>
                                    <option value="bachelor"<?php echo option_select('bachelor', $row->degree); ?>>Bachelor's degree</option>
                                    <option value="master"<?php echo option_select('master', $row->degree); ?>>Master's degree</option>
                                    <option value="doctoral"<?php echo option_select('doctoral', $row->degree); ?>>Doctoral's degree</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>สถาบันการศึกษา<span style="color: red;">**</span></td><td><input style="width: 50%;" name="institute" required value="<?php echo $row->institute; ?>"></td>
                        </tr>
                        <tr>
                            <td>สาขาวิชา<span style="color: red;">**</span></td><td><input name="major" required value="<?php echo $row->major; ?>"></td>
                        </tr>
                        <tr>
                            <td>ประเทศ<span style="color: red;">**</span></td>
                            <td><?php include 'country_array.php'; ?>
                                <select name="country" required>
                                    <option value="">---- Select Country ----</option>
                                    <?php foreach ($country as $key => $value): ?>                                    
                                        <option value="<?php echo $value; ?>"<?php echo option_select($value, $row->country); ?>><?php echo $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>หัวข้อวิทยานิพนธ์</td><td><input style="width: 100%;" name="thesis_title" value="<?php echo $row->thesis_title; ?>"></td>
                        </tr>
                        <tr>
                            <td>Keywords วิทยานิพนธ์</td><td><textarea style="width: 100%;" name="keyword"><?php echo $row->keyword; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Field of Expertise</td>
                            <td>
                                <?php include 'expertise.php'; ?>
                                <select id="expertise" name="expertise">
                                    <option value="">---- Select Field ----</option>

                                    <option disabled>General physics</option>
                                    <?php foreach ($expertise['General physics'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                    <option disabled>The Physics of Elementary Particles and Fields</option>
                                    <?php foreach ($expertise['The Physics of Elementary Particles and Fields'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                    <option disabled>Nuclear Physics</option>
                                    <?php foreach ($expertise['Nuclear Physics'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                    <option disabled>Atomic and Molecular Physics</option>
                                    <?php foreach ($expertise['Atomic and Molecular Physics'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                    <option disabled>Electromagnetism, Optics, Acoustics, Fluid dynamics etc.</option>
                                    <?php foreach ($expertise['Electromagnetism, Optics, Acoustics, Fluid dynamics etc.'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                    <option disabled>Physics of Gases plasmas etc.</option>
                                    <?php foreach ($expertise['Physics of Gases plasmas etc.'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                    <option disabled>Condensed Matter: Structure, mechanical and thermal properties</option>
                                    <?php foreach ($expertise['Condensed Matter: Structure, mechanical and thermal properties'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                    <option disabled>Condensed Matter: Electronic structure, electrical, magnetic and optical properties</option>
                                    <?php foreach ($expertise['Condensed Matter: Electronic structure, electrical, magnetic and optical properties'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                    <option disabled>Interdisciplinary physics and others</option>
                                    <?php foreach ($expertise['Interdisciplinary physics and others'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>
                                        
                                        <option disabled>Geophysics, Astronomy, Astrophysics</option>
                                    <?php foreach ($expertise['Geophysics, Astronomy, Astrophysics'] as $value) : ?>
                                        <option value="<?php echo $value; ?>">&nbsp; &nbsp; <?php echo $value; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </td>
                        </tr>
                    <?php endforeach; ?>                   
                    <tr><td>&nbsp;</td><td><button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="education">Cancel</a></td></tr>
                </table>
            </form>

            <p><strong>หมายเหตุ</strong> ใส่ keyword เป็นภาษาอังกฤษ คั่นด้วย comma (,) เช่น operation research, simulation, numerical analysis เป็นต้น</p>

        </div>

    </div>

</div> <!-- /.container -->

