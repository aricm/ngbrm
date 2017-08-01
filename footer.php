</main>
<?php
    $postId = get_the_post_id();
?>

<div class="container-fluid text-center footer-tagline h2">
    <em>Let us put our experience and technology to work for you today</em>
</div>

<?php if( $postId != 15 ): ?>
<div class="container-fluid text-center footer-contact">
    <div class="container">
        <h4>Contact Us!</h4>
        <?php echo do_shortcode( '[contact-form-7 id="4" title="Footer Contact Us" html_class="footer-form"]' ); ?>
    </div>
</div>
<?php endif; ?>

<footer class="container-fluid site-footer">
    <div class="container">
        <div class="row">
            <div class="col">button</div>
            <div class="col">phone</div>
            <div class="col social-icons">
                <a href="https://www.facebook.com/BIS.Inc" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
                <a href="https://twitter.com/721file" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
                <a href="https://www.youtube.com/user/721File" target="_blank"><i class="fa fa-fw fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/business-information-solutions-inc" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
                <a href="https://plus.google.com/108312288827231568420/posts" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a>
                <a href="<?php echo home_url(); ?>/blog"><i class="fa fa-fw fa-rss"></i></a>
            </div>
            <div class="col">logo</div>
        </div>

        <div class="row">
            <div class="col">assoc. icons</div>
        </div>
    </div>

    <div class="row">
        <div class="col copyright">Copyright&copy; <?php echo date("Y"); ?>. All Rights Reserved <span class="pipe">|</span>
        </div>
        <div class="col netgain-seo">
            Website Designed by <a href="http://www.netgainseo.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/netgain-logo-sm.png" alt=""></a>
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
