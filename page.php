<?php
    get_header();
    $postId = get_the_post_id();
?>
    <?php while ( have_posts() ) : the_post(); ?>

        <?php
            $primaryTitle = get_post_meta( get_the_ID(), 'mast_page_title', true );
            $sectionTitle = get_post_meta( get_the_ID(), 'mast_section_title', true );
            if( empty($primaryTitle) ) {
                $primaryTitle = "storage. scanning. shredding";
            }
            if( empty($sectionTitle) ) {
                $sectionTitle = get_the_title();
            }
        ?>

        <div class="mast page-mast">
            <?php
            if( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else {
                echo '<img width="2000" height="400" src="http://209.126.119.193/~brm/wp-content/uploads/2017/08/mast-services.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://209.126.119.193/~brm/wp-content/uploads/2017/08/mast-services.jpg 2000w, http://209.126.119.193/~brm/wp-content/uploads/2017/08/mast-services-300x60.jpg 300w, http://209.126.119.193/~brm/wp-content/uploads/2017/08/mast-services-768x154.jpg 768w, http://209.126.119.193/~brm/wp-content/uploads/2017/08/mast-services-1024x205.jpg 1024w" sizes="(max-width: 2000px) 100vw, 2000px">';
            }
            ?>
                <div class="mast-overlay">
                    <?php if($primaryTitle != '_blank_'): ?>
                        <h1><?php echo $primaryTitle; ?></h1>
                    <?php endif;?>
                    <?php if($sectionTitle != '_blank_'): ?>
                        <h2><?php echo $sectionTitle; ?></h2>
                    <?php endif; ?>
                    <?php if( $postId != 15 ): ?>
                    <a class="btn btn-page-mast" href="<?php echo home_url('/contact/'); ?>">Contact Us Today!</a>
                    <?php endif; ?>
                </div>
        </div>

        <div class="page-title">
            <h1><?php the_title(); ?></h1>
        </div>

        <div class="page-content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; // End of the loop. ?>

<?php
    get_footer();
