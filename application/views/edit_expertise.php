<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Edit Expertise/Competency</h2>
                    <h4 style="text-align: center;">&nbsp;</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>
        <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/edit_expertise_process">
            <table class="table table-bordered">
                <?php
                function option_select($value, $data) {
                if ($value == $data) {
                    echo ' selected';
                }
            }
                foreach ($query_expertise as $r) : ?>
                    <tr>
                        <td><strong>Field of Expertise/Competency</strong></td>
                        <td colspan="3">
                            <input type="hidden" name="expertise_id" value="<?php echo $r->expertise_id; ?>">
                            <?php include 'expertise.php'; ?>
                            <select id="expertise" name="topic">
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
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td><td colspan="3"><button type="submit" class="btn btn-default">Submit</button> &nbsp;<a href="research">Cancel</a></td></tr>
                
                <?php endforeach; ?>
            </table>
        </form>
            
        </div>
    </div>
</div>

