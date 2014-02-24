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
    </div>

    <form method="post" class="form-horizontal" role="form" action="home">

        <?php foreach ($input as $item): ?>
            <div class="form-group">          
                <?php echo $item; ?>
            </div>
        <?php endforeach; ?>

        <?php
        echo 'Submit the word you see below: <br>';
        echo $cap['image'];
        echo '<input type="text" name="captcha" value="" />';
        ?>

    </form>
    <!--
    <strong>Session ID:</strong> <?php echo $session_data['session_id']; ?><br>
    <strong>IP Address:</strong> <?php echo $session_data['ip_address']; ?><br>
    <strong>User Agent:</strong> <?php echo $session_data['user_agent']; ?><br>
    <strong>Last Activity:</strong> <?php echo $session_data['last_activity']; ?>
    -->
    <?php /* echo $show . ' xxxxxx'; */ ?><br>
    <?php /* echo $username; */ ?><br>
    <?php /* echo $password; */ ?>
</div> <!-- /.container -->