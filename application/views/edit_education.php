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
            
            <?php 
            function option_select($value, $data){
                if($value == $data){
                    return ' selected';
                }
            }
            ?>

            <h3 style="text-align: center;">แก้ไข ข้อมูลประวัติการศึกษา</h3>
            <?php
            if (!$query) :
                echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
            endif;
            ?>
            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/profile/edit_process">
                <table class="table">


                    <?php foreach ($query as $row) : ?>
                        <tr>
                            <td>ปีที่จบการศึกษา</td><td>
                                <select name="grad_year">
                                    <option value=""<?php echo option_select('', $row->grad_year); ?>>---- Select Year ----</option>
                                    <?php for($y=1960; $y<=date("Y"); $y++) :?>
                                    <option value="<?php echo $y; ?>"<?php echo option_select($y, $row->grad_year); ?>><?php echo $y; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>ระดับการศึกษา (degree)</td>
                            <td>
                                <select name="degree">
                                    <option value=""<?php echo option_select('', $row->degree); ?>>---- Select Degree ----</option>
                                    <option value="master"<?php echo option_select('master', $row->degree); ?>>Master's degree</option>
                                    <option value="doctoral"<?php echo option_select('doctoral', $row->degree); ?>>Doctoral's degree</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>สถาบันการศึกษา</td><td><input name="institue" value="<?php echo $row->institue; ?>"></td>
                        </tr>
                        <tr>
                            <td>สาขาวิชา</td><td><input name="major" value="<?php echo $row->major; ?>"></td>
                        </tr>
                        <tr>
                            <td>ประเทศ</td>
                            <td><?php include 'country_arr.php'; ?>
                                <select name="country">
                                    <option value="">---- Select Country ----</option>
                                <?php foreach ($country as $key=>$value): ?>                                    
                                    <option value="<?php echo $value; ?>"><?php echo $key; ?></option>
                                <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                    <?php endforeach; ?>                   

                </table>
                <p>&nbsp;</p>
                <button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="education">Cancel</a>
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

