
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
                            <li>Lawyer</li>
                            <li class="active"><?php echo $lawyerdetail['lawyer_meta']['lawyer_id']['name']['first_name'] . " " . $lawyerdetail['lawyer_meta']['lawyer_id']['name']['last_name']; ?></li>
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
                    if (count($lawyerdetail) > 0) {
                        foreach ($lawyerdetail as $key => $val) {
                            ?>
                            <div class="upcoming-events media maxwidth400 bg-light mb-20">
                                <div class="row equal-height">
                                    <div class="col-sm-3 pr-0 pr-sm-15">
                                        <div class="thumb p-15">
                                            <img style="width: 200px;height: 200px;" src="<?php echo base_url(); ?>backend/images/lawyers/<?php echo $val['lawyer_id']['imagepath'] ?>" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 border-right pl-0 pl-sm-15">
                                        <div class="event-details p-15 mt-20">
                                            <ul>
                                                <li class="p-10">Experience  :<?php echo $val['experienceText']; ?></li>
                                                <li class="p-10">State Bar Council  :<?php echo $val['statebarcouncil_select']; ?></li>
                                                <li class="p-10">Designation  :<?php echo $val['designation']; ?></li>
                                            </ul>



                                            <div class="">
                                                <h5 class="text-highlight light p-10"><i class="fa fa-edit mr-5"></i>Professional Summary</h5>
                                                <div class="opening-hours">
                                                    <p><?php echo $val['aboutme'] ?></p>
                                                </div>
                                            </div>

                                            <div class="">
                                                <h5 class="text-highlight light p-10"><i class="fa fa-cog mr-5"></i>Education</h5>
                                                <div class="opening-hours">
                                                    <?php
                                                    $edu = explode(",", $val['edulist']);
//                                                    echo $edu.count();
                                                    for ($i = 1; $i < count($edu); $i++) {
                                                        $edu1 = explode("|", $edu[$i]);
                                                        ?>
                                                        <p><?php echo '<i class="fa fa-graduation-cap mr-5"></i>' . $edu1[0] . '&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-university"></i> ' . $edu1[1]; ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="">
                                                <h5 class="text-highlight light p-10"><i class="fa fa-cog mr-5"></i>Expertise In</h5>
                                                <div class="opening-hours">
                                                    <h5 class="font-8 text-theme-colored">Primary Expertise</h5>
                                                    <?php
                                                    $explist = explode(",", $val['explist']);
//                                                    echo $edu.count();
                                                    for ($i = 1; $i < count($explist); $i++) {
                                                        $explist1 = explode("|", $explist[$i]);
                                                        ?>
                                                        <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $explist1[0]; ?></p>
                                                    <?php } ?>

                                                    <h5 class="font-8 text-theme-colored">secondary Expertise</h5>
                                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $val['secondaryexpertise'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h5 class="text-highlight light p-10"><i class="fa fa-edit mr-5"></i>fees</h5>
                                                <div class="opening-hours col-sm-6">
                                                    <div class="col-sm-9 text-theme-colored">
                                                        <?php echo 'Phone Fees : '; ?>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo $val['phonefees']; ?>
                                                    </div>
                                                </div>
                                                <div class="opening-hours col-sm-6">
                                                    <div class="col-sm-9 text-theme-colored">
                                                        <?php echo 'Meeting Fees : '; ?>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo $val['meetingfees']; ?>
                                                    </div>
                                                </div>

                                                <div class="opening-hours col-sm-6">
                                                    <div class="col-sm-9 text-theme-colored">
                                                        <?php echo 'Fill case in court Fees : '; ?>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo $val['fillcaseincourtfees']; ?>
                                                    </div>
                                                </div>

                                                <div class="opening-hours col-sm-6">
                                                    <div class="col-sm-9 text-theme-colored">
                                                        <?php echo 'Hearing Fees : '; ?>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo $val['hearingfees']; ?>
                                                    </div>
                                                </div>
                                                <div class="opening-hours col-sm-6">
                                                    <div class="col-sm-9 text-theme-colored">
                                                        <?php echo 'Review document Fees: '; ?>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <?php echo $val['reviewdocfees']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="event-count p-15 mt-15">
                                            <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                                                <li class="p-15 mr-5 bg-lightest"><?php echo date(M, strtotime($val['lawyer_id']['created'])) ?></li>
                                                <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> <?php echo date(d, strtotime($val['lawyer_id']['created'])) ?></li>
                                                <li class="p-15 bg-lightest"><?php echo date(Y, strtotime($val['lawyer_id']['created'])) ?></li>
                                            </ul>
                                            <ul>
                                                <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> <?php echo $val['lawyer_id']['city']; ?> City.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
<?php $this->load->view('footer'); ?>