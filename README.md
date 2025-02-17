# Base – A WordPress Theme

A modern block theme for WordPress focused on clean design and efficient development workflows.

## Plugin Dependencies

The theme is deeply integrated with the following plugins:

- [Base Blocks](https://github.com/ndiego/base-blocks) – A collection of theme specific blocks.
- [Base Utilities](https://github.com/ndiego/base-utilities) - Provides the events custom post type and other miscellaneous functionality.
- [Enable Linked Groups](https://github.com/ndiego/enable-linked-groups) - Used in theme patterns and templates.
- [Enable Button Icons](https://github.com/ndiego/enable-button-icons) - Used in theme patterns and templates.
- [Social Sharing Block](https://github.com/ndiego/social-sharing-block) - Used in theme patterns and templates.
- [Jetpack](https://github.com/Automattic/jetpack) – Jetpack blocks are used throughout the theme.

## Getting Started

1. Clone this repository
2. Run `npm install` to install dependencies
3. Run `npm run build` to build all assets
4. For development, use the watch commands below to automatically rebuild on file changes

## Development Tools

This theme uses several development tools to streamline the build process.

### SCSS Compilation
The theme uses Sass for CSS preprocessing. Source SCSS files are located in:

- `src/blocks/` - Individual block styles
- `src/style.scss` - Main theme stylesheet

### Theme JSON Generation
Theme settings and styles are managed through JSON source files in the `src/json/` directory. These files are combined to create the final `theme.json` using a custom build script.

### Build Scripts

- `npm run build` - Build all assets
- `npm run build:styles` - Build only the styles (blocks and main stylesheet)
- `npm run build:blocks` - Build only the blocks
- `npm run build:main` - Build only the main stylesheet
- `npm run build:theme-json` - Build only the theme.json

### Watch Scripts
For active development, use these watch commands:

- `npm run watch` - Build all SCSS files and watch for changes
- `npm run watch:blocks` - Watch only block SCSS files
- `npm run watch:theme-json` - Watch for changes in the theme.json source files

### Dev Dependencies
- `sass` (^1.69.7) - CSS preprocessor
- `nodemon` (^3.1.9) - Watches for theme.json source file changes