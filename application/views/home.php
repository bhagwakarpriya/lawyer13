<?php
// echo '<pre>';
// print_r($_SESSION);
// die;
$this->load->view('header');
?>
<?php $this->load->view('topheader'); ?> 

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
        <div class="container-fluid p-0">

            <!-- Slider Revolution Start -->
            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>
                        <!-- SLIDE 1 -->
                        <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="<?php echo base_url(); ?>fassets/images/bg/bg8.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description=""> 
                            <!-- MAIN IMAGE --> 
                            <img src="<?php echo base_url(); ?>fassets/images/bg/bg8.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="5" data-no-retina> 
                            <!-- LAYERS --> 

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-black font-raleway"
                                 id="rs-1-layer-1"

                                 data-x="['left']"
                                 data-hoffset="['30']"
                                 data-y="['middle']"
                                 data-voffset="['-75']"
                                 data-fontsize="['70']"
                                 data-lineheight="['90']"

                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000" 
                                 data-splitin="none" 
                                 data-splitout="none" 
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap; font-weight:500;">Find Your Lawyer</div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-theme-colored font-raleway" 
                                 id="rs-1-layer-2"

                                 data-x="['left']"
                                 data-hoffset="['30']"
                                 data-y="['middle']"
                                 data-voffset="['0']"
                                 data-fontsize="['56']"
                                 data-lineheight="['80']"

                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1200" 
                                 data-splitin="none" 
                                 data-splitout="none" 
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap; font-weight:600; letter-spacing:1px;">to Resovle your Legal Matter</div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-black font-raleway" 
                                 id="rs-1-layer-3"

                                 data-x="['left']"
                                 data-hoffset="['30']"
                                 data-y="['middle']"
                                 data-voffset="['70']"
                                 data-fontsize="['16']"
                                 data-lineheight="['24']"

                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1400" 
                                 data-splitin="none" 
                                 data-splitout="none" 
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                                     <?php if (isset($_SESSION['usertype']) && trim($_SESSION['usertype']) == 'client') { ?>    

                                    <a class="btn btn-dark btn-flat btn-theme-colored pl-20 pr-20 mt-sm-30" href="#SubmitYourMatter">Submit Your Matter</a> </div>
                            <?php } ?>
                        </li>

                    </ul>
                </div><!-- end .rev_slider -->
            </div><!-- end .rev_slider_wrapper -->
            <script>
                $(document).ready(function (e) {
                    $(".rev_slider").revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "on",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "gyges",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 800,
                                style: "hebe",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                            }
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1170, 1024, 778, 480],
                        gridheight: [645, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            origo: "slidercenter",
                            speed: 1000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                            type: "scroll"
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                });
            </script>
            <!-- Slider Revolution Ends -->

        </div>
    </section>


    <!-- Section: Practices Area okays -->
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
                        $counter = 0;
                        if (count($specilization) > 0) {
                            foreach ($specilization as $key => $val) {
                                if ($counter < 4) {
                                    ?>
                                    <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                                        <div class="box-hover-effect effect2 bg-lightest-gray wow fadeInUp maxwidth400 p-10" data-wow-duration="1.8s" data-wow-offset="10">
                                            <div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url() . 'backend/images/categories/' . $val['image']; ?>" alt="featured project"  width="476">
                                                <div class="overlay white">
                                                    <div class="display-table">
                                                        <div class="display-table-cell">
                                                            <div class="overlay-details text-center">
                                                                <h4 class="text-theme-colored mt-0"><?php echo $val['tag']; ?></h4>
                                                                <p class="pl-20 pr-20">Our experienced lawyers offer great trial preparation.</p>
                                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-xs" href="#">Read more</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <h5><?php echo $val['tag']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $counter++;
                                } else {
                                    break;
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
    </section>
    <?php if (trim($_SESSION['usertype']) != 'lawyer') { ?>    
        <!-- Section: Case -->
        <section id="SubmitYourMatter" class="bg-no-repeat bg-img-cover">
            <div class="container pb-0">
                <div class="row">
                    <div class="col-md-5 col-md-offset"> <img class="mt-10" src="<?php echo base_url(); ?>fassets/images/about/1.png" alt=""> </div>
                    <div class="col-md-6 p-20">
                        <div class="bg-deep p-30 pt-20">
                            <h4 class="line-bottom text-theme-colored text-uppercase mt-0 mb-20">Submit Your Matter</h4>
                            <p>Submit Your Request and Connect with Lawyers.</p>
                            <form id="casedetail" name="casedetail" class="form-line" method="post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <input name="case_title" class="form-control" type="text" required="" placeholder="Case Title">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <select name="categorie" class="form-control">
                                                <option value="" disabled hidden selected>Select a Category</option>
                                                <?php
                                                if (count($alltag) > 0) {
                                                    foreach ($alltag as $key => $val) {
                                                        ?>
                                                        <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <select class="form-control" name="city_select">
                                                <option value="" >Select City</option>
                                                <option value="Surat" >Surat</option>
                                                <option value="Ahmedabad" >Ahmedabad</option>
                                                <option value="Vadodara" >Vadodara</option>
                                                <option value="Rajkot" >Rajkot</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <textarea name="case_decription" class="form-control required"  placeholder="Enter Case Matter" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-dark btn-theme-colored">SEND TO LAWYER</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php } ?>
    <!--Divider: Testimonials 
   <section class="divider parallax layer-overlay" data-stellar-background-ratio="0.5" data-bg-img="<?php echo base_url() ?>fassets/images/bg/bg14.jpg">
 <div class="container">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="testimonial-carousel fullwidth text-center dot-theme-colored">
    <?php
    $counter = 0;
    if (count($lawyer) > 0) {
        foreach ($lawyer as $key => $val) {
            if ($counter < 5) {
                ?>  
                        <div class="item">
                        <div class="thumb"><img src="<?php echo base_url(); ?>backend/images/lawyers/<?php echo $val[imagepath]; ?>" alt="" width="120" class="img-circle"></div>
                           <div class="content">
                               <h5 class="text-theme-colored"><?php echo $val['name']['first_name'] . " " . $val['name']['last_name']; ?></h5>
                              <h6 class="title text-white">Developer</h6>
                           </div>
                           </div>
                <?php
                $counter++;
            } else {
                break;
            }
        }
    }
    ?>
       </div>
     </div>
   </div>
 </div>
</section>-->
</div>
<!-- end main-content -->



<?php $this->load->view('footer'); ?>