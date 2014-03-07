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
        <?php echo link_tag('assets/stylesheet/stylesheet.css', 'stylesheet', 'text/css'); ?>

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        
        <?php echo link_tag('assets/jqueryui/jquery-ui-1.10.3/themes/base/jquery.ui.datepicker.css', 'stylesheet', 'text/css'); ?>
        <script src="<?php echo base_url(); ?>assets/jqueryui/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
        <style>
            #ui-datepicker-div{
                background-color: #b2dba1;
            }
            .ui-icon.ui-icon-circle-triangle-e,
            .ui-icon.ui-icon-circle-triangle-w {
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">Home</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo base_url(); ?>index.php/profile">Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/education">Education</a></li>
                                <li><a href="#">Academic</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/research">Research</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div> <!-- /.container -->
