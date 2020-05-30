<?php
$this->load->view('header');
$this->load->view('topheader');
?> 

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="<?php echo base_url(); ?>fassets/images/bg/bg14.jpg">
        <div class="container pt-30 pb-30">
            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row"> 
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="text-theme-colored font-36">Cases</h2>
                        <ol class="breadcrumb text-center mt-10 white">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="active">Cases</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>      
    </section>   

    <section>
        <div class="container pt-0">
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
                                <strong>Posted On  : </strong><?php echo date("d-m-Y h:i:sa", strtotime($val['created'])); ?><br>
                                <?php if ($val['case_status'] == 'false') { ?>                                    
                                    <strong>Status  : </strong> <span class="text-theme-colored">open</span>
                                <?php } else { ?>
                                    <strong>Status  : </strong> <span class="text-theme-colored">Close</span>
                                <?php } ?>
                                <?php if ($val['case_decription'] != '') { ?>                                    
                                    <br><strong>Case Detail : </strong>
                                    <?php echo $val['case_decription'];
                    } ?>
<br>
                                <a class="btn btn-dark btn-xs mt-15" href="<?php echo base_url().'Client/lawyerlist/'.$val['categorie'] ?>">view Lawyers</a>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <h3 class="text-theme-colored" style="text-align: center;">Case Deatil not found</h3>    
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>



</div>
<!-- end main-content -->
<?php $this->load->view('footer'); ?>