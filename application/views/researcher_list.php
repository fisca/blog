<div class="container">
    <div class="row">


        <div class="col-md-12" style="background-color: #e7e3b1;">

            <h2 class="text-center header-type">Researcher List</h2>
            <h3><?php echo $welcome; ?></h3>
            <?php
            $i = 1;
            foreach ($query as $row) {
                echo '<a href="' . $row->researcher_id . '">' . $i. '. ' . $row->firstname_th . ' ' . $row->lastname_th . '</a>';
            }
            ?>

            <p>&nbsp;</p>
        </div>

    </div>

</div> <!-- /.container -->

