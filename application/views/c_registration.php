
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
                                        <h4 class="text-theme-colored mt-0 pt-5">Please Fill up to Signup as a Client</h4>
                                        <hr>
                                        <form id="client-reg" name="form" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>First Name <small>*</small></label>
                                                        <input id="fname" type="text" name="Firstname" placeholder="First Name" class="form-control" minlength="1" onKeyPress="return ValidateAlpha(event);" tabindex="1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Last Name <small>*</small></label>
                                                        <input id="lname" type="text" name="Lastname" placeholder="Last Name" class="form-control" minlength="1"  required="true" onKeyPress="return ValidateAlpha(event);" tabindex="2">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email Address<small>*</small></label>
                                                        <input type="email" name="Email" data-validation="email"  class="form-control" placeholder="Email" data-validation-error-msg="Please enter a valid email address "  minlength="1" tabindex="3">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Mobile No<small>*</small></label>
                                                        <input type="text" name="Contact"  class="form-control" placeholder="Mobile No" minlength="10" maxlength="10" number="true" required="true" onKeyPress="return ValidateNumber(event);" tabindex="4">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Password<small>*</small></label>
                                                        <input id="Password" type="Password" name="Password"  class="form-control" placeholder="Password" minlength="1" required="true" tabindex="5">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Confirm Password<small>*</small></label>
                                                        <input id="c_Password" type="Password" name="c_Password"  class="form-control ctrl-textbox" placeholder="Confirm Password" minlength="1" required="true" tabindex="6" >

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">               
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Gender <small>*</small></label>
                                                        <select name="gender" class="form-control" data-validation="required" data-validation-error-msg="Please select your Gender" tabindex="7">
                                                            <option value="" >Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>City<small>*</small></label>
                                                        <select class="form-control" name="city_select" data-validation="required" data-validation-error-msg="Please select your country" tabindex="8">
                                                            <option value="" >Select City</option>
                                                            <option value="Surat" >Surat</option>
                                                            <option value="Ahmedabad" >Ahmedabad</option>
                                                            <option value="Vadodara" >Vadodara</option>
                                                            <option value="Rajkot" >Rajkot</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-dark btn-theme-colored" onclick="return checkPassword();">Submit</button>
                                            </div>
                                        </form>
                                        <!-- Job Form Validation-->
                      <!--                  <script type="text/javascript">
                                          $("#job_apply_form").validate({
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