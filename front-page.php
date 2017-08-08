<?php
    get_header();
?>
<!--     <div class="contact-bar">
        Control the Security of Managing Your Business Records <a href="<?php echo home_url(); ?>/contact" class="btn btn-primary">Work With Us</a>
    </div> -->

    <?php while ( have_posts() ) : the_post(); ?>

        <?php
            $primaryTitle = get_post_meta( get_the_ID(), 'mast_page_title', true );
            $sectionTitle = get_post_meta( get_the_ID(), 'mast_section_title', true );
            if( empty($primaryTitle) ) {
                $primaryTitle = "storage. scanning. shredding";
            }
            if( empty($sectionTitle) ) {
                $sectionTitle = the_title();
            }
        ?>

        <?php if( has_post_thumbnail() ): ?>
            <div class="page-mast home-page-mast">
                <?php the_post_thumbnail(); ?>
                <div class="mast-overlay">
                    <h1><?php echo $primaryTitle; ?></h1>
                    <h2><?php echo $sectionTitle; ?></h2>
                    <a class="btn btn-page-mast" href="<?php echo home_url('/contact/'); ?>">Contact Us Today!</a>
                </div>
            </div>
        <?php endif; ?>

        <div class="home-cards">
            <div class="home-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-card1.jpg" alt="">
                <div class="overlay">
                    <h2 class="home-card-title">Document Storage</h2>
                    <div class="btn-container">
                        <a href="<?php echo home_url('/services/storage/'); ?>" class="btn btn-page-mast">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="home-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-card2.jpg" alt="">
                <div class="overlay">
                    <h2 class="home-card-title">Document Scanning</h2>
                    <div class="btn-container">
                        <a href="<?php echo home_url('/services/scanning/'); ?>" class="btn btn-page-mast">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="home-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-card3.jpg" alt="">
                <div class="overlay">
                    <h2 class="home-card-title">Document Shredding</h2>
                    <div class="btn-container">
                        <a href="<?php echo home_url('/services/shredding/'); ?>" class="btn btn-page-mast">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; // End of the loop. ?>

<?php
    get_footer();
