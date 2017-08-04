<?php
    get_header();
?>
<?php
    $postId = get_the_post_id();

    $primaryTitle = get_post_meta( $postId, 'mast_page_title', true );
    $sectionTitle = get_post_meta( $postId, 'mast_section_title', true );
    if( empty($primaryTitle) ) {
        $primaryTitle = "storage. scanning. shredding.";
    }
?>

<div class="page-mast">
    <?php
    if( has_post_thumbnail($postId) ) {
        the_post_thumbnail($postId);
    } else {
        echo '<img width="2000" height="400" src="http://brm.dev:81/wp-content/uploads/2017/08/mast-truck.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://brm.dev:81/wp-content/uploads/2017/08/mast-truck.jpg 2000w, http://brm.dev:81/wp-content/uploads/2017/08/mast-truck-300x60.jpg 300w, http://brm.dev:81/wp-content/uploads/2017/08/mast-truck-768x154.jpg 768w, http://brm.dev:81/wp-content/uploads/2017/08/mast-truck-1024x205.jpg 1024w" sizes="(max-width: 2000px) 100vw, 2000px">';
    }
    ?>
        <div class="mast-overlay">
            <h1><?php echo $primaryTitle; ?></h1>
            <a class="btn btn-page-mast" href="<?php echo home_url('/contact/'); ?>">Contact Us Today!</a>
        </div>
</div>

<div class="container blog-content">
    <div class="row">
        <div class="col col-12 col-md-9">
            <?php while ( have_posts() ) : the_post(); ?>

                <article>
                    <div class="blog-title">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="blog-article">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile; // End of the loop. ?>

            <div class="next-prev">
                <div class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> <span>%title</span>', FALSE); ?></div>
                <div class="next"><?php next_post_link('%link', '<span>%title</span> <i class="fa fa-angle-double-right"></i>', FALSE); ?></div>
            </div>
        </div>

        <div class="col col-12 col-md-3">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>

        </div>
    </div>

</div>

<?php
    get_footer();
