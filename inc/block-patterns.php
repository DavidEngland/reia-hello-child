<?php
/**
 * Block Patterns for REIA Theme
 * Replace Elementor sections with native WordPress block patterns
 * 
 * @package REIA_Hello_Child
 * @since 2.3.1
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register block patterns for FSE migration
 */
function reia_register_block_patterns() {
    
    // Hero Section Pattern
    register_block_pattern(
        'reia/hero-section',
        array(
            'title'       => __('REIA Hero Section', 'hello-elementor-child'),
            'description' => __('A hero section with primary blue background and call-to-action.', 'hello-elementor-child'),
            'content'     => '
                <!-- wp:cover {"url":"","hasParallax":true,"dimRatio":20,"customOverlayColor":"#002D5F","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"}}}} -->
                <div class="wp-block-cover alignfull is-light has-parallax" style="padding-top:8rem;padding-bottom:8rem">
                    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-20" style="background-color:#002D5F"></span>
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"800px"}} -->
                        <div class="wp-block-group alignwide">
                            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1.1"},"color":{"text":"#ffffff"}}} -->
                            <h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:3rem;font-weight:800;line-height:1.1">Real Estate Intelligence Agency</h1>
                            <!-- /wp:heading -->
                            
                            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.6"},"color":{"text":"#F4E4BC"}}} -->
                            <p class="has-text-align-center" style="color:#F4E4BC;font-size:1.25rem;line-height:1.6">Your Smart Move® in Real Estate</p>
                            <!-- /wp:paragraph -->
                            
                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:2rem">
                                <!-- wp:button {"backgroundColor":"parchment","textColor":"primary","style":{"border":{"radius":"2rem"},"typography":{"fontWeight":"600"}}} -->
                                <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-parchment-background-color has-text-color has-background wp-element-button" style="border-radius:2rem;font-weight:600">Get Started Today</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->',
            'categories'  => array('reia-sections'),
        )
    );

    // Testimonial Section Pattern
    register_block_pattern(
        'reia/testimonial-section',
        array(
            'title'       => __('REIA Testimonial Section', 'hello-elementor-child'),
            'description' => __('A testimonial section with quote and client information.', 'hello-elementor-child'),
            'content'     => '
                <!-- wp:group {"backgroundColor":"card-bg-alt","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}},"border":{"radius":"1.5rem"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
                <div class="wp-block-group has-card-bg-alt-background-color has-background" style="border-radius:1.5rem;padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">
                    <!-- wp:quote {"align":"center","style":{"typography":{"fontSize":"1.5rem","fontStyle":"italic","lineHeight":"1.4"},"color":{"text":"#002D5F"}}} -->
                    <blockquote class="wp-block-quote has-text-align-center" style="color:#002D5F;font-size:1.5rem;font-style:italic;line-height:1.4">
                        <p>"REIA made our home buying experience smooth and stress-free. Their expertise and dedication are unmatched!"</p>
                        <cite style="color:#6c757d;font-size:1rem;font-style:normal;font-weight:600;">— Sarah & Mike Johnson</cite>
                    </blockquote>
                    <!-- /wp:quote -->
                </div>
                <!-- /wp:group -->',
            'categories'  => array('reia-sections'),
        )
    );

    // Services Grid Pattern
    register_block_pattern(
        'reia/services-grid',
        array(
            'title'       => __('REIA Services Grid', 'hello-elementor-child'),
            'description' => __('A grid of services with icons and descriptions.', 'hello-elementor-child'),
            'content'     => '
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem">
                    <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"800"},"color":{"text":"#002D5F"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
                    <h2 class="wp-block-heading has-text-align-center" style="color:#002D5F;margin-bottom:3rem;font-size:2.5rem;font-weight:800">Our Services</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
                    <div class="wp-block-columns" style="margin-top:2rem">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:group {"backgroundColor":"card-bg","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"1.5rem"},"boxShadow":"0 2px 12px rgba(0,0,0,0.07)"}} -->
                            <div class="wp-block-group has-card-bg-background-color has-background" style="border-radius:1.5rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem;box-shadow:0 2px 12px rgba(0,0,0,0.07)">
                                <!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#0073e6"}}} -->
                                <h3 class="wp-block-heading has-text-align-center" style="color:#0073e6">Buying</h3>
                                <!-- /wp:heading -->
                                
                                <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6c757d"}}} -->
                                <p class="has-text-align-center" style="color:#6c757d">Expert guidance through every step of your home purchase journey.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:group {"backgroundColor":"card-bg","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"1.5rem"},"boxShadow":"0 2px 12px rgba(0,0,0,0.07)"}} -->
                            <div class="wp-block-group has-card-bg-background-color has-background" style="border-radius:1.5rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem;box-shadow:0 2px 12px rgba(0,0,0,0.07)">
                                <!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#0073e6"}}} -->
                                <h3 class="wp-block-heading has-text-align-center" style="color:#0073e6">Selling</h3>
                                <!-- /wp:heading -->
                                
                                <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6c757d"}}} -->
                                <p class="has-text-align-center" style="color:#6c757d">Strategic marketing to get your property sold quickly and for top dollar.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:group {"backgroundColor":"card-bg","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"1.5rem"},"boxShadow":"0 2px 12px rgba(0,0,0,0.07)"}} -->
                            <div class="wp-block-group has-card-bg-background-color has-background" style="border-radius:1.5rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem;box-shadow:0 2px 12px rgba(0,0,0,0.07)">
                                <!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#0073e6"}}} -->
                                <h3 class="wp-block-heading has-text-align-center" style="color:#0073e6">Investment</h3>
                                <!-- /wp:heading -->
                                
                                <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6c757d"}}} -->
                                <p class="has-text-align-center" style="color:#6c757d">Smart investment strategies for building your real estate portfolio.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->',
            'categories'  => array('reia-sections'),
        )
    );

    // Contact CTA Pattern
    register_block_pattern(
        'reia/contact-cta',
        array(
            'title'       => __('REIA Contact CTA', 'hello-elementor-child'),
            'description' => __('A call-to-action section with contact information.', 'hello-elementor-child'),
            'content'     => '
                <!-- wp:group {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
                <div class="wp-block-group has-primary-background-color has-background" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">
                    <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2rem","fontWeight":"700"},"color":{"text":"#ffffff"}}} -->
                    <h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:2rem;font-weight:700">Ready to Make Your Smart Move®?</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.6"},"color":{"text":"#F4E4BC"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
                    <p class="has-text-align-center" style="color:#F4E4BC;margin-bottom:2rem;font-size:1.1rem;line-height:1.6">Contact us today for a free consultation and let us help you navigate your real estate journey.</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"parchment","textColor":"primary","style":{"border":{"radius":"2rem"},"typography":{"fontWeight":"600"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-parchment-background-color has-text-color has-background wp-element-button" style="border-radius:2rem;font-weight:600">Contact Us Now</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->',
            'categories'  => array('reia-sections'),
        )
    );
}

/**
 * Register block pattern category
 */
function reia_register_block_pattern_category() {
    register_block_pattern_category(
        'reia-sections',
        array(
            'label' => __('REIA Sections', 'hello-elementor-child'),
        )
    );
}

// Hook the functions
add_action('init', 'reia_register_block_pattern_category');
add_action('init', 'reia_register_block_patterns');

/**
 * Enqueue block editor styles
 */
function reia_block_editor_styles() {
    wp_enqueue_style(
        'reia-block-editor-styles',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('enqueue_block_editor_assets', 'reia_block_editor_styles');

/**
 * Add custom CSS classes to blocks
 */
function reia_add_block_classes($block_content, $block) {
    // Add REIA-specific classes to core blocks
    if (isset($block['blockName'])) {
        switch ($block['blockName']) {
            case 'core/group':
                if (strpos($block_content, 'has-primary-background-color') !== false) {
                    $block_content = str_replace('wp-block-group', 'wp-block-group reia-section-primary', $block_content);
                }
                break;
            case 'core/cover':
                $block_content = str_replace('wp-block-cover', 'wp-block-cover reia-hero-section', $block_content);
                break;
            case 'core/columns':
                if (strpos($block_content, 'has-card-bg-background-color') !== false) {
                    $block_content = str_replace('wp-block-columns', 'wp-block-columns reia-service-grid', $block_content);
                }
                break;
        }
    }
    return $block_content;
}
add_filter('render_block', 'reia_add_block_classes', 10, 2);
