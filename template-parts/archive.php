<?php
/**
 * Archive Template: Grid Card Layout
 *
 * Displays archive posts in a responsive grid of cards.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<main id="content" class="site-main">

    <?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
        <header class="page-header">
            <?php
            // Output archive title and description for context.
            the_archive_title( '<h1 class="entry-title">', '</h1>' );
            the_archive_description( '<p class="archive-description">', '</p>' );
            ?>
        </header>
    <?php endif; ?>

    <div class="page-content post-grid">
        <?php if ( have_posts() ) : ?>
            <?php
            // Loop through posts and display each as a card.
            while ( have_posts() ) :
                the_post();
                $post_link = get_permalink();
            ?>
                <article <?php post_class( 'post-card' ); ?> aria-labelledby="post-<?php the_ID(); ?>-title">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php echo esc_url( $post_link ); ?>" class="post-card-thumb" tabindex="-1">
                            <?php the_post_thumbnail( 'large', [ 'alt' => get_the_title() ] ); ?>
                        </a>
                    <?php endif; ?>
                    <div class="post-card-content">
                        <h2 class="entry-title" id="post-<?php the_ID(); ?>-title">
                            <a href="<?php echo esc_url( $post_link ); ?>">
                                <?php the_title(); // Ensures title filters (like title case) are applied ?>
                            </a>
                        </h2>
                        <div class="post-card-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="no-posts"><?php esc_html_e( 'No posts found.', 'hello-elementor-child' ); ?></p>
        <?php endif; ?>
    </div>

    <?php
    // Archive pagination with accessible navigation and RTL support.
    global $wp_query;
    if ( $wp_query->max_num_pages > 1 ) :
        $prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
        $next_arrow = is_rtl() ? '&larr;' : '&rarr;';
        ?>
        <nav class="pagination" aria-label="<?php esc_attr_e( 'Posts navigation', 'hello-elementor-child' ); ?>">
            <div class="nav-previous">
                <?php
                previous_posts_link(
                    sprintf(
                        esc_html__( '%s Previous', 'hello-elementor-child' ),
                        '<span class="meta-nav">' . $prev_arrow . '</span>'
                    )
                );
                ?>
            </div>
            <div class="nav-next">
                <?php
                next_posts_link(
                    sprintf(
                        esc_html__( 'Next %s', 'hello-elementor-child' ),
                        '<span class="meta-nav">' . $next_arrow . '</span>'
                    )
                );
                ?>
            </div>
        </nav>
    <?php endif; ?>

</main>