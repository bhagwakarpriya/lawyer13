<?php $this->load->view('admin/header'); ?>

<div class="row">
    <div class="col-md-12">
        <!--                 BEGIN PROFILE SIDEBAR 
                        <div class="profile-sidebar">
                            <div class="card card-topline-aqua">
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <div class="profile-userpic">
                                            <img src="img/dp.svg" class="img-responsive" alt=""> </div>
                                    </div>
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name">Dr. Bansi Patel </div>
                                        <div class="profile-usertitle-job"> Gynaecologist </div>
                                    </div>
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="pull-right">1,200</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="pull-right">750</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="pull-right">11,172</a>
                                        </li>
                                    </ul>
                                     END SIDEBAR USER TITLE 
                                     SIDEBAR BUTTONS 
                                    <div class="profile-userbuttons">
                                        <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                        <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                    </div>
                                     END SIDEBAR BUTTONS 
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-head card-topline-aqua">
                                    <header>About Me</header>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="profile-desc">
                                        Hello I am Dave Gomache a web and user interface designer. I love to work with the application interface and the web elements.
                                    </div>
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Gender </b>
                                            <div class="profile-desc-item pull-right">Male</div>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Project Done </b>
                                            <div class="profile-desc-item pull-right">30+</div>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Skills</b>
                                            <div class="profile-desc-item pull-right">Java,Spring</div>
                                        </li>
                                    </ul>
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 37 </div>
                                            <div class="uppercase profile-stat-text"> Projects </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 51 </div>
                                            <div class="uppercase profile-stat-text"> Tasks </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 61 </div>
                                            <div class="uppercase profile-stat-text"> Uploads </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-head card-topline-aqua">
                                    <header>Performance</header>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <ul class="performance-list">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-circle-o" style="color:#F39C12;"></i> Total Product Sales <span class="pull-right">23456</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-circle-o" style="color:#DD4B39;"></i> Total Product Refer <span class="pull-right">$234</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-circle-o" style="color:#00A65A;"></i> Total Earn <span class="pull-right"> $345000</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-head card-topline-aqua">
                                    <header>Work Progress</header>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="work-monitor work-progress">
                                        <div class="states">
                                            <div class="info">
                                                <div class="desc pull-left">Operations</div>
                                                <div class="percent pull-right">80%</div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                    <span class="sr-only">80% </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="states">
                                            <div class="info">
                                                <div class="desc pull-left">Consultation</div>
                                                <div class="percent pull-right">55%</div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                    <span class="sr-only">55% </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="states">
                                            <div class="info">
                                                <div class="desc pull-left">Support</div>
                                                <div class="percent pull-right">20%</div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                                    <span class="sr-only">20% </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
                       <div class="row">
                <div class="col-md-12">

                    <?php
                    if (count($clientcase) > 0) {
                        foreach ($clientcase as $key => $val) {
                            ?>
                            <div class="icon-box mt-80 mb-0 p-0">
                                <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
                                    <i class="pe-7s-users"></i>
                                </a>
                                <h3 class="icon-box-title pt-15 mt-0 mb-40"><?php echo $val['case_title']; ?></h3>
                                <hr>
                                <strong>ID : </strong><?php echo $val['_id']; ?><br>
                                <strong>Posted On  : </strong><?php echo date("d-m-Y h:i:sa",  strtotime($val['created'])); ?><br>
                                <?php if ($val['case_status'] == 'false'){  ?>                                    
                                <strong>Status  : </strong> <span class="text-theme-colored">open</span>
                                <?php }else { ?>
                                    <strong>Status  : </strong> <span class="text-theme-colored">Close</span>
                                <?php } ?>
                                <?php if ($val['case_decription'] != ''){  ?>                                    
                                <br><strong>Case Detail : </strong>
                                <p><?php echo $val['case_decription']; }?></p>
                               
                                <a class="btn btn-dark btn-xs mt-15" href="#">view Lawyers</a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-head card-topline-aqua">
                            <header>Cases</header>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="container-fluid">
                               <span class="item"> <span aria-hidden="true" class="icon-people "></span> &nbsp;.icon-people
                                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end page content -->
</div>
<?php $this->load->view('admin/footer'); ?>