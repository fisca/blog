<?php $i = 1; ?>

<div class="container">

    <div class="row well">
        <?php foreach ($q_list as $row) : ?>
            <div class="col-md-12">
                <a href="home/researcher/<?php echo $row->researcher_key; ?>">
                    <?php echo $i . '. ' . $row->firstname_th . ' ' . $row->lastname_th; ?> 
                    (<?php echo $row->firstname_en . ' ' . $row->lastname_en; ?>)
                </a>
            </div>        
            <?php
            $i++;
        endforeach;
        ?>
    </div>

</div>

