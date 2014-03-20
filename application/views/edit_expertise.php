<div class="container">
    <div class="row well">


        <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/edit_expertise_process">
            <fieldset>
                <?php

                function option_select($value, $data) {
                    if ($value == $data) {
                        echo ' selected';
                    }
                }

                foreach ($query_expertise as $r) :
                    ?>
                    <input type="hidden" name="expertise_id" value="<?php echo $r->expertise_id; ?>">
                    <div class="form-group">
                        <label for="expertise">Field of Expertise/Competency<span style="color: red;">**</span></label>                        
                        <?php include 'expertise.php'; ?>
                        <select class="form-control" id="expertise" name="topic" required>
                            <option value="">---- Select Field ----</option>

                            <option disabled>General physics</option>
                            <?php foreach ($expertise['General physics'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>The Physics of Elementary Particles and Fields</option>
                            <?php foreach ($expertise['The Physics of Elementary Particles and Fields'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>Nuclear Physics</option>
                            <?php foreach ($expertise['Nuclear Physics'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>Atomic and Molecular Physics</option>
                            <?php foreach ($expertise['Atomic and Molecular Physics'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>Electromagnetism, Optics, Acoustics, Fluid dynamics etc.</option>
                            <?php foreach ($expertise['Electromagnetism, Optics, Acoustics, Fluid dynamics etc.'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>Physics of Gases plasmas etc.</option>
                            <?php foreach ($expertise['Physics of Gases plasmas etc.'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>Condensed Matter: Structure, mechanical and thermal properties</option>
                            <?php foreach ($expertise['Condensed Matter: Structure, mechanical and thermal properties'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>Condensed Matter: Electronic structure, electrical, magnetic and optical properties</option>
                            <?php foreach ($expertise['Condensed Matter: Electronic structure, electrical, magnetic and optical properties'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>Interdisciplinary physics and others</option>
                            <?php foreach ($expertise['Interdisciplinary physics and others'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                            <option disabled>Geophysics, Astronomy, Astrophysics</option>
                            <?php foreach ($expertise['Geophysics, Astronomy, Astrophysics'] as $value) : ?>
                                <option value="<?php echo $value; ?>"<?php option_select($value, $r->topic); ?>>&nbsp; &nbsp; <?php echo $value; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    &nbsp;<button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="research">Cancel</a>

                <?php endforeach; ?>
            </fieldset>
        </form>


    </div>
</div>

