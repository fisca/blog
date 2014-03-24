<?php ?>

<div class="container">

    <div class="row">

        <?php foreach ($q_profile as $row) : ?>        
            <div class="col-md-6 well">
                <h3>Profile</h3>
                <h4><?php echo $row->title_en . $row->firstname_en . ' ' . $row->lastname_en; ?></h4>
                <p>Address: <?php echo $row->street_en . ' ' . $row->sub_district_th . ' ' . $row->district_th . ' ' . $row->province_th . ' ' . $row->postal_code; ?>
                    <br>Tel.: <?php echo $row->phone; ?>
                    <br>Email: <?php echo $row->email; ?>
                </p>
            </div>
        <?php endforeach; ?>

        <div class="col-md-6 well">
            <h3>Education</h3>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6 well">
            <h3>Employment</h3>
        </div>


        <div class="col-md-6 well">
            <h3>Research</h3>
        </div>

    </div>

</div>

