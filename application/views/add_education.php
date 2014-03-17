<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Add Education</h2>
                    <h4 style="text-align: center; color: #89919c;">(เพิ่มข้อมูลประวัติการศึกษา)</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>

            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/education/add_process">
                <table class="table">

                    <tr>                        
                        <td>ปีที่จบการศึกษา<span style="color: red;">**</span></td><td>
                            <input type="hidden" name="education_id" value="">
                            <select name="grad_year" required>
                                <option value="">---- Select Year ----</option>
                                <?php for ($y = 1960; $y <= date("Y"); $y++) : ?>
                                    <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
                                <?php endfor; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>ระดับการศึกษา (degree)<span style="color: red;">**</span></td>
                        <td>
                            <select name="degree" required>
                                <option value="">---- Select Degree ----</option>
                                <option value="bachelor">Bachelor's degree</option>
                                <option value="master">Master's degree</option>
                                <option value="doctoral">Doctoral's degree</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>สถาบันการศึกษา<span style="color: red;">**</span></td><td><input style="width: 100%;" name="institute" required value=""></td>
                    </tr>
                    <tr>
                        <td>สาขาวิชา<span style="color: red;">**</span></td><td><input style="width: 100%;" name="major" required value=""></td>
                    </tr>
                    <tr>
                        <td>ประเทศ<span style="color: red;">**</span></td>
                        <td><?php include 'country_array.php'; ?>
                            <select name="country" required>
                                <option value="">---- Select Country ----</option>
                                <?php foreach ($country as $key => $value): ?>                                    
                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>หัวข้อวิทยานิพนธ์</td><td><input style="width: 100%;" name="thesis_title" value=""></td>
                    </tr>
                    <tr>
                        <td>Keywords วิทยานิพนธ์</td><td><textarea style="width: 100%;" name="keyword"></textarea></td>
                    </tr>


                    <tr><td>&nbsp;</td><td><button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="education">Cancel</a></td></tr>
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

