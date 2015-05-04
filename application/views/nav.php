 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Disaster</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>help">Help the victims</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>emergency-contacts">Emergency Contacts</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>victim">Victims</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>register">Register</a></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>login">Login</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Link 1</a></li>
                            <li><a href="#">Dropdown Link 2</a></li>
                            <li><a href="#">Dropdown Link 3</a></li>
                            <li class="divider"></li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
