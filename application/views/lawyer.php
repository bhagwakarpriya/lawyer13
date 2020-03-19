<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo '<pre>';
//print_r($lawyer);
//die();
?><?php 
$this->load->view('header');?>
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
        <div class="row multi-row-clearfix">
          <div class="blog-posts">
            <?php
                if(count($lawyer)>0){
                    foreach($lawyer as $key=>$val){?>
            <div class="col-sm-6 col-md-3 col-lg-3 mb-50 list-dashed">
              <article class="post clearfix pb-20">
                <div class="entry-header">
                  <div class="post-thumb"> <img class = "full-widthimage" alt="" src="<?php echo base_url(); ?>backend/images/lawyers/<?php echo $val[imagepath];?>" class="img-responsive"> </div>
                  <h5 class="entry-title text-center"><a href="#"><?php echo $val['name']['first_name']." ".$val['name']['last_name']; ?></a></h5>
                 <!-- <ul class="list-inline font-12 mb-20 mt-10">
                    <li>posted by <a href="#" class="text-theme-colored">Admin |</a></li>
                    <li><span class="text-theme-colored">SEP 12,15</span></li>
                  </ul>-->
                </div>
                <!--<div class="entry-content">
                  <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua <a href="#">[...]</a></p>
                  <ul class="list-inline like-comment pull-left font-12">
                    <li><i class="pe-7s-comment"></i>36</li>
                    <li><i class="pe-7s-like2"></i>125</li>
                  </ul>
                  <a class="pull-right text-gray font-12" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                </div>-->
              </article>
                </div><?php }}?>
            
            
              
              <div class="col-md-12">
              <nav>
                <ul class="pagination">
                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
<?php $this->load->view('footer');?>