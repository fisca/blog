<?php
/*
  // Captcha
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

 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

        <title><?php echo $title; ?></title>

        <!-- Bootstrap core CSS -->
        <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css', 'stylesheet', 'text/css'); ?>

        <!-- Custom styles for this template -->
        <?php echo link_tag('assets/stylesheet/signin.css', 'stylesheet', 'text/css'); ?>

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body>
        <div class="container">

            <form class="form-signin" role="form" method="post" action="<?php echo base_url(); ?>index.php/login/process">

                <h2 class="form-signin-heading">Please log in</h2>
                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>


                <?php
                /*
                  if (isset($msg['captcha'])) {
                  echo '<p style="color: red">' . $msg['captcha'] . '</p>';
                  }
                  echo 'Submit the word you see below: <br>';
                  echo $cap['image'];
                  echo ' <input type="text" name="captcha" value="" required="required" />';
                 */
                ?>


            </form>

        </div> <!-- /.container -->