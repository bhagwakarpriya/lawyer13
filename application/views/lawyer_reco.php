<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo '<pre>';
//print_r($lawyer);
//die();
?><?php $this->load->view('header'); ?>
<?php $this->load->view('topheader'); ?> 
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="<?php echo base_url(); ?>fassets/images/bg/bg14.jpg">
        <div class="container pt-30 pb-30">
            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row"> 
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="text-theme-colored font-36">Lawyer</h2>
                        <ol class="breadcrumb text-center mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li class="active">Lawyer</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>      
    </section>   


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (count($lawyer) > 0) {
                        foreach ($lawyer as $key => $val) {
                            if ($val['payload']['lawyer']['usertype'] == 'admin') {
                                continue;
                            }
                            ?>
                            <div class="upcoming-events media maxwidth400 bg-light mb-20">
                                <div class="row equal-height">
                                    <div class="col-sm-3 pr-0 pr-sm-15">
                                        <div class="thumb p-15">
                                            <img style="width: 150px;height: 150px;" src="<?php echo base_url(); ?>backend/images/lawyers/<?php echo $val['payload']['lawyer']['imagepath']; ?>" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 border-right">
                                        <div class="event-details p-20 mt-20">
                                            <h4 class="media-heading text-uppercase font-weight-500"><?php echo $val['payload']['lawyer']['name']['first_name'] . " " . $val['payload']['lawyer']['name']['last_name']; ?></h4>
                                            <a href="<?php echo base_url(); ?>Lawyer/profile/<?php echo $val['payload']['lawyer']['_id']; ?>" class="btn btn-dark btn-theme-colored btn-xs">View Full Profile <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="event-count p-15 mt-15">
                                            <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                                                <li class="p-15 mr-5 bg-lightest"><?php echo date(M, strtotime($val['payload']['lawyer']['created'])) ?></li>
                                                <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> <?php echo date(d, strtotime($val['payload']['lawyer']['created'])) ?></li>
                                                <li class="p-15 bg-lightest"><?php echo date(Y, strtotime($val['payload']['lawyer']['created'])) ?></li>
                                            </ul>
                                            <ul>
                                                <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i><?php echo $val['payload']['lawyer']['city']; ?> City.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }  else { ?>
                    <h3 class="text-theme-colored" style="text-align: center;">Lawyer not found</h3>    
                   <?php  }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
<?php $this->load->view('footer'); ?>