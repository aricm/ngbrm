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
            <div class="request-quote"><a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#popForm">GET A QUOTE</a></div>
            <div class="phone">Call Now: <a href="tel:18888966222">1-888-896-6222</a></div>
            <div class="social-icons">
                <a href="https://www.linkedin.com/company/business-records-management-inc-" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
                <a href="https://www.facebook.com/brminc" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
                <a href="https://twitter.com/BRM_Florida" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
                <a href="https://plus.google.com/+BrmincClearwater/posts" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a>
                <a href="https://www.youtube.com/channel/UCM7M4l6nAJ-aGWcaZgsQzpQ" target="_blank"><i class="fa fa-fw fa-youtube"></i></a>
            </div>
            <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" alt=""></a></div>
        </div>

        <div class="row affiliations">
            <div class="aff">
                <a href="http://www.naidonline.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aff-naid.png" alt=""></a>
            </div>
            <div class="aff">
                <a href="http://www.ahima.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aff-ahima.png" alt=""></a>
            </div>
            <div class="aff">
                <a href="http://www.aiim.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aff-aiim.png" alt=""></a>
            </div>
            <div class="aff">
                <a href="https://www.nationalrecordscenters.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aff-nrc.png" alt=""></a>
            </div>
            <div class="aff">
                <a href="http://www.prismintl.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aff-prism.png" alt=""></a>
            </div>
            <div class="aff">
                <a href="https://www.floridabar.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aff-fba.png" alt=""></a>
            </div>
            <div class="aff">
                <a href="http://www.fhima.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aff-fhima.png" alt=""></a>
            </div>
            <div class="aff">
                <a href="http://www.arma.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aff-arma.png" alt=""></a>
            </div>
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

<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header popover-header">
                <h5 class="modal-title">Request a Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode( '[contact-form-7 id="583" title="Popover Form" html_class="popover-form"]' ); ?>
            </div>
            <div class="modal-footer hidden-sm-up">
                <button type="button" class="close popover-btn-cancel" data-dismiss="modal" aria-label="Close"><span>Cancel</span> &times;</button>
            </div>
        </div>
    </div>
</div>

<div id="closeNav" class="close-nav hidden-xl-up">Close <i class="fa fa-times"></i></button>
<script>
    jQuery(document).on("scroll", function() {
        // console.log(jQuery(document).scrollTop());
        if ( jQuery(document).scrollTop() > 120 ){
          jQuery("body").addClass("sticky-header");
        } else {
            jQuery("body").removeClass("sticky-header");
        }
    });

    jQuery('#navToggle, #closeNav').on('click', function() {
        jQuery('#mainNav').toggleClass('open');
        jQuery('#closeNav').toggleClass('open');
        jQuery('body').toggleClass('no-scroll');
    });
</script>
<?php if( $postId == 15 ): ?>
    <script>
     function initMap() {
        // 27.9615986,-82.4291098 ... ChIJCd8q7q3FwogRDp1rA4QgBeo
        // 28.0189726,-82.5292386 ... ChIJ49k1NZrBwogRLHSqzJHahPg
        var loc = {lat: 27.9615986, lng: -82.4291098};
        var loc2 = {lat: 28.0189726, lng: -82.5292386};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: loc
        });
        var marker = new google.maps.Marker({
            position: loc,
            url: "https://search.google.com/local/writereview?placeid=ChIJCd8q7q3FwogRDp1rA4QgBeo",
            map: map
        });
        var marker2 = new google.maps.Marker({
            position: loc2,
            url: "https://search.google.com/local/writereview?placeid=ChIJ49k1NZrBwogRLHSqzJHahPg",
            map: map
        });
        google.maps.event.addListener(marker, 'click', function() {
              // window.location.href = marker.url;
              window.open(this.url, '_blank');
        });
        google.maps.event.addListener(marker2, 'click', function() {
              window.open(this.url, '_blank');
        });
     }
       </script>
       <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBog0XF2MKfQWgMWPot5kYjLVuqizfhQss&callback=initMap"></script>
    <?php endif; ?>
</body>
</html>
