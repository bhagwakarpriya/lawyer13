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

    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row multi-row-clearfix equal-height">
                <div class="blog-posts">
                    <?php
                    if (count($lawyer) > 0) {
                        foreach ($lawyer as $key => $val) {
                            ?>
                            <div class="col-sm-6 col-md-3 col-lg-3 mb-50 list-dashed">
                                <article class="post clearfix pb-20">
                                    <div class="entry-header">

                                        <div class="post-thumb"> <img style="height: 300px;" class = "full-widthimage" alt="" src="<?php echo base_url(); ?>backend/images/lawyers/<?php echo $val[imagepath]; ?>" class="img-responsive"> </div>
                                        <h5 class="entry-title text-center"><a href="#"><?php echo $val['name']['first_name'] . " " . $val['name']['last_name']; ?></a></h5>

                                    </div>
                                    <div class="entry-content">
                                        
                                        <a class="text-gray font-12" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                                    </div>
                                </article>
                            </div><?php
                        }
                    }
                    ?>                   
                </div>
            </div>
        </div>
    </section>
    <!-- Section: event calendar -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 blog-pull-right">
                    <?php
                    if (count($lawyer) > 0) {
                        foreach ($lawyer as $key => $val) {
                            ?>
                            <div class="upcoming-events media maxwidth400 bg-light mb-20">
                                <div class="row equal-height">
                                    <div class="col-sm-4 pr-0 pr-sm-15">
                                        <div class="thumb p-15">
                                            <img class="img-fullwidth" src="<?php echo base_url(); ?>backend/images/lawyers/<?php echo $val[imagepath]; ?>" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 border-right pl-0 pl-sm-15">
                                        <div class="event-details p-15 mt-20">
                                            <h4 class="media-heading text-uppercase font-weight-500"><?php echo $val['name']['first_name'] . " " . $val['name']['last_name']; ?></h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante Nulla vel metus scelerisque ante.</p>
                                            <a href="#" class="btn btn-dark btn-theme-colored btn-xs">View Profile <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="event-count p-15 mt-15">
                                            <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                                                <li class="p-15 mr-5 bg-lightest">Dec</li>
                                                <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                                                <li class="p-15 bg-lightest">2015</li>
                                            </ul>
                                            <ul>
                                                 <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> <?php echo $val['city'];?> City.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <nav>
                                <ul class="pagination pull-right xs-pull-center mb-xs-40">
                                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Archives</h5>
                            <ul class="list-divider list-border">
                                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Vehicle Accidents</a></li>
                                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Family Law</a></li>
                                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
                                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
                                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Case Investigation</a></li>
                                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Business Taxation</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Twitter Feed</h5>
                            <div class="twitter-feed list-border clearfix" data-username="Envato"></div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Image gallery with text</h5>
                            <div class="widget-image-carousel">
                                <div class="item">
                                    <img src="https://placehold.it/365x230" alt="">
                                    <h4 class="title">This is a Demo Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                                </div>
                                <div class="item">
                                    <img src="https://placehold.it/365x230" alt="">
                                    <h4 class="title">This is a Demo Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                                </div>
                                <div class="item">
                                    <img src="https://placehold.it/365x230" alt="">
                                    <h4 class="title">This is a Demo Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Tags</h5>
                            <div class="tags">
                                <a href="#">travel</a>
                                <a href="#">blog</a>
                                <a href="#">lifestyle</a>
                                <a href="#">feature</a>
                                <a href="#">mountain</a>
                                <a href="#">design</a>
                                <a href="#">restaurant</a>
                                <a href="#">journey</a>
                                <a href="#">classic</a>
                                <a href="#">sunset</a>
                            </div>
                        </div>
                    </div>
                </div>        </div>
        </div>
    </section>
</div>
<!-- end main-content -->
<?php $this->load->view('footer'); ?>