<div class="container">
    <div class="row">


        <div class="col-md-12">

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Edit Research data</h2>
                    <h4 style="text-align: center;">&nbsp;</h4>
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
                <table class="table table-bordered">

                    <?php foreach ($query as $row) : ?>
                        <tr>                        
                            <th>&nbsp;</th><th>Institute</th><th>Period</th><th>Supervisor</th>
                        </tr>
                        <tr>
                            <td>Postdoctoral Training</td>
                            <td><input style="width: 100%;" id="institute_postdoc" name="institute_postdoc" value=""></td>
                            <td>
                                <input type="text" id="start_postdpoc" name="start_postdpoc"> - 
                                <input type="text" id="end_postdpoc" name="end_postdpoc">
                                <script>
                                    $(function() {
                                        $("#institute_postdoc").focus();
                                        // Date Picker
                                        $("#start_postdpoc").datepicker();
                                        $("#end_postdpoc").datepicker();
                                    }); /* END jQuery */
                                </script>
                            </td>
                            <td><input name="supervisor_postdoc" value="Lorem ipsum dolor"></td>                            
                        </tr>
                        <tr>
                            <td>Research Training : Short Term (<3 months)</td>
                            <td><input style="width: 100%;" name="institute_short" required value=""></td>
                            <td>
                                <input type="text" id="start_short" name="start_postdpoc"> - 
                                <input type="text" id="end_short" name="end_postdpoc">
                                <script>
                                    $(function() {
                                        $("#start_short").datepicker();   // Date Picker
                                        $("#end_short").datepicker();   // Date Picker
                                    }); /* END jQuery */
                                </script>
                            </td>
                            <td><input name="supervisor_short" value="Lorem ipsum dolor"></td>                            
                        </tr>
                        <tr>
                            <td>Research Training : Long Term (>3 months)</td>
                            <td><input style="width: 100%;" name="institute_long" required value=""></td>
                            <td>
                                <input type="text" id="start_long" name="start_long"> - 
                                <input type="text" id="end_long" name="end_long">
                                <script>
                                    $(function() {
                                        $("#start_long").datepicker();   // Date Picker
                                        $("#end_long").datepicker();   // Date Picker
                                    }); /* END jQuery */
                                </script>
                            </td>
                            <td><input name="supervisor_short" value="Lorem ipsum dolor"></td>                           
                        </tr>

                        <tr>
                            <td>Field of Expertise</td>
                            <td colspan="3">
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
                    <tr><td>&nbsp;</td><td colspan="3"><button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="research">Cancel</a></td></tr>
                </table>
            </form>

            <p><strong>หมายเหตุ</strong> ใส่ keyword เป็นภาษาอังกฤษ คั่นด้วย comma (,) เช่น operation research, simulation, numerical analysis เป็นต้น</p>

        </div>

    </div>

</div> <!-- /.container -->

