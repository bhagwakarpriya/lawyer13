<?php
//echo '<pre>';
//print_r($tag);
//die();
$this->load->view('header');
?>
<?php $this->load->view('topheader'); ?> 
<body class="">
    <div id="wrapper">
        <!-- start main-content -->
        <div class="main-content"> 
            <!-- Section: home -->
            <section id="home" class="divider bg-lighter">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-md-12">
                                    <div class="bg-lightest border-1px p-30 mb-0">
                                        <h4 class="text-theme-colored mt-0 pt-5">Please complete your profile</h4>
                                        <hr>
                                        <form id="lawyer-editprofile" name="form" method="post" enctype="multipart/form-data">
                                            <div class="hidden">
                                                <input id="oldfilename" name="oldfilename" value="<?php echo $lawyerdetail['lawyer_meta']['lawyeridimage']; ?>" class="file" type="file" multiple data-show-upload="false" data-show-caption="true" tabindex="1">
                                            </div>
                                            <div class="form-group">
                                                <label for="form_attachment">Profile Picture</label>
                                                <input id="filename" name="filename" class="file"  type="file" multiple data-show-upload="false" data-show-caption="true" tabindex="1">
                                            </div>

                                            <label>Education <small>*</small></label>
                                            <div id="edulists">
                                                <ul id="ui_edu"></ul>
                                            </div>
                                            <div class="bg-lightest border-1px p-10 mb-10 appenddiv">

                                                <div class="row" >

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="edulist" id="edulist"  value="<?php echo (isset($lawyerdetail['lawyer_meta']['edulist'])) ? $lawyerdetail['lawyer_meta']['edulist'] : ''; ?>"/>
                                                            <select name="education" id ="education_select" class="form-control" tabindex="2">
                                                                <option value="">select your education </option>
                                                                <option value="LL.B">LL.B</option>
                                                                <option value="LL.M">LL.M</option>
                                                                <option value="Paralegal">Paralegal</option>
                                                                <option value="PhD">PhD</option>
                                                                <option value="Bachelors">Bachelors</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input id="institutename" type="text"  name="institutename" placeholder="Name of the Institute" class="form-control" minlength="1" tabindex="3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <a id="addEdcution" class="addEdcution btn btn-success is-small is-success">Add</a>
                                            </div>
                                            <div class="form-group">
                                                <label>About Me <small>*</small></label>
                                                <textarea style="text-align: left;" id="aboutme" name="aboutme" class="form-control"   placeholder="Write something about yourself which will be shown to the Clients" rows="5" >
                                                    <?php echo (isset($lawyerdetail['lawyer_meta']['aboutme'])) ? $lawyerdetail['lawyer_meta']['aboutme'] : ''; ?>
                                                </textarea>
                                            </div>  
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Bar Council Reg Number<small>*</small></label>
                                                        <input id="barcoucilno" value="<?php echo (isset($lawyerdetail['lawyer_meta']['barcoucilno'])) ? $lawyerdetail['lawyer_meta']['barcoucilno'] : ''; ?>" type="text" name="barcoucilno" class="form-control" tabindex="5">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>State Bar Council<small>*</small></label> 
                                                        <select class="form-control" name="statebarcouncil_select" id ="statebarcouncil_select" data-validation="required" tabindex="6">
                                                            <option value="" selected="<?php echo (isset($lawyerdetail['lawyer_meta']['statebarcouncil_select']) && $lawyerdetail['lawyer_meta']['statebarcouncil_select'] == '') ? '' : ''; ?>" >Select State</option>
                                                            <option value="Gujarat" selected="<?php echo (isset($lawyerdetail['lawyer_meta']['statebarcouncil_select']) && $lawyerdetail['lawyer_meta']['statebarcouncil_select'] == 'Gujarat') ? $lawyerdetail['lawyer_meta']['statebarcouncil_select'] : ''; ?>" >Gujarat</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                            <label>Practicing Since <small>*</small></label>
                                            <div class="row">   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select name="year" id ="year_select" class="year_select form-control year" data-validation="required" tabindex="7">
                                                            <option value="">Select year</option>
                                                            <?php for ($i = 1973; $i <= date("Y"); $i++) { ?>
                                                            <option value="<?php echo $i; ?>" <?php echo $i==($lawyerdetail['lawyer_meta']['year']) ? selected : ''; ?>><?php echo $i; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select name="month" id ="month_select" class=" month_select form-control" data-validation="required" tabindex="8">
                                                            <option value="sel" <?php echo $lawyerdetail['lawyer_meta']['month']=="" ? "selected" : ''; ?>>Select month</option>
                                                            <option value="1" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="1" ? selected : ''; ?>>January</option>
                                                            <option value="2" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="2" ? selected : ''; ?>>February</option>
                                                            <option value="3" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="3" ? selected : ''; ?>>March</option>
                                                            <option value="4" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="4" ? selected : ''; ?>>April</option>
                                                            <option value="5" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="5" ? selected : ''; ?>>May</option>
                                                            <option value="6" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="6" ? selected : ''; ?>>June</option>
                                                            <option value="7" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="7" ? selected : ''; ?>>July</option>
                                                            <option value="8" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="8" ? selected : ''; ?>>August</option>
                                                            <option value="9" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="9" ? selected : ''; ?>>September</option>
                                                            <option value="10" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="10" ? selected : ''; ?>>October</option>
                                                            <option value="11" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="11" ? selected : ''; ?>>November</option>
                                                            <option value="12" <?php echo isset($lawyerdetail['lawyer_meta']['month'])&& $lawyerdetail['lawyer_meta']['month']=="12" ? selected : ''; ?>>December</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-sm-1">
                                                    <label>Experience</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input id="experienceText" value="<?php echo (isset($lawyerdetail['lawyer_meta']['experienceText'])) ? $lawyerdetail['lawyer_meta']['experienceText'] : ''; ?>" name="experienceText" type="text" class="form-control experienceText">
                                                </div>
                                            </div>

                                            <div class="form-group mb-10">
                                                <label>Designation<small>*</small></label>
                                                <input id="designation" type="text" name="designation" value="<?php echo (isset($lawyerdetail['lawyer_meta']['designation'])) ? $lawyerdetail['lawyer_meta']['designation'] : ''; ?>" placeholder="designation" class="form-control" tabindex="9">
                                            </div>
                                            <div class="hidden">
                                                <input name="oldidimage" value="<?php echo $lawyerdetail['lawyer_meta']['idimage']; ?>" class="file" type="file" multiple data-show-upload="false" data-show-caption="true" tabindex="1">
                                            </div>
                                            <div class="form-group">
                                                <label>Upload Bar Council ID</label>
                                                <input id="form_attachment" name="idimage" class="file" type="file" multiple data-show-upload="false" data-show-caption="true"  tabindex="10">
                                            </div>

                                            <label>Primary Expertise  <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10 primaryexp">
                                                <div class="row" >
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="hidden" name="explist" id="explist" value="<?php echo (isset($lawyerdetail['lawyer_meta']['explist'])) ? $lawyerdetail['lawyer_meta']['explist'] : ''; ?>"/>
                                                            <select name="expertise" id ="expertise_select" class="form-control" data-validation="required"  tabindex="11">
                                                                <option value="" disabled hidden selected>Select a Category</option>
                                                                <?php
                                                                if (count($tag) > 0) {
                                                                    foreach ($tag as $key => $val) {
                                                                        ?>
                                                                        <option value="<?php echo $val['text']; ?>"><?php echo $val['text']; ?></option>
                                                                    <?php }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" >
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Experience in year" name="experienceyear" id="experienceyear" class="form-control"  tabindex="12">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Approx cases handled" name="numberOfCase"  id="numberOfCase" class="form-control" tabindex="13">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <a id="addExpertiseInButton" class=" addExpertiseInButton btn btn-success is-small is-success">Add</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-10">
                                                <label>Secondary Expertise <small>*</small></label>
                                                <select name="secondaryexpertise" id ="secondaryexpertise" class="form-control" data-validation="required"  tabindex="14">
                                                    <option value="" disabled hidden selected>Select a Category</option>
                                                    <?php
                                                    if (count($tag) > 0) {
                                                        foreach ($tag as $key => $val) {
                                                            ?>
                                                    <option value="<?php echo $val['text']; ?>" selected="<?php echo $val['text']; ?>"><?php echo $val['text']; ?></option>
                                                        <?php }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <label>Phone Consultation Fees <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="phonefees" value="<?php echo (isset($lawyerdetail['lawyer_meta']['phonefees'])) ? $lawyerdetail['lawyer_meta']['phonefees'] : ''; ?>" type="text" name="phonefees" number="true" placeholder="Starting Rs." class="form-control"minlength="1"  tabindex="15">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="phonefeesremarks" value="<?php echo (isset($lawyerdetail['lawyer_meta']['phonefees'])) ? $lawyerdetail['lawyer_meta']['phonefees'] : ''; ?>" type="text" name="phonefeesremarks" placeholder="Remarks" class="form-control"minlength="1"   tabindex="16">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Meeting Consultation Fees <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="meetingfees" value="<?php echo (isset($lawyerdetail['lawyer_meta']['meetingfees'])) ? $lawyerdetail['lawyer_meta']['meetingfees'] : ''; ?>" type="text" name="meetingfees" number="true" placeholder="Starting Rs." class="form-control"minlength="1"   tabindex="17">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="meetingfeesremarks" value="<?php echo (isset($lawyerdetail['lawyer_meta']['meetingfeesremarks'])) ? $lawyerdetail['lawyer_meta']['meetingfeesremarks'] : ''; ?>" type="text" name="meetingfeesremarks" placeholder="Remarks" class="form-control"minlength="1"   tabindex="18">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <label>Review of Documents <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="reviewdocfees" value="<?php echo (isset($lawyerdetail['lawyer_meta']['reviewdocfees'])) ? $lawyerdetail['lawyer_meta']['reviewdocfees'] : ''; ?>" type="text" name="reviewdocfees" number="true" placeholder="Starting Rs." class="form-control"minlength="1"   tabindex="19">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="reviewdocremarks" value="<?php echo (isset($lawyerdetail['lawyer_meta']['reviewdocremarks'])) ? $lawyerdetail['lawyer_meta']['reviewdocremarks'] : ''; ?>" type="text" name="reviewdocremarks" placeholder="Remarks" class="form-control"minlength="1"   tabindex="20">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Filing a Case in the Court<small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="fillcaseincourtfees" type="text" name="fillcaseincourtfees" value="<?php echo (isset($lawyerdetail['lawyer_meta']['fillcaseincourtfees'])) ? $lawyerdetail['lawyer_meta']['fillcaseincourtfees'] : ''; ?>" number="true" placeholder="Starting Rs." class="form-control"  tabindex="21">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="fillcaseincourtremarks" type="text" value="<?php echo (isset($lawyerdetail['lawyer_meta']['fillcaseincourtremarks'])) ? $lawyerdetail['lawyer_meta']['fillcaseincourtremarks'] : ''; ?>" name="fillcaseincourtremarks" placeholder="Remarks" class="form-control"  tabindex="22">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                            <label>Per Appearence on Hearing Date<small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="hearingfees" value="<?php echo (isset($lawyerdetail['lawyer_meta']['hearingfees'])) ? $lawyerdetail['lawyer_meta']['hearingfees'] : ''; ?>" type="text" name="hearingfees" number="true" placeholder="Starting Rs." class="form-control"  tabindex="23">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="hearingfeesremarks" value="<?php echo (isset($lawyerdetail['lawyer_meta']['hearingfeesremarks'])) ? $lawyerdetail['lawyer_meta']['hearingfeesremarks'] : ''; ?>" type="text" name="hearingfeesremarks" placeholder="Remarks" class="form-control"  tabindex="24">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <label>Other Services <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="servicesname" value="<?php echo (isset($lawyerdetail['lawyer_meta']['servicesname'])) ? $lawyerdetail['lawyer_meta']['servicesname'] : ''; ?>" type="text" name="servicesname" placeholder="Services Name" class="form-control"  tabindex="25">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="otherfees" value="<?php echo (isset($lawyerdetail['lawyer_meta']['otherfees'])) ? $lawyerdetail['lawyer_meta']['otherfees'] : ''; ?>" type="text" name="otherfees" number="true" placeholder="Starting Rs." class="form-control"  tabindex="26">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="otherremarks" value="<?php echo (isset($lawyerdetail['lawyer_meta']['otherremarks'])) ? $lawyerdetail['lawyer_meta']['otherremarks'] : ''; ?>" type="text" name="otherremarks" placeholder="Remarks" class="form-control"  tabindex="27">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 


                                            <div class="form-group">
                                                <button type="submit" class="btn btn-dark btn-theme-colored">Submit</button>
                                            </div>
                                        </form>
                                        <!-- Job Form Validation
<!--                                        <script type="text/javascript">
                                          $("#finalprofile").validate({
                                            submitHandler: function(form) {
                                              var form_btn = $(form).find('button[type="submit"]');
                                              var form_result_div = '#form-result';
                                              $(form_result_div).remove();
                                              form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                              var form_btn_old_msg = form_btn.html();
                                              form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                              $(form).ajaxSubmit({
                                                dataType:  'json',
                                                success: function(data) {
                                                  if( data.status == 'true' ) {
                                                    $(form).find('.form-control').val('');
                                                  }
                                                  form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                  $(form_result_div).html(data.message).fadeIn('slow');
                                                  setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                                }
                                              });
                                            }
                                          });
                                        </script>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end main-content -->

    </div>


<?php $this->load->view('footer'); ?>