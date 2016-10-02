<!DOCTYPE html>
<html>
<head>
    <title>Try it</title>

    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Tutelage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

    <?php
        $this->load->view('links/ref');
    ?>

</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="header-nav">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.html"><i class="glyphicon glyphicon-education" aria-hidden="true"></i><span>Try</span>it</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">

                    <?php

                        if(isset($this->session->userdata['logged_in']))
                        {
                            $email = ($this->session->userdata['logged_in']['email']);
                            $username = ($this->session->userdata['logged_in']['username']);
                            $type = ($this->session->userdata['logged_in']['user_type']);

                            if($type == 'CUSTOMER')
                            {
                    ?>
                                <ul class="nav navbar-nav">
                                    <li><a class="hvr-overline-from-center button2 active" href="<?php echo site_url('reserveController/edit_content'); ?>">Home</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('reserveController/edit_content'); ?>">Place Order</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="about.html">About</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('hello/index'); ?>">Logout</a></li>
                                    <li><a class="hvr-overline-from-center button2" >Welcome <?php echo $username?></a></li>
                                </ul>
                    <?php
                            }
                            else if($type == 'ADMIN')
                            {
                    ?>
                                <ul class="nav navbar-nav">
                                    <li><a class="hvr-overline-from-center button2 active" href="<?php echo site_url('reserveController/edit_content'); ?>">Home</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('reserveController/edit_content'); ?>">Manage Users</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('reserveController/edit_content'); ?>">Manage Stock</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="about.html">About</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('hello/index'); ?>">Logout</a></li>
                                    <li><a class="hvr-overline-from-center button2" >Welcome <?php echo $username?></a></li>
                                </ul>
                    <?php
                            }
                            else if($type == 'CASHIER')
                            {
                    ?>
                                <ul class="nav navbar-nav">
                                    <li><a class="hvr-overline-from-center button2 active" href="<?php echo site_url('reserveController/edit_content'); ?>">Home</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('reserveController/edit_content'); ?>">View Orders</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="about.html">About</a></li>
                                    <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('hello/index'); ?>">Logout</a></li>
                                    <li><a class="hvr-overline-from-center button2" >Welcome <?php echo $username?></a></li>
                                </ul>
                    <?php
                            }
                        }
                    ?>
            </nav>
        </div>

    </div>
</div>
<!-- header -->

</body>
</html>
