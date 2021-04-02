<div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://www.w3genesis.com/">W2Genesis</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2"></div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   
    <script src="<?=base_url();?>/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url();?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url();?>/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?=base_url();?>/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <?php
    if($baseurl == "organizerDashboard"){
    ?>
        <script src="<?=base_url();?>/plugins/apex/apexcharts.min.js"></script>
        <script src="<?=base_url();?>/assets/js/dashboard/dash_2.js"></script>
    <?php
    }else if($baseurl == "organizerDashboard"){
    ?>
        <script src="<?=base_url();?>/plugins/file-upload/file-upload-with-preview.min.js"></script>
        <script src="<?=base_url();?>/assets/systemjs/postads.js"></script>
    <?php
    }
    ?>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    

</body>
</html>