<section id="chatbot" class="chatbotdata">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-sm-8"></div>
                <div class="col-sm-4">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-6">Help for Case</div>
                                <div class="col-md-6 text-right"><a id='close_chat' href="javascript:void(0)"><i
                                            class="glyphicon glyphicon-minus hidden-xs text-right"></i></a></div>
                            </div>
                        </div>
                        <div id="chat_board" class="modal-body">
                            <div class="">
                                <div id="chat">
                                    <form action="" method="GET" class="hidden">
                                        <input type="text" name="name"
                                               data-conv-question="Hello! How can I help you?" data-no-answer="true">
                                        <select data-conv-question="do you want to proceed?"
                                                name="dynamic-question-x">
                                            <option value="yes">Yes</option>
                                            <option value="end">No</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<div class="multi-row-clearfix"></div>
<footer id="footer" class="footer pb-0 bg-deep">
    <div class="row">
        <div class="col-md-12">
            <div class="horizontal-contact-widget dark mt-30 pt-30 text-center">
                <div class="col-sm-12 col-sm-4">
                    <div class="each-widget"> <i class="pe-7s-phone font-36 mb-10 text-white"></i>
                        <h5 class="text-theme-colored">Call Us</h5>
                        <p class="text-white">Phone: <a href="#" class="text-white">+262 695 2601</a></p>
                    </div>
                </div>
                <div class="col-sm-12 col-sm-4 mt-sm-50">
                    <div class="each-widget"> <i class="pe-7s-map font-36 mb-10 text-white"></i>
                        <h5 class="text-theme-colored">Address</h5>
                        <p class="text-white">Dr, R K Desai Marg, Opp. Mission Hospital, Athwalines, Athwa, Surat, Gujarat 39500</p>
                    </div>
                </div>
                <div class="col-sm-12 col-sm-4 mt-sm-50">
                    <div class="each-widget"> <i class="pe-7s-mail font-36 mb-10 text-white"></i>
                        <h5 class="text-theme-colored">Email</h5>
                        <p><a href="#" class="text-white">scet@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-black-222 p-20">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="font-11 m-0">Copyright &copy;2020</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
<script src="<?php echo base_url(); ?>fassets/js/custom.js"></script>
<!-- toastr -->
<script src="<?php echo base_url(); ?>fassets/js/toastr/toastr.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>fassets/js/comman_function.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<?php
if (!empty($js)) {
    foreach ($js as $value) {
        ?>
        <script src="<?php echo base_url() ?>fassets/js/<?php echo $value; ?>" type="text/javascript"></script>
        <?php
    }
}
?>
<script type="text/javascript">
    jQuery(document).ready(function () {
        // $("#chatbot").hide();
        $("#chatbot").show();

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