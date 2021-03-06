<div class="container">
    <div class="row well">       
        <h2 style="text-align: center;">Add Education <span class="glyphicon glyphicon-book"></span></h2>        


        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/education/add_process">
            <fieldset>             
                <input type="hidden" name="researcher_key" value="<?php echo $researcher_key; ?>">

                <div class="form-group">
                    <label for="grad_year" class="col-lg-2 control-label">ปีที่จบการศึกษา<span style="color: red;">**</span></label>
                    <div class="col-lg-10">
                        <select class="form-control" name="grad_year" id="grad_year" required>
                            <option value="">---- Select Year ----</option>
                            <?php for ($y = 1960; $y <= date("Y"); $y++) : ?>
                                <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="degree" class="col-lg-2 control-label">ระดับการศึกษา (degree)<span style="color: red;">**</span></label>
                    <div class="col-lg-10">
                        <select class="form-control" name="degree" id="degree" required>
                            <option value="">---- Select Degree ----</option>
                            <option value="bachelor">Bachelor's degree</option>
                            <option value="master">Master's degree</option>
                            <option value="doctoral">Doctoral's degree</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="institute" class="col-lg-2 control-label">สถาบันการศึกษา<span style="color: red;">**</span></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="institute" id="institute" required value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="major" class="col-lg-2 control-label">สาขาวิชา (major)<span style="color: red;">**</span></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="major" id="major" required placeholder="Physics, Applied Physics, Material Science, Chemistry, etc.">
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-lg-2 control-label">ประเทศ<span style="color: red;">**</span></label>
                    <div class="col-lg-10">
                        <?php include 'country_array.php'; ?>
                        <select class="form-control" name="country" id="country" required>
                            <option value="">---- Select Country ----</option>
                            <?php foreach ($country as $key => $value): ?>                                    
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="thesis_title" class="col-lg-2 control-label">หัวข้อวิทยานิพนธ์</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="thesis_title" id="thesis_title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="keyword" class="col-lg-2 control-label">Keywords วิทยานิพนธ์</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" name="keyword" rows="3" id="keyword"></textarea>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <a href="index"><strong>Cancel</strong></a> &nbsp;
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>

        <script>
            $(function() {
                $("#grad_year").focus();
            });
        </script>

    </div>

</div> <!-- /.container -->

