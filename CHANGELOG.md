# Changelog

All notable changes to the REIA Hello Child Theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- Conditional build system with three optimized builds (dev/prod/minimal)
- Build script (`build-theme.sh`) for automated CSS compilation
- Node.js workflow support with npm scripts and package.json
- Performance-optimized builds reducing CSS from 44KB to 12KB (73% reduction)
- Comprehensive build documentation (`BUILD.md`)

### Changed
- Repository ownership to DavidEngland/reia-hello-child
- Theme name updated to "REIA Hello Child"
- Author updated to David England
- Build system restructured for better performance optimization

## [2.2.17] - 2025-06-18

### Added
- Superscript and special character styling improvements
- Custom HTML block container improvements for company slogans
- Typography enhancements for `<sup>SM</sup>` display
- Support for HTML entities (&trade;, &copy;, &#174;, &#8482;)
- Modern conditional building system with feature flags

### Changed
- Updated theme header information with new repository URLs
- Improved documentation structure and README
- Enhanced build process for production optimization

### Fixed
- Superscript elements now display correctly without affecting line height
- Special HTML characters render properly across browsers
- SCSS compilation issues with modern module system

## [1.0.1] - 2025-06-13

### Changed

- Refactored all SCSS partials to use `@use` for dependency management (`variables` and `mixins`), replacing legacy `@import` usage.
- Added `_index.scss` with `@forward` for all partials to enable a single entry point and modern SCSS structure.
- Updated documentation in partials to reflect new SCSS module system.

### Fixed

- Ensured all partials are modular, maintainable, and compatible with latest SASS best practices.

## [1.0.0] - 2025-06-13

### Added

- Initial modernized, refactored, and documented version of the Hello Elementor Child (REIA Ollie Child) theme.
- Migrated and refactored all custom CSS and SASS for cards, grids, home page layouts, and navigation.
- Added modern CSS features: variables, clamp, @property, @layer, container queries.
- Created and improved plugin documentation (README.md, readme.txt).
- Refactored and improved HTML content for use in WordPress blocks.
- Added a modern card/grid system and robust utility classes.
- Provided minimal, accessible overrides for Elementor HFE/UAE menus.
- Added shell scripts for SASS build process and .gitignore for WP/SASS/Node/VS Code/OS artifacts.

### Changed

- Improved SASS/SCSS partials for cards, grids, single post cards, and Zillow review widget.
- Updated and documented all SASS partials and the main style.scss entry point.
- Enhanced accessibility and maintainability throughout theme and plugins.

### Fixed

- Fixed submenu and sub-arrow visibility in footer navigation for accessibility and clarity.
- Fixed various minor CSS and PHP issues for consistency and best practices.

## Performance Metrics

| Version | CSS Size (Dev) | CSS Size (Prod) | CSS Size (Min) | Reduction | Key Features |
|---------|----------------|-----------------|----------------|-----------|--------------|
| 2.2.17  | 44KB          | 24KB           | 12KB          | 73%       | Conditional builds |
| 1.0.1   | ~85KB         | ~85KB          | ~85KB         | 0%        | All features included |

## Migration Guide

### To 2.2.17 (Latest)

1. **New Build System**: Use `./build-theme.sh prod` for production builds
2. **Repository Update**: Update any references to `DavidEngland/reia-hello-child`
3. **Dependencies**: Run `npm install` if using Node.js workflow
4. **Performance**: Choose appropriate build type for your use case

---

For detailed build instructions, see [BUILD.md](BUILD.md).  
For older changes or migration notes, see commit history.
