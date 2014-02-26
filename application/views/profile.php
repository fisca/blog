<div class="container">
    <div class="row">


        <div class="col-md-12" style="background-color: #e7e3b1;">

            <h2 class="text-center header-type">Researcher data</h2>
            <h3><?php echo $welcome; ?></h3>
            <?php
            foreach ($query as $row) {
                echo "<p>ชื่อ $row->firstname_th</p>";
                echo "<p>นามสกุล $row->lastname_th</p>";
            }                
            
            ?>

            <p>&nbsp;</p>
        </div>

    </div>

</div> <!-- /.container -->

