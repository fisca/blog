<div class="container">
    <div class="row">


        <div class="col-md-12" style="background-color: #e7e3b1;">

            <div class="row">
                <div class="col-md-3" style="border: solid 1px black;">ค้นหานักวิจัย</div>
                <div class="col-md-4" style="border: solid 1px black;">พิมพ์ประวัติส่วนตัว</div>
                <div class="col-md-5" style="border: solid 1px black;">
                    <?php echo $welcome; ?>
                    <p>&nbsp;</p>
                </div>
            </div>
            <h3>รายชื่อนักวิจัย</h3>
            <?php
            $i = 1;
            foreach ($query as $row) {
                echo '<a href="' .  base_url() . 'index.php/profile/id/' . $row->researcher_id . '">' . $i. '. ' . $row->firstname_th . ' ' . $row->lastname_th . '</a>';
            }
            ?>

            <p>&nbsp;</p>
        </div>

    </div>

</div> <!-- /.container -->

