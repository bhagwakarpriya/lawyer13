<?php
error_reporting(0);
$page = $_SESSION['current_page'];
?> <!-- start sidebar menu -->
                <div class="sidebar-container">
                    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                        <div id="remove-scroll">
                            <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                                <li class="sidebar-toggler-wrapper hide">
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                </li>
                                <li class="sidebar-user-panel">
                                    <div class="user-panel">
                                        <div class="pull-left image">
                                            <img src="<?php echo base_url(); ?>admin_assests/img/noimage.png" class="img-circle user-img-circle" alt="User Image" />
                                        </div>
                                        <div class="pull-left info">
                                            <p> <?php echo $_SESSION['username']?></p>
                                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item <?php echo ($_SESSION['current_page'] == "Dashboard") ?  "start active open":""?>">
                                    <a href="<?php echo base_url('admin/Dashboard');?>" class="nav-link "> <i class="fa fa-tachometer"></i> <span class="title">Dashboard</span>
                                    </a>
                                </li>
                                
                                <li class="nav-item <?php echo ($_SESSION['current_page'] == "Lawyers") ?  "start active open":""?>">
                                    <a href="<?php echo base_url('admin/Lawyer');?>" class="nav-link nav-toggle"> <i class="icon-graduation"></i>
                                        <span class="title">Lawyers</span>
                                    </a>                                    
                                </li>
                                <li class="nav-item <?php echo ($_SESSION['current_page'] == "Clients") ?  "start active open":""?>">
                                    <a href="<?php echo base_url('admin/Client');?>" class="nav-link nav-toggle"> <i class="icon-people"></i>
                                        <span class="title">Clients</span>
                                    </a>                                    
                                </li>
                                <li class="nav-item <?php echo ($_SESSION['current_page'] == "Categories") ?  "start active open":""?>">
                                    <a href="<?php echo base_url('admin/Categories');?>" class="nav-link nav-toggle"> <i class="icon-docs"></i>
                                        <span class="title">Categories</span>
                                    </a>                                   
                                </li>
                                <!--<li class="nav-item <?php echo ($_SESSION['current_page'] == "case") ?  "start active open":""?>">
                                    <a href="<?php echo base_url('admin/Case');?>" class="nav-link nav-toggle"> <i class="icon-docs"></i>
                                        <span class="title">Client Cases</span>
                                    </a>                                   
                                </li>-->
                                
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle">
                                        <i class="fa fa-envelope"></i>
                                        <span class="title">Email</span>
                                        <!-- <span class="arrow"></span> -->
                                        <span class="label label-rouded label-menu green-bgcolor"></span>
                                    </a>
                                    <!--<ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="email_inbox.html" class="nav-link ">
                                                <span class="title">Inbox</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="email_view.html" class="nav-link ">
                                                <span class="title">View Mail</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="email_compose.html" class="nav-link ">
                                                <span class="title">Compose Mail</span>
                                            </a>
                                        </li>
                                    </ul>
</li>                  


                            </ul>
                                                </div>-->
                    </div>
                </div>
                <!-- end sidebar menu --> 