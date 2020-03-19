<!-- start footer -->
<div class="page-footer">
    <div class="page-footer-inner"> 2019 &copy; Lawyer            
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- end footer -->
<div id="deleteModel" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12"><h3 class="m-t-none m-b">Delete Record</h3>
                            <b>Are You sure want to delete record.</b><br/>
                            <form role="form">
                                <div>
                                     <button class="btn btn-sm btn-primary pull-right m-l" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-sm btn-danger pull-right yes-sure m-l" type="button"><strong><i class="fa fa-trash"></i> Delete </strong></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
<!--aCTIVE mODEL-->
<div id="activeModel" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12"><h3 class="m-t-none m-b">Active</h3>
                            <b>Are You sure want to active ?.</b><br/>
                            <form role="form">
                                <div>
                                     <button class="btn btn-sm btn-primary pull-right m-l" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-sm btn-danger pull-right yes-sure-active m-l" type="button"><strong><i class="fa fa-trash"></i> Active </strong></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
<!--DEACTIVE mODEL-->
<div id="deactiveModel" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12"><h3 class="m-t-none m-b">Deactive</h3>
                            <b>Are You sure want to Deactived ?.</b><br/>
                            <form role="form">
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-l" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-sm btn-danger pull-right yes-sure-deactive m-l" type="button"><strong><i class="fa fa-trash"></i> Deactive </strong></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>

<script src="<?php echo base_url(); ?>admin_assests/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/chart-js/Chart.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/chart-js/utils.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/chart-js/home-data.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin_assests/js/theme-color.js" type="text/javascript"></script>
<?php
if (!empty($js)) {
    foreach ($js as $value) {
        ?>
        <script src="<?php echo base_url() ?>fassets/js/<?php echo $value; ?>" type="text/javascript"></script>

    <?php }
}
?>

<script>
    jQuery(document).ready(function() {
    <?php
        if (!empty($init)) {
            foreach ($init as $value) {
                echo $value . ';';
            }
        }
    ?>
 });
</script>
</body>   
</html>
