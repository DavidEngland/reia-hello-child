# REIA Hello Child Theme

A modern, maintainable, and extensible WordPress child theme for [Hello Elementor](https://wordpress.org/themes/hello-elementor/), designed for rapid development with Elementor and custom plugins.

**Repository:** [DavidEngland/reia-hello-child](https://github.com/DavidEngland/reia-hello-child)  
**Author:** David England

## Features

- **Modern CSS & SASS**: Uses CSS variables, `@property`, `@layer`, container queries, and a robust SASS architecture.
- **Conditional Build System**: Three optimized builds (dev/prod/minimal) to reduce CSS bloat by up to 73%.
- **Custom Card & Grid System**: Flexible, responsive layouts for posts, Connections Directory, and custom widgets.
- **Performance Optimized**: From 44KB (full) to 12KB (minimal) builds for faster loading.
- **Superscript & Typography**: Proper styling for `<sup>SM</sup>`, special characters, and HTML entities.
- **Developer Friendly**: Well-documented code, modular SASS partials, and clear variable/mixin usage.
- **Extensible Shortcodes**: Improved PHP shortcodes for Connections plugin (cardfooter, cardlink, cardparts).
- **WordPress & Elementor Ready**: Seamless integration with Elementor and WordPress block editor.

## Quick Start

### Build System
Choose your build based on needs:

```bash
# Production build (no animations) - 24KB
./build-theme.sh prod

# Minimal build (core only) - 12KB  
./build-theme.sh minimal

# Development build (all features) - 44KB
./build-theme.sh dev
```

### Installation

1. Download or clone this repository.
2. Upload the theme folder to `/wp-content/themes/` in your WordPress installation.
3. In the WordPress admin, go to **Appearance > Themes** and activate **REIA Hello Child**.
4. Ensure the parent [Hello Elementor](https://wordpress.org/themes/hello-elementor/) theme is installed and active.
5. (Optional) Install and activate recommended plugins (e.g., Elementor, Connections Business Directory).

## Usage

- **Build CSS**: Use `./build-theme.sh [type]` for optimized builds
- **Development**: Use `npm run watch` for live SASS compilation
- Customize styles in `style.scss` and SASS partials under `/sass/`.
- Add or modify PHP shortcodes in `functions.php` or custom plugins.
- Use the card and grid classes in your Elementor or block layouts for consistent design.
- For Connections Directory customizations, see `/connections-templates/cmap/`.

## Development

- **SASS Structure**: All SASS partials are in `/sass/` and compiled to `style.css`.
    - `_variables.scss`, `_mixins.scss`, `_post-card.scss`, `_post-grid.scss`, `_single-post-card.scss`, `_zillow-review.scss`, `home.scss`
- **Build Process**: Use your preferred SASS compiler (e.g., `npm scripts`, `gulp`, or VS Code SASS extension) to compile `style.scss` to `style.css`.
- **Modern CSS**: Leverages CSS custom properties, `@property`, `@layer`, and container queries for maintainability and future-proofing.
- **Documentation**: All custom code and SASS partials are documented with usage examples and best practices.

## Customization

- Edit SASS variables in `_variables.scss` for global theming.
- Extend or override card/grid layouts in the relevant SASS partials.
- Add new shortcodes or extend existing ones in your child theme or custom plugins.
- See `readme.txt` for WordPress-specific details and changelog.

## Resources

- [Hello Elementor Theme Docs](https://developers.elementor.com/docs/hello-elementor-theme/)
- [Elementor Page Builder](https://elementor.com/)
- [Connections Business Directory](https://connections-pro.com/)
- [GitHub Repository](https://github.com/DavidEngland/reia-hello-child)

## License

This theme is licensed under the [GNU GPL v3 or later](https://www.gnu.org/licenses/gpl-3.0.html). See `readme.txt` for third-party attributions.

## Contributing

Issues and pull requests are welcome on [GitHub](https://github.com/DavidEngland/reia-hello-child).
