<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-deep sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget no-border m-0">
                            <ul class="social-icons icon-sm sm-text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--login logout-->
                    <div class="col-md-9">
                        <div class="widget no-border m-0">
                            <ul class="list-inline pull-right sm-pull-none sm-text-center mt-5">


                                <?php if (isset($result) && $result != "false") { ?>
                                    <li class="m-0 pl-10 pr-10"><font color="red" >Invalid User..Please try agains!</font></li>
                                <?php } ?>

                                <?php if (!isset($_SESSION['username']) && trim($_SESSION['username']) == '') { ?>    
                                    <li class="sm-display-block mt-sm-10 mb-sm-10">

                                        <a class="btn text-white bg-theme-colored" href="<?php echo base_url(); ?>Login">Login</a>
                                        <!-- Registration modal -->
                                       <!--if ($this->uri->segment(2) == '')-->
                                        <button type="button" class="btn text-white bg-theme-colored" data-toggle="modal" data-target=".bs-example-modal-sm">Registration</button>
                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <a href="#" class="">
                                                            <img alt="" src="<?php echo base_url(); ?>fassets/images/logo-wide.png">
                                                        </a>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="text-theme-colored mt-0 pt-5" style="display: flex; justify-content: center; align-items: center; font-size: 40px; margin-bottom: 30px;"> Sign Up As</h4>
                                                        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
                                                            <a class="btn bg-theme-colored text-white" href="<?php echo base_url(); ?>Client/registration">Client</a>
                                                        </div>
                                                        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
                                                            <a class="btn bg-theme-colored text-white" href="<?php echo base_url(); ?>Lawyer/registration">Lawyer</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } else { ?>        
                                    <li class="m-0 pl-10 pr-10"><font color="red" > welcome : <?php echo $_SESSION['username']; ?></font></li>
                                    <li class="sm-display-block mt-sm-10 mb-sm-10">         
                                        <a class="bg-theme-colored p-5 text-white font-11 pl-10 pr-10" href="<?php echo base_url(); ?>Home/logout">Logout</a>
                                    </li>
                                <?php } ?>                       

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
                <div class="container">
                    <nav>
                        <div id="menuzord" class="menuzord red"> <a class="menuzord-brand" href="javascript:void(0)"><img src="<?php echo base_url(); ?>fassets/images/logo-wide.png" alt=""></a>
                            <ul class="menuzord-menu">
                                <li class="active">
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Lawyer/">Lawyer</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>About/">About</a>
                                </li>
                                <?php if (isset($_SESSION['usertype']) && trim($_SESSION['usertype']) == 'lawyer') { ?>    
                                    <li><a href="#">Profile</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url(); ?>Lawyer/updateProfile">Edit Profile</a></li>
                                            <li><a href="<?php echo base_url(); ?>Home/logout">Logout</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                }
                                if (isset($_SESSION['usertype']) && trim($_SESSION['usertype']) == 'client') {
                                    ?>    
                                    <li><a href="#">Profile</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url(); ?>Client/editProfile">Edit Profile</a></li>
                                            <li><a href="<?php echo base_url(); ?>Home/logout">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php } ?>
                                <li><a href="<?php echo base_url(); ?>Categories/">Categories</a> </li>

                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>