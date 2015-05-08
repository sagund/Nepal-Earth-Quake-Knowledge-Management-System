 <?php

 $logged_in = Authenticator::isLoggedIn();

 if($logged_in)
 {
    $UD = $_SESSION['UD'];
    $username = $UD['email_address'];
    $user_type = $UD['type'];
    $first_name = $UD['first_name'];
    $last_name = $UD['last_name'];
 }
 else

 {
    $username = "";
 }

 ?>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url() ?>#page-top">AfterQuake.org</a>
            </div>
            <?php 
                $menulink="";
                if (base_url()!=base_url(uri_string())) {
                    $menulink = base_url();
                }
            ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="imp-menu" href="<?php echo $menulink ?>page/tomorrow">Volunteering!</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle imp-menu" data-toggle="dropdown">Missing People <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="#" data-toggle="modal" data-target="#modal_reportMissing">Report Missing</a></li>
                           <li><a href="<?php echo $menulink ?>page/missingpeople">View Missing People</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="<?php echo $menulink ?>#about">About</a>
                    </li> -->
                    <!-- <li>
                        <a class="page-scroll" href="<?php echo $menulink ?>#help">Help</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="<?php echo $menulink ?>victim">Affected Districts</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>page/agencies">Relief Agencies</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a class="page-scroll" href="<?php echo $menulink ?>#contact">Our Contact</a></li>
                            <li><a href="<?php echo $menulink ?>page/emergencycontact">Emergency Contact</a></li>
                        </ul>
                    </li>
                    

                     
                    <?php 
                    if (!$logged_in){ ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Join Us<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               <li><a class="page-scroll" href="<?php echo $menulink ?>register">Register</a></li>
                                <li><a href="<?php echo $menulink ?>login">Login</a></li>
                            </ul>
                        </li>
                    <?php }else{ ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php  echo ($first_name.' '.$last_name); ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php
                                    if($user_type == "volunteer"){
                                        echo '<li><a href="'.base_url().'victim/add">Report a Victim</a></li>';
                                        echo '<li><a href="'.base_url().'media/add">Add Media</a></li>';
                                    }

                                    if($user_type == "admin" ){
                                        echo '<li><a href="'.base_url().'victim/add">Report a Victim</a></li>';
                                        echo '<li><a href="'.base_url().'media/add">Add Media</a></li>';
                                        echo '<li><a href="'.base_url().'donation/add">Add a Donation</a></li>';
                                        echo '<li><a href="'.base_url().'donation/add">Report a Situation!</a></li>';
                                    }
                                    if($user_type == "donor" ){
                                        echo '<li><a href="'.base_url().'donation/add">Add a Donation</a></li>';
                                    }
                                    if($user_type == "editor" ){
                                        echo '<li><a href="'.base_url().'media/add">Add Media</a></li>';
                                    }
                                    if($user_type == "representative" ){
                                        echo '<li><a href="'.base_url().'donation/add">Report a Situation!</a></li>';
                                    }
                                ?>
                               <li><a href="<?php echo base_url(); ?>user/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
