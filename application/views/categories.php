<?php 
$this->load->view('header');
$this->load->view('topheader'); ?> 

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="<?php echo base_url(); ?>fassets/images/bg/bg14.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">Categories</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Categories</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>   

    <!-- Section: Practices Area -->
    <section class="bg-lighter">
      <div class="container pb-30">
        <div class="section-title title-border icon-bg">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 page-title"><i class="fa fa-legal"></i>Practices Area</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
           <div class="row">
        

             
              <?php
                if(count($specilization)>0){
                    foreach($specilization as $key=>$val){?>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
              <div class="box-hover-effect effect2 bg-lightest-gray wow fadeInUp maxwidth400 p-10" data-wow-duration="1.8s" data-wow-offset="10">
                <div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url().'backend/images/categories/'.$val['image'];?>" alt="featured project"  width="476">
                  <div class="overlay white">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <div class="overlay-details text-center">
                          <a href="#"><h4 class="text-theme-colored mt-0"><?php echo $val['tag'];?></h4></a>                           
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="details">
                    <h5><?php echo $val['tag'];?></h5>
                  </div>
                </div>
              </div>
            </div>
            <?php }}?>
        </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
<?php $this->load->view('footer');?>