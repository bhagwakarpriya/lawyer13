
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
                                 style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-dark btn-flat btn-theme-colored pl-20 pr-20 mt-sm-30" href="#">Submit your matter</a> </div>

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

    <!--     Section: features 
        <section>
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-3 maxwidth500">
                <div class="box-hover-effect effect1 wow fadeInUp mb-md-30" data-wow-duration="1.4s" data-wow-offset="10">
                  <div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url(); ?>fassets/images/about/about1.jpg" alt="featured project"  width="476"> </div>
                  <div class="icon-box left media bg-deep mb-0 mt-0 p-20"><a href="#" class="media-left pull-left mr-15 mt-5"><i class="fa fa-phone-square text-theme-colored font-30"></i></a>
                    <div class="media-body">
                      <h5 class="media-heading"><a class="text-hover-theme-colored text-uppercase font-weight-600" href="#">Case Investigation</a></h5>
                      <p class="lineheight-20">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 maxwidth500">
                <div class="box-hover-effect effect1 wow fadeInUp mb-md-30" data-wow-duration="1.8s" data-wow-offset="10">
                  <div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url(); ?>fassets/images/about/about2.jpg" alt=""> 
                  </div>
                  <div class="icon-box left media bg-deep mb-0 mt-0 p-20"> <a href="#" class="media-left pull-left mr-15 mt-5"> <i class="fa fa-gavel text-theme-colored font-30"></i></a>
                    <div class="media-body">
                      <h5 class="media-heading"><a class="text-hover-theme-colored text-uppercase font-weight-600" href="#">Cases Fighting</a></h5>
                      <p class="lineheight-20">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 maxwidth500">
                <div class="box-hover-effect effect1 wow fadeInUp mb-md-30" data-wow-duration="2s" data-wow-offset="10">
                  <div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url(); ?>fassets/images/about/about3.jpg" alt=""> </div>
                  <div class="icon-box left media bg-deep mb-0 mt-0 p-20"> <a href="#" class="media-left pull-left mr-15 mt-5"> <i class="fa fa-search text-theme-colored font-30"></i></a>
                    <div class="media-body">
                      <h5 class="media-heading"><a class="text-hover-theme-colored text-uppercase font-weight-600" href="#">Legal Analysis</a></h5>
                      <p class="lineheight-20">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 maxwidth500">
                <div class="box-hover-effect effect1 wow fadeInUp mb-md-30" data-wow-duration="2.4s" data-wow-offset="10">
                  <div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url(); ?>fassets/images/about/about4.jpg" alt=""> </div>
                  <div class="icon-box left media bg-deep mb-0 mt-0 p-20"> <a href="#" class="media-left pull-left mr-15 mt-5"> <i class="fa fa-life-ring text-theme-colored font-30"></i></a>
                    <div class="media-body">
                      <h5 class="media-heading"><a class="text-hover-theme-colored text-uppercase font-weight-600" href="#">Legal Help</a></h5>
                      <p class="lineheight-20">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    -->


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

    <!-- Section: Attorneys -->
    <section>
        <div class="container pb-30">
            <div class="section-title title-border title-right icon-bg">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="mt-0 mb-0 text-uppercase">Our</h5>
                        <h2 class="mt-0 page-title"><i class="fa fa-legal"></i>Expert Attorneys</h2>
                        <p>Maecenas nec efficitur felis. Nulla egestas lacus sit
                            amet lectus tincidunt condimentum.</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="attorney box-hover-effect effect1 bg-lighter mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 xs-text-center pb-sm-20">
                                    <div class="thumb"><img class="img-fullwidth" src="<?php echo base_url(); ?>fassets/images/team/team1.jpg" alt=""></div>
                                </div>
                                <div class="col-sm-6 col-md-6 xs-text-center pb-sm-20 pt-20">
                                    <div class="content">
                                        <h4 class="author text-theme-colored mb-0">Alex Jacobson</h4>
                                        <h6 class="title text-dark mt-0 mb-10">Attorney</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque.</p>
                                        <ul class="contact-area mt-20">
                                            <li class="mb-10"><a href="#"><i class="pe-7s-call"></i>+1-23-345-6789</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i>myemail@ymail.com</a></li>
                                        </ul>
                                        <ul class="social-icons icon-dark icon-circled icon-theme-colored icon-sm mt-30">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="attorney box-hover-effect effect1 bg-lighter mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 xs-text-center pb-sm-20 pt-20 pl-30">
                                    <div class="content">
                                        <h4 class="author text-theme-colored mb-0">Alex Jacobson</h4>
                                        <h6 class="title text-dark mt-0 mb-10">Attorney</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque.</p>
                                        <ul class="contact-area mt-20">
                                            <li class="mb-10"><a href="#"><i class="pe-7s-call"></i>+1-23-345-6789</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i>myemail@ymail.com</a></li>
                                        </ul>
                                        <ul class="social-icons icon-dark icon-circled icon-theme-colored icon-sm mt-30">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 xs-text-center pb-sm-20">
                                    <div class="thumb xs-text-center sm-text-right"><img class="img-fullwidth" src="<?php echo base_url(); ?>fassets/images/team/team2.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="attorney box-hover-effect effect1 bg-lighter mb-30 wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="10">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 xs-text-center pb-sm-20">
                                    <div class="thumb"><img class="img-fullwidth" src="<?php echo base_url(); ?>fassets/images/team/team3.jpg" alt=""></div>
                                </div>
                                <div class="col-sm-6 col-md-6 xs-text-center pb-sm-20 pt-20">
                                    <div class="content">
                                        <h4 class="author text-theme-colored mb-0">Alex Jacobson</h4>
                                        <h6 class="title text-dark mt-0 mb-10">Attorney</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque.</p>
                                        <ul class="contact-area mt-20">
                                            <li class="mb-10"><a href="#"><i class="pe-7s-call"></i>+1-23-345-6789</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i>myemail@ymail.com</a></li>
                                        </ul>
                                        <ul class="social-icons icon-dark icon-circled icon-theme-colored icon-sm mt-30">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="attorney box-hover-effect effect1 bg-lighter mb-30 wow fadeInUp" data-wow-duration="1.8s" data-wow-offset="10">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 xs-text-center pb-sm-20 pt-20 pl-30">
                                    <div class="content">
                                        <h4 class="author text-theme-colored mb-0">Alex Jacobson</h4>
                                        <h6 class="title text-dark mt-0 mb-10">Attorney</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque.</p>
                                        <ul class="contact-area mt-20">
                                            <li class="mb-10"><a href="#"><i class="pe-7s-call"></i>+1-23-345-6789</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i>myemail@ymail.com</a></li>
                                        </ul>
                                        <ul class="social-icons icon-dark icon-circled icon-theme-colored icon-sm mt-30">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 xs-text-center pb-sm-20">
                                    <div class="thumb xs-text-center sm-text-right"><img class="img-fullwidth" src="<?php echo base_url(); ?>fassets/images/team/team4.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: what makes us different -->
    <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.5" data-bg-img="<?php echo base_url(); ?>fassets/images/bg/bg2.jpg">
        <div class="container">
            <div class="section-content text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="mt-0">We Fight for our clients</h3>
                        <h2>Just call at <span class="text-theme-colored">(01) 234 5678</span> for emergency service</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if (trim($_SESSION['usertype']) != 'lawyer') { ?>    

        <!-- Section: Case -->
        <section class="bg-no-repeat bg-img-cover">
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
                                                <option value="">Select a Category</option>
                                                <option value="Administrative Law">Administrative Law</option>
                                                <option value="Admiralty and Maritime">Admiralty and Maritime</option>
                                                <option value="Adoption">Adoption</option>
                                                <option value="Advertising">Advertising</option>
                                                <option value="Animal Laws">Animal Laws</option>
                                                <option value="Arbitration and Mediation">Arbitration and Mediation</option>
                                                <option value="Aviation">Aviation</option>
                                                <option value="Banking">Banking</option>
                                                <option value="Bankruptcy and Debt">Bankruptcy and Debt</option>
                                                <option value="Cheque Bounce">Cheque Bounce</option>
                                                <option value="Child Custody">Child Custody</option>
                                                <option value="Civil">Civil</option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Consumer Protection">Consumer Protection</option>
                                                <option value="Contracts and Agreements">Contracts and Agreements</option>
                                                <option value="Corporate and Incorporation">Corporate and Incorporation</option>
                                                <option value="Criminal">Criminal</option>
                                                <option value="Customs, Excise">Customs, Excise</option>
                                                <option value="Cyber, Internet, Information Technology">Cyber, Internet, Information Technology</option>
                                                <option value="Debt and Lending Agreement">Debt and Lending Agreement</option>
                                                <option value="Debt Collection">Debt Collection</option>
                                                <option value="Divorce">Divorce</option>
                                                <option value="Documentation">Documentation</option>
                                                <option value="Domestic Violence">Domestic Violence</option>
                                                <option value="Election Campaign and Political Laws">Election Campaign and Political Laws</option>
                                                <option value="Employment and Labour">Employment and Labour</option>
                                                <option value="Environment and Natural Resources">Environment and Natural Resources</option>
                                                <option value="Equipment Finance and Leasing">Equipment Finance and Leasing</option>
                                                <option value="Family">Family</option>
                                                <option value="Financial Markets and Services">Financial Markets and Services</option>
                                                <option value="Government Contracts">Government Contracts</option>
                                                <option value="Human Rights">Human Rights</option>
                                                <option value="Immigration">Immigration</option>
                                                <option value="Industrial Laws">Industrial Laws</option>
                                                <option value="Insurance">Insurance</option>
                                                <option value="Intellectual Property, Copyright, Patent, Trademark">Intellectual Property, Copyright, Patent, Trademark</option>
                                                <option value="International Laws">International Laws</option>
                                                <option value="IT Contracts">IT Contracts</option>
                                                <option value="Juvenile">Juvenile</option>
                                                <option value="Landlord and Tenant">Landlord and Tenant</option>
                                                <option value="Licensing">Licensing</option>
                                                <option value="Mail Fraud">Mail Fraud</option>
                                                <option value="Maternity">Maternity</option>
                                                <option value="Media, Communication, Entertainment">Media, Communication, Entertainment</option>
                                                <option value="Mergers and Acquisition">Mergers and Acquisition</option>
                                                <option value="Military Laws">Military Laws</option>
                                                <option value="Motor Accident">Motor Accident</option>
                                                <option value="Muslim Laws">Muslim Laws</option>
                                                <option value="Oil and Gas">Oil and Gas</option>
                                                <option value="Open Source Codes">Open Source Codes</option>
                                                <option value="Outsourcing Agreement/Laws">Outsourcing Agreement/Laws</option>
                                                <option value="Partnership">Partnership</option>
                                                <option value="Police Laws">Police Laws</option>
                                                <option value="Power of Attorney">Power of Attorney</option>
                                                <option value="Privacy">Privacy</option>
                                                <option value="Property">Property</option>
                                                <option value="Real Estate">Real Estate</option>
                                                <option value="Registration">Registration</option>
                                                <option value="RTI">RTI</option>
                                                <option value="Sale">Sale</option>
                                                <option value="Sale of Goods">Sale of Goods</option>
                                                <option value="Sex Crime">Sex Crime</option>
                                                <option value="Sexual Harassment at Workplace">Sexual Harassment at Workplace</option>
                                                <option value="Software License">Software License</option>
                                                <option value="Sports Law">Sports Law</option>
                                                <option value="Tax">Tax</option>
                                                <option value="Tax-Property Tax">Tax-Property Tax</option>
                                                <option value="Tax-Income Tax">Tax-Income Tax</option>
                                                <option value="Telecommunication">Telecommunication</option>
                                                <option value="Torts">Torts</option>
                                                <option value="Transportation">Transportation</option>
                                                <option value="Trust and Society (NGO)">Trust and Society (NGO)</option>
                                                <option value="Work Permits">Work Permits</option>
                                                <option value="Tax-GST">Tax-GST</option>
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