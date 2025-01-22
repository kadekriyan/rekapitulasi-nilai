</div>
</div>
<!-- <div class="fixed-button">
                <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank"
                    class="btn btn-md btn-primary">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                </a>
            </div> -->
</div>
</div>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= base_url(); ?>assets/template-assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= base_url(); ?>assets/template-assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= base_url(); ?>assets/template-assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= base_url(); ?>assets/template-assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= base_url(); ?>assets/template-assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/js/jquery-ui/jquery-ui.min.js">
</script>
<script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/js/bootstrap/js/bootstrap.min.js">
</script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/js/jquery-slimscroll/jquery.slimscroll.js">
</script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<!-- <script src="<?= base_url(); ?>assets/template-assets/pages/widget/amchart/amcharts.min.js"></script> -->
<script src="<?= base_url(); ?>assets/template-assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="<?= base_url(); ?>assets/template-assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<!-- <script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/pages/dashboard/custom-dashboard.js"> -->
</script>
<script type="text/javascript" src="<?= base_url(); ?>assets/template-assets/js/script.js"></script>
<script type="text/javascript " src="<?= base_url(); ?>assets/template-assets/js/SmoothScroll.js"></script>
<script src="<?= base_url(); ?>assets/template-assets/js/pcoded.min.js"></script>
<script src="<?= base_url(); ?>assets/template-assets/js/demo-12.js"></script>
<script src="<?= base_url(); ?>assets/template-assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js -->

<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script>
    new DataTable('#example');
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function () {
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        } else {
            nav.removeClass('active');
        }
    });
</script>
<script src="<?= base_url(); ?>assets/scripts/script.js"></script>
</body>

</html>