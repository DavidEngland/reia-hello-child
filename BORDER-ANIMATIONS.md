# Border Animations Documentation

A comprehensive CSS-only border animation system for modern WordPress themes, featuring conic gradient animations perfect for real estate and business websites.

## 🎨 Features

- **CSS-Only Animations**: No JavaScript required, pure CSS performance
- **Conic Gradient Borders**: Modern, smooth rotating border effects
- **Real Estate Components**: Purpose-built classes for property listings
- **Customizable Variables**: Easy color and timing adjustments
- **Responsive Design**: Works perfectly on all screen sizes
- **Accessibility Friendly**: Respects `prefers-reduced-motion`

## 🚀 Quick Start

### Basic Usage

```html
<!-- Simple animated border -->
<div class="ba-conic-border">
  <h3>Your Content Here</h3>
  <p>This div will have a rotating border animation.</p>
</div>

<!-- Property card with animation -->
<div class="reia-property-card">
  <h3>Beautiful Home</h3>
  <p><strong>$450,000</strong></p>
  <p>4 bed • 3 bath • 2,100 sq ft</p>
</div>
```

### Real Estate Components

```html
<!-- Hero section -->
<div class="reia-hero-card">
  <h1>Find Your Dream Home</h1>
  <p>Expert real estate services in your area.</p>
  <a href="/properties" class="reia-cta-button">Browse Properties</a>
</div>

<!-- Agent profile -->
<div class="reia-agent-card">
  <div class="agent-avatar">JD</div>
  <h3>Jane Doe</h3>
  <p>Senior Real Estate Agent</p>
  <p>15+ years of experience helping families find their perfect home.</p>
</div>
```

## 🎯 Available Classes

### Core Animation Classes

| Class | Description | Animation Style |
|-------|-------------|-----------------|
| `.ba-conic-border` | Basic rotating border | Two-color conic gradient |
| `.ba-animated-border` | Card-style border | Multi-color with scaling |
| `.ba-glow` | Subtle glow effect | Blurred rotating border |
| `.ba-dashed` | Dashed border style | Alternating colors |
| `.ba-service-card` | Service/feature cards | Rainbow gradient border |

### Real Estate Specific Classes

| Class | Description | Use Case |
|-------|-------------|----------|
| `.reia-property-card` | Property listings | MLS listings, property grids |
| `.reia-agent-card` | Agent profiles | Team pages, contact sections |
| `.reia-cta-button` | Call-to-action buttons | Contact forms, property views |
| `.reia-hero-card` | Hero sections | Landing pages, feature areas |
| `.reia-testimonial` | Client testimonials | Reviews, social proof |

## 🎨 Customization

### CSS Variables

The animation system uses CSS custom properties for easy customization:

```css
:root {
  --ba-color: var(--accent, #0073e6);           /* Primary border color */
  --ba-color-alt: #ac3033;                      /* Alternative color */
  --ba-color-accent: #ffd700;                   /* Accent color (gold) */
  --ba-color-secondary: var(--primary, #002D5F); /* Secondary color */
  --ba-radius: 1rem;                            /* Border radius */
  --ba-rotation-duration: 4s;                   /* Animation speed */
  --ba-background-color: #393e41;               /* Component background */
}
```

### Custom Color Schemes

```css
/* Blue & Gold Theme (Default) */
.property-listing {
  --ba-color: #0073e6;
  --ba-color-accent: #ffd700;
}

/* Green & Silver Theme */
.eco-property {
  --ba-color: #10b981;
  --ba-color-accent: #94a3b8;
}

/* Red & Orange Theme */
.luxury-property {
  --ba-color: #dc2626;
  --ba-color-accent: #f97316;
}
```

### Animation Speed Control

```css
/* Faster animations */
.ba-fast {
  --ba-rotation-duration: 2s;
}

/* Slower animations */
.ba-slow {
  --ba-rotation-duration: 8s;
}

/* Pause on hover */
.ba-hover-pause:hover::before {
  animation-play-state: paused;
}
```

## 📱 Component Examples

### Property Grid

```html
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
  <div class="reia-property-card">
    <h3>Modern Townhouse</h3>
    <p><strong>$485,000</strong></p>
    <p>3 bed • 2.5 bath • 1,850 sq ft</p>
    <p>Beautiful modern townhouse in desirable neighborhood with updated kitchen and private patio.</p>
    <a href="#" class="reia-cta-button">View Details</a>
  </div>
  
  <div class="reia-property-card">
    <h3>Family Home</h3>
    <p><strong>$325,000</strong></p>
    <p>4 bed • 3 bath • 2,200 sq ft</p>
    <p>Spacious family home with large backyard, perfect for entertaining and family gatherings.</p>
    <a href="#" class="reia-cta-button">View Details</a>
  </div>
</div>
```

### Agent Team Section

```html
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
  <div class="reia-agent-card">
    <div class="agent-avatar">JD</div>
    <h3>Jane Doe</h3>
    <p>Senior Agent</p>
    <p>Specializing in luxury homes and first-time buyers with 15+ years experience.</p>
    <a href="mailto:jane@realty.com" class="reia-cta-button">Contact Jane</a>
  </div>
  
  <div class="reia-agent-card">
    <div class="agent-avatar">MS</div>
    <h3>Mike Smith</h3>
    <p>Commercial Specialist</p>
    <p>Expert in commercial real estate and investment properties throughout the region.</p>
    <a href="mailto:mike@realty.com" class="reia-cta-button">Contact Mike</a>
  </div>
</div>
```

### Service Features

```html
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
  <div class="ba-service-card">
    <div class="ba-icon">🏠</div>
    <h3 class="ba-title">Home Buying</h3>
    <p class="ba-description">Expert guidance through every step of the home buying process.</p>
  </div>
  
  <div class="ba-service-card">
    <div class="ba-icon">📈</div>
    <h3 class="ba-title">Market Analysis</h3>
    <p class="ba-description">Comprehensive market data and pricing strategies for your property.</p>
  </div>
  
  <div class="ba-service-card">
    <div class="ba-icon">🔑</div>
    <h3 class="ba-title">Property Management</h3>
    <p class="ba-description">Full-service property management for investment properties.</p>
  </div>
</div>
```

## ⚡ Performance

### File Size Impact

- **Total Size**: ~12KB (compressed)
- **No JavaScript**: Pure CSS animations
- **Hardware Accelerated**: Uses `transform` and `opacity` for smooth performance
- **Conditional Loading**: Only included in dev/prod builds (not minimal)

### Browser Support

- **Modern Browsers**: Full support (Chrome 69+, Firefox 83+, Safari 12.1+)
- **Fallbacks**: Graceful degradation to static borders on older browsers
- **Mobile Optimized**: Smooth performance on mobile devices

### Accessibility

```css
/* Respects user preferences */
@media (prefers-reduced-motion: reduce) {
  .ba-animate,
  [class*="ba-"],
  [class*="reia-"] {
    animation: none !important;
  }
}
```

## 🛠️ Integration

### WordPress/Elementor

```php
// Add to functions.php for dynamic loading
function enqueue_border_animations() {
    if (is_front_page() || is_page_template('page-properties.php')) {
        wp_enqueue_style('border-animations', 
            get_stylesheet_directory_uri() . '/assets/border-animations.css', 
            array(), 
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_border_animations');
```

### Gutenberg Blocks

```html
<!-- Custom block with border animation -->
<div class="wp-block-group reia-property-card">
  <!-- wp:heading -->
  <h3>Property Title</h3>
  <!-- /wp:heading -->
  
  <!-- wp:paragraph -->
  <p><strong>$450,000</strong></p>
  <!-- /wp:paragraph -->
</div>
```

## 🎓 Advanced Usage

### Custom Animation Timing

```css
.custom-property-card {
  --ba-rotation-duration: 6s;
  --ba-hover-pause: paused;
}

.custom-property-card:hover::before {
  animation-play-state: var(--ba-hover-pause);
  animation-duration: 2s;
}
```

### Multi-Layer Effects

```html
<div class="ba-glow">
  <div class="ba-conic-border" style="--ba-rotation-duration: 3s;">
    <h3>Multi-Layer Animation</h3>
    <p>Combining glow and border effects.</p>
  </div>
</div>
```

### Responsive Adjustments

```css
@media (max-width: 768px) {
  .reia-property-card {
    --ba-rotation-duration: 6s; /* Slower on mobile */
    --ba-radius: 0.75rem;       /* Smaller radius */
  }
}
```

## 🚀 Version History

- **v1.0** (2024): Initial border animation system
- **v1.1** (2024): Added real estate components
- **v1.2** (2025): Performance optimizations and accessibility improvements
- **v2.0** (2025): ✨ **Current** - Complete rewrite with CSS custom properties

---

**Need Help?** Check the [main documentation](README.md) or [build system docs](BUILD.md) for more information.
