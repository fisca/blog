<?php
$this->load->helper('captcha');
$vals = array(
    'img_path' => './captcha/',
    'img_url' => 'http://localhost/blog/captcha/'
);

$cap = create_captcha($vals);

$data = array(
    'captcha_time' => $cap['time'],
    'ip_address' => $this->input->ip_address(),
    'word' => $cap['word']
);

$query = $this->db->insert_string('captcha', $data);
$this->db->query($query);
?>
<div class="container">

    <div class="row">
        <h2 style="text-align: center;">User Login</h2>   

        <p style="color: red; text-align: center;">
            <?php
            if (isset($msg['user'])) {
                echo $msg['user'];
            }
            ?>
        </p>

        <form method="post" class="form-horizontal" role="form" action="<?php echo base_url(); ?>index.php/login/process">

            <?php foreach ($input as $item): ?>
                <div class="form-group">          
                    <?php echo $item; ?>
                </div>
            <?php endforeach; ?>
            <div class="col-md-4"></div>

            <div class="col-md-5">
                <?php
                if (isset($msg['captcha'])) {
                    echo '<p style="color: red">' . $msg['captcha'] . '</p>';
                }
                echo 'Submit the word you see below: <br>';
                echo $cap['image'];
                echo ' <input type="text" name="captcha" value="" required="required" />';
                ?>
            </div>

        </form>
    </div>
</div> <!-- /.container -->