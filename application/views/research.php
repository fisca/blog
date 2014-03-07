<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="border: 1px solid  #ccc;"><?php echo $welcome; ?></div>                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h2 style="text-align: center;">Research Data</h2>
                    <h4 style="text-align: center;">&nbsp;</h4>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
            </div>
            <?php
            if (!$query) :
                echo '<p style="color: red;"><strong>ขออภัย ไม่พบข้อมูล</strong></p>';
            endif;
            ?>
            <table class="table table-bordered">
                
                <tr><th>&nbsp</th><th style="text-align: center;">Institue</th><th style="text-align: center;">Period</th><th style="text-align: center;">Supervisor</th></tr>
                
                <tr>
                    <td><strong>Postdoctoral Training</strong></td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                </tr>
                <tr>
                    <td><strong>Research Training : Short Term (<3 months)</strong></td>
                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                </tr>
                <tr>
                    <td><strong>Research Training : Long Term (>3 months)</strong></td>
                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet</td>
                </tr>
                <tr>
                    <td><strong>Field of Expertise/Competency</strong></td>
                    <td colspan="3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</td>
                </tr>
                
            </table>

            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/research/edit_research">
                <input type="hidden" name="researcher_id" value="1">
                <button type="submit" class="btn btn-default">edit</button>
            </form>

            <p>&nbsp;</p>

        </div>

    </div>

</div> <!-- /.container -->

