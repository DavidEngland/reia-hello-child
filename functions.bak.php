<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

define('HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0');

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles()
{

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20);

/**
 * Properly title-case a string for post/page titles, handling dashes, HTML entities, and acronyms.
 * Minor words are not capitalized unless first or last.
 * Acronyms (e.g., MLS, REIA) are preserved in uppercase.
 *
 * @param string $title The original title.
 * @return string The title-cased string.
 */
function reia_titlecase($title)
{
    // List of acronyms to preserve in uppercase
    $acronyms = ['MLS', 'REIA', 'NASA', 'HSV', 'AL', 'USA', 'MRP'];

    // Decode HTML entities so we can process real characters
    $title = html_entity_decode($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $minor_words = [
        'a','an','and','as','at','but','by','for','from','if','in','into','nor',
        'of','on','or','the','to','with','vs','vs.','via'
    ];

    // Split on whitespace, hyphens, en/em dashes, and their HTML entities
    $words = preg_split('/([\s\-–—]|&ndash;|&mdash;)+/u', $title, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

    $result = '';
    $word_count = count($words);
    foreach ($words as $i => $word) {
        // Only process actual words, not delimiters
        if ($i % 2 === 0) {
            // Check for acronym (case-insensitive)
            $upper = mb_strtoupper($word, 'UTF-8');
            if (in_array($upper, $acronyms, true)) {
                $word = $upper;
            } else {
                $lower = mb_strtolower($word, 'UTF-8');
                if (
                    $i === 0 || // first word
                    $i === $word_count - 1 || // last word
                    ! in_array($lower, $minor_words)
                ) {
                    $word = mb_convert_case($word, MB_CASE_TITLE, "UTF-8");
                } else {
                    $word = $lower;
                }
            }
        }
        $result .= $word;
    }

    // Re-encode for HTML output
    return esc_html($result);
}
// Always filter post/page titles
// This filter is applied to the title of posts and pages
// before they are displayed on the front end.
// It ensures that the title is properly formatted according to the rules defined in the reia_titlecase function.
add_filter('the_title', 'reia_titlecase', 99);

// Conditionally filter SEO plugin titles
if (defined('WPSEO_VERSION')) {
	add_filter('wpseo_title', 'reia_titlecase', 99);
}
if (defined('RANK_MATH_VERSION')) {
	add_filter('rank_math/frontend/title', 'reia_titlecase', 99);
}
if (defined('SEOPRESS_VERSION')) {
	add_filter('seopress_titles_title', 'reia_titlecase', 99);
}
if (defined('AIOSEO_VERSION')) {
	add_filter('aioseop_title', 'reia_titlecase', 99);
}
if (defined('SQUIRRY_VERSION')) {
	add_filter('squirrly_title', 'reia_titlecase', 99);
}
<?php
/**
 * Ensures WebP images are uploaded as-is, without conversion to other formats
 * or generation of additional sizes by WordPress.
 */

// 1. Prevent WordPress from creating scaled images for large uploads (WP 5.3+)
// This is CRUCIAL for WebP, as scaling often triggers conversion to JPG.
add_filter( 'big_image_size_threshold', '__return_false' );

// 2. Disable default image sizes (thumbnail, medium, large etc.)
// This prevents WordPress from generating extra copies in different dimensions.
function remove_default_image_sizes() {
    remove_image_size( 'thumbnail' );
    remove_image_size( 'medium' );
    remove_image_size( 'medium_large' );
    remove_image_size( 'large' );
    remove_image_size( '1536x1536' ); // Added in WP 5.3
    remove_image_size( '2048x2048' ); // Added in WP 5.3
    // If your theme or other plugins register custom sizes you also want to remove,
    // you'd add remove_image_size( 'your-custom-size-name' ); here.
}
add_action( 'init', 'remove_default_image_sizes' );

// 3. Filter to prevent ALL automatically generated image sizes upon upload
// This is the most comprehensive way to stop additional sizes.
function disable_all_image_sizes( $sizes ) {
    return array(); // Return an empty array to prevent all new sizes from being registered
}
add_filter( 'intermediate_image_sizes_advanced', 'disable_all_image_sizes' );

// 4. Optional: Remove default image sizes from the Media Editor dropdown
// This just cleans up the UI, not crucial for stopping generation.
function remove_default_image_sizes_from_editor( $sizes ) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['medium_large']);
    unset( $sizes['large']);
    // If you removed custom sizes in remove_default_image_sizes(), unset them here too.
    return $sizes;
}
add_filter( 'image_size_names_choose', 'remove_default_image_sizes_from_editor' );

// 5. Optional: Ensure default image link type is 'none' for clean HTML
function remove_default_image_link_setting() {
    $image_set = get_option( 'image_default_link_type' );
    if( $image_set !== 'none' ) {
        update_option( 'image_default_link_type', 'none' );
    }
}
add_action( 'admin_init', 'remove_default_image_link_setting', 10 );