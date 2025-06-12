<?php
/**
 * Template for displaying single posts, pages, and custom post types.
 * Child theme of Hello Elementor.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

while ( have_posts() ) :
    the_post();
?>

<main id="content" <?php post_class( 'site-main' ); ?>>

    <?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
        <header class="page-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>
    <?php endif; ?>

    <article <?php post_class( 'single-post-card' ); ?> aria-labelledby="post-<?php the_ID(); ?>-title">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="single-post-thumb">
                <?php the_post_thumbnail( 'large', [ 'alt' => get_the_title() ] ); ?>
            </div>
        <?php endif; ?>

        <div class="single-post-content" id="post-<?php the_ID(); ?>-title">
            <?php
            // Output the main post content.
            the_content();

            // Add pagination for paged posts using <!--nextpage--> in content.
            wp_link_pages( array(
                'before'      => '<nav class="post-pagination">' . __( 'Pages:', 'hello-elementor-child' ),
                'after'       => '</nav>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ) );

            // Display post tags if they exist.
            if ( has_tag() ) : ?>
                <div class="post-tags">
                    <?php the_tags( '<span class="tag-links">' . esc_html__( 'Tagged ', 'hello-elementor' ), ', ', '</span>' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </article>

    <?php
    // Load comments template if comments are open or there are comments.
    comments_template();
    ?>

</main>

<?php
endwhile;