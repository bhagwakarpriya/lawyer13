<?php $this->load->view('admin/header'); ?>
<div class="profile-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body no-padding height-9">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                if (count($clientcase) > 0) {
                                    foreach ($clientcase as $key => $val) {
                                        ?> 
                                        <div class="activity-desk">
                                            <h5><strong>Case Title : </strong> <?php echo $val['case_title']; ?></h5>
                                         
                                            <strong>ID : </strong><?php echo $val['_id']; ?><br>
                                            <strong>Posted On  : </strong><?php echo date("d-m-Y h:i:sa", strtotime($val['created'])); ?><br>
                                            <?php if ($val['case_status'] == 'false') { ?>                                    
                                                <strong>Status  : </strong> <span class="text-theme-colored">open</span>
                                            <?php } else { ?>
                                                <strong>Status  : </strong> <span class="text-theme-colored">Close</span>
                                            <?php } ?>
                                            <?php if ($val['case_decription'] != '') { ?>                                    
                                                <br><strong>Case Detail : </strong>
                                                <?php
                                                echo $val['case_decription'];
                                            }
                                            ?>
                                              <hr>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PROFILE CONTENT -->
</div>
</div>
<!-- end page content -->
</div>
<?php $this->load->view('admin/footer'); ?>