<?php
/**
 * Theme functions and definitions for Hello Elementor Child.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.3.1' );

/**
 * Enqueue child theme styles.
 */
function hello_elementor_child_scripts_styles() {
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [ 'hello-elementor-theme-style' ],
        HELLO_ELEMENTOR_CHILD_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/**
 * Properly title-case a string for post/page titles, handling dashes, HTML entities, and acronyms.
 * Minor words are not capitalized unless first or last.
 * Acronyms (e.g., MLS, REIA) are preserved in uppercase.
 *
 * @param string $title The original title.
 * @return string The title-cased string.
 */
function reia_titlecase( $title ) {
    $acronyms = [ 'MLS', 'REIA', 'NASA', 'HSV', 'AL', 'USA' ];
    $title    = html_entity_decode( $title, ENT_QUOTES | ENT_HTML5, 'UTF-8' );
    $minor_words = [
        'a','an','and','as','at','but','by','for','from','if','in','into','nor',
        'of','on','or','the','to','with','vs','vs.','via'
    ];
    $words = preg_split( '/([\s\-–—]|&ndash;|&mdash;)+/u', $title, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY );
    $result = '';
    $word_count = count( $words );
    foreach ( $words as $i => $word ) {
        if ( $i % 2 === 0 ) {
            $upper = mb_strtoupper( $word, 'UTF-8' );
            if ( in_array( $upper, $acronyms, true ) ) {
                $word = $upper;
            } else {
                $lower = mb_strtolower( $word, 'UTF-8' );
                if (
                    $i === 0 ||
                    $i === $word_count - 1 ||
                    ! in_array( $lower, $minor_words )
                ) {
                    $word = mb_convert_case( $word, MB_CASE_TITLE, "UTF-8" );
                } else {
                    $word = $lower;
                }
            }
        }
        $result .= $word;
    }
    return esc_html( $result );
}
// Filter post/page titles for proper title case.
add_filter( 'the_title', 'reia_titlecase', 99 );

// Conditionally filter SEO plugin titles.
if ( defined( 'WPSEO_VERSION' ) ) {
    add_filter( 'wpseo_title', 'reia_titlecase', 99 );
}
if ( defined( 'RANK_MATH_VERSION' ) ) {
    add_filter( 'rank_math/frontend/title', 'reia_titlecase', 99 );
}
if ( defined( 'SEOPRESS_VERSION' ) ) {
    add_filter( 'seopress_titles_title', 'reia_titlecase', 99 );
}
if ( defined( 'AIOSEO_VERSION' ) ) {
    add_filter( 'aioseop_title', 'reia_titlecase', 99 );
}
if ( defined( 'SQUIRRY_VERSION' ) ) {
    add_filter( 'squirrly_title', 'reia_titlecase', 99 );
}


/**
 * Add theme support for Full Site Editing features
 */
function reia_theme_support() {
    // Add support for block styles
    add_theme_support( 'wp-block-styles' );
    
    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );
    
    // Add support for custom line heights
    add_theme_support( 'custom-line-height' );
    
    // Add support for custom units
    add_theme_support( 'custom-units' );
    
    // Add support for custom spacing
    add_theme_support( 'custom-spacing' );
    
    // Add support for appearance tools
    add_theme_support( 'appearance-tools' );
    
    // Add support for border controls
    add_theme_support( 'border' );
    
    // Add support for link color controls
    add_theme_support( 'link-color' );
}
add_action( 'after_setup_theme', 'reia_theme_support' );

/**
 * Include block patterns for FSE migration
 */
require_once get_stylesheet_directory() . '/inc/block-patterns.php';

/**
 * Documentation:
 * - Title case filter: Ensures consistent, professional post/page/SEO titles.
 * - //Image size removal: Prevents WordPress from generating extra image sizes and conversions (especially for WebP).
 * - All code is safe for use in a child theme and will persist through theme updates.
 */