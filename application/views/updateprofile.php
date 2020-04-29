<?php
// echo '<pre>';
// print_r($_SESSION);
// die;
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
                                        <form id="finalprofile" name="form" action="<?php echo base_url() . 'Lawyer/updateProfile' ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="form_attachment">Profile Picture</label>
                                                <input id="filename" name="filename" class="file" type="file" multiple data-show-upload="false" data-show-caption="true" tabindex="1">
                              <!--                  <small>Maximum upload file size: 12 MB</small>-->
                                            </div>

                                            <label>Education <small>*</small></label>
                                            <div id="edulists">
                                                <ul id="ui_edu"></ul>
                                            </div>
                                            <div class="bg-lightest border-1px p-10 mb-10 appenddiv">

                                                <div class="row" >

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="edulist" id="edulist"  value=""/>
                                                            <select name="education" id ="education_select" class="form-control" data-validation="required" required="true"  tabindex="2">
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
                                                            <input id="institutename" type="text" name="institutename" placeholder="Name of the Institute" class="form-control"minlength="1"  required="true" tabindex="3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <a id="addEdcution" class="addEdcution btn btn-success is-small is-success">Add</a>
                                            </div>
                                            <div class="form-group mb-10">
                                                <label>About Me <small>*</small></label>
                                                <textarea id="aboutme" name="aboutme" class="form-control required"  placeholder="Write something about yourself which will be shown to the Clients" rows="5" aria-required="true" required="true" tabindex="4"></textarea>
                                            </div>  
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Bar Council Reg Number<small>*</small></label>
                                                        <input id="barcoucilno" type="text" name="barcoucilno" class="form-control" required="true" tabindex="5">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>State Bar Council<small>*</small></label> 
                                                        <select class="form-control" name="statebarcouncil_select" id ="statebarcouncil_select" data-validation="required" tabindex="6">
                                                            <option value="" >Select State</option>
                                                            <option value="Gujarat" >Gujarat</option>
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
                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select name="month" id ="month_select" class=" month_select form-control" data-validation="required" tabindex="8">
                                                            <option value="">Select month</option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>
                                                            <option value="3">March</option>
                                                            <option value="4">April</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">August</option>
                                                            <option value="9">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-sm-1">
                                                    <label>Experience</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input id="experienceText" name="experienceText" type="text" class="form-control experienceText">
                                                </div>
                                            </div>

                                            <div class="form-group mb-10">
                                                <label>Designation<small>*</small></label>
                                                <input id="designation" type="text" name="designation" placeholder="designation" class="form-control" required="true" tabindex="9">
                                            </div>
                                            <div class="form-group">
                                                <label>Upload Bar Council ID</label>
                                                <input id="form_attachment" name="idimage" class="file" type="file" multiple data-show-upload="false" data-show-caption="true" required="true" tabindex="10">
                                            </div>

                                            <label>Primary Expertise  <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10 primaryexp">
                                                <div class="row" >
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="hidden" name="explist" id="explist"  value=""/>
                                                            <select name="expertise" id ="expertise_select" class="form-control" data-validation="required" required="true" tabindex="11">
                                                                <option value="" disabled hidden selected>Select a Category</option>
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
                                                </div>
                                                <div class="row" >
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Experience in year" id="experienceyear" class="form-control" required="true" tabindex="12">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Approx cases handled" id="numberOfCase" class="form-control" tabindex="13">
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
                                                <select name="secondaryexpertise" id ="secondaryexpertise" class="form-control" data-validation="required" required="true" tabindex="14">
                                                    <option value="" disabled hidden selected>Select a Category</option>
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
                                            <label>Phone Consultation Fees <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="phonefees" type="text" name="phonefees" number="true" placeholder="Starting Rs." class="form-control"minlength="1"  required="true" tabindex="15">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="phonefeesremarks" type="text" name="phonefeesremarks" placeholder="Remarks" class="form-control"minlength="1"  required="true" tabindex="16">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Meeting Consultation Fees <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="meetingfees" type="text" name="meetingfees" number="true" placeholder="Starting Rs." class="form-control"minlength="1"  required="true" tabindex="17">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="meetingfeesremarks" type="text" name="meetingfeesremarks" placeholder="Remarks" class="form-control"minlength="1"  required="true" tabindex="18">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <label>Review of Documents <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="reviewdocfees" type="text" name="reviewdocfees" number="true" placeholder="Starting Rs." class="form-control"minlength="1"  required="true" tabindex="19">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="reviewdocremarks" type="text" name="reviewdocremarks" placeholder="Remarks" class="form-control"minlength="1"  required="true" tabindex="20">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Filing a Case in the Court<small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="fillcaseincourtfees" type="text" name="fillcaseincourtfees" number="true" placeholder="Starting Rs." class="form-control" required="true" tabindex="21">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="fillcaseincourtremarks" type="text" name="fillcaseincourtremarks" placeholder="Remarks" class="form-control" required="true" tabindex="22">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                            <label>Per Appearence on Hearing Date<small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="hearingfees" type="text" name="hearingfees" number="true" placeholder="Starting Rs." class="form-control" required="true" tabindex="23">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input id="hearingfeesremarks" type="text" name="hearingfeesremarks" placeholder="Remarks" class="form-control" required="true" tabindex="24">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <label>Other Services <small>*</small></label>
                                            <div class="bg-lightest border-1px p-10 mb-10">
                                                <div class="row" >
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="servicesname" type="text" name="servicesname" placeholder="Services Name" class="form-control" required="true" tabindex="25">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="otherfees" type="text" name="otherfees" placeholder="Starting Rs." class="form-control" required="true" tabindex="26">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input id="otherremarks" type="text" name="otherremarks" placeholder="Remarks" class="form-control" required="true" tabindex="27">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 


                                            <div class="form-group">
                                                <button type="submit" class="btn btn-dark btn-theme-colored">Submit</button>
                                            </div>
                                        </form>
                                        <!-- Job Form Validation-->
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