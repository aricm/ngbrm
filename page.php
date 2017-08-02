<?php
    get_header();
?>
    <?php while ( have_posts() ) : the_post(); ?>

        <?php
            $primaryTitle = get_post_meta( get_the_ID(), 'mast_page_title', true );
            $sectionTitle = get_post_meta( get_the_ID(), 'mast_section_title', true );
            if( empty($primaryTitle) ) {
                $primaryTitle = "storage. scanning. shredding.";
            }
            if( empty($sectionTitle) ) {
                $sectionTitle = get_the_title();
            }
        ?>

        <?php if( has_post_thumbnail() ): ?>
            <div class="page-mast">
                <?php the_post_thumbnail(); ?>
                <div class="mast-overlay">
                    <h1><?php echo $primaryTitle; ?></h1>
                    <h2><?php echo $sectionTitle; ?></h2>
                    <a class="btn btn-page-mast" href="<?php echo home_url('/contact/'); ?>">Contact Us Today!</a>
                </div>
            </div>
        <?php endif; ?>

        <div class="page-title">
            <h1><?php the_title(); ?></h1>
        </div>

        <div class="page-content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; // End of the loop. ?>

<?php
    get_footer();
