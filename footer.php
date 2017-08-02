</main>
<?php
    $postId = get_the_post_id();
?>

<?php if( $postId != 15 ): ?>
<div class="container-fluid text-center footer-contact">
    <div class="container">
        <h4><strong>Get In Touch With Us</strong></h4>
        <?php echo do_shortcode( '[contact-form-7 id="33" title="Footer Form" html_class="footer-form"]' ); ?>
    </div>
</div>
<?php endif; ?>


<div class="container-fluid text-center footer-tagline h2">
    <em>Let us put our experience and technology to work for you today</em>
</div>

<footer class="container-fluid site-footer">
    <div class="container">
        <div class="row primary-footer">
            <div class="request-quote"><a class="btn btn-primary" href="<?php echo home_url('/contact/'); ?>">GET A QUOTE</a></div>
            <div class="phone">Call Now: <a href="tel:18888966222">1-888-896-6222</a></div>
            <div class="social-icons">
                <a href="https://www.linkedin.com/company/business-records-management-inc-" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
                <a href="https://www.facebook.com/brminc" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
                <a href="https://twitter.com/BRM_Florida" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
                <a href="https://plus.google.com/+BrmincClearwater/posts" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a>
                <a href="https://www.youtube.com/channel/UCM7M4l6nAJ-aGWcaZgsQzpQ" target="_blank"><i class="fa fa-fw fa-youtube"></i></a>
            </div>
            <div class="logo">logo</div>
        </div>

        <div class="row associations">
            <div class="">assoc. icons</div>
        </div>

        <div class="row copyright">
            <div class="copyright-text">Copyright&copy; Business Records Management, Inc. <?php echo date("Y"); ?>. All Rights Reserved</div>
            <div class="netgain-seo">
                Website Designed by <a href="http://www.netgainseo.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/netgain-logo-sm.png" alt=""></a>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>

<div id="closeNav" class="close-nav hidden-xl-up">Close <i class="fa fa-times"></i></button>
<script>
    jQuery(document).on("scroll", function() {
        if
      (jQuery(document).scrollTop() > 25){
          jQuery("body").addClass("sticky-header");
        }
        else
        {
            jQuery("body").removeClass("sticky-header");
        }
    });

    jQuery('#navToggle, #closeNav').on('click', function() {
        jQuery('#mainNav').toggleClass('open');
        jQuery('#closeNav').toggleClass('open');
        jQuery('body').toggleClass('no-scroll');
    });
</script>
</body>
</html>
