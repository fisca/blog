<div class="container">
    <div class="row">


        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Profile</h2>
                    <h4 style="text-align: center;">(ข้อมูลประวัติส่วนตัว)</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>

            <h3>รายชื่อนักวิจัย</h3>
            <?php
            $i = 1;
            foreach ($query as $row) {
                echo '<a href="' . base_url() . 'index.php/profile/key/' . $row->researcher_key . '">' . $i . '. ' . $row->title_th . ' ' . $row->firstname_th . ' ' . $row->lastname_th . '</a><br>';
                $i++;
            }
            ?>

            <p>&nbsp;</p>
        </div>

    </div>

</div> <!-- /.container -->

