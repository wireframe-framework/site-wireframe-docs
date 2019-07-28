# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.18.0] - 2019-07-28

### Added
- Search form to the site masthead.
- Additional utility CSS classes (.js-show, .js-hide).
- JS toggle feature.

### Changed
- Moved SearchEngine styles to the `<head>` area.
- Updated required version of the SearchEngine module in composer.json.
- Updated the "menu-toggle" feature to a more generic "toggle" implementation.

## [0.17.0] - 2019-07-25

### Added
- SearchEngine module, Search template, and controller and view for the Search template.
- Blockquote CSS styles.

### Changed
- Install TextformatterCodeBlocks with Composer instead of bundling files in the site profile.

### Fixed
- Fixed minor layout issue resulting from main content area being less than 100% wide.

## [0.16.0] - 2019-07-07

### Changed
- Updated required version of Wireframe to 0.4.0.

### Removed
- Removed lib/functions.php, as it wasn't really needed.

## [0.15.0] - 2019-07-03

### Added
- CSS styles for content images, content tables, and the hr element.

### Changed
- Updated required version of Wireframe to 0.3.0.

## [0.14.0] - 2019-06-30

### Added
- Custom configuration file added to the lib directory.

### Changed
- Moved MarkupMenu configuration settings to custom config file and made "Current page" label translatable.
- Bumped required versions of wireframe-framework/processwire-composer-installer, teppokoivula/markup-menu, and wireframe-framework/wireframe.

## [0.13.5] - 2019-06-29

### Fixed
- Additional accessibility fixes and improvements.

## [0.13.4] - 2019-06-29

### Changed
- Changed highlights field heading level from h3 to h2 (a11y).
- Minor style improvements to aside section highlights field headings.

## [0.13.3] - 2019-06-29

### Fixed
- Minor sub menu style fixes.

## [0.13.2] - 2019-06-29

### Fixed
- Additional accessibility improvements (color contrast).

## [0.13.1] - 2019-06-29

### Fixed
- Link hover/focus style fixes.

## [0.13.0] - 2019-06-29

### Added
- To top link and skip content link.
- New CSS variables and button classes.

### Fixed
- Various smaller layout and style fixes.

### Changed
- Reordered some parts of the CSS styles.

## [0.12.4] - 2019-06-27

### Changed
- Various accessibility improvements, mainly for site navigation.
- Some minor layout improvements.

## [0.12.3] - 2019-06-27

### Fixed
- Removed HTML minification from ready.php, since it was causing issues with script blocks.

## [0.12.2] - 2019-06-27

### Fixed
- Backwards compatibility for IE11 with css-vars-ponyfill and some JavaScript magic.
- Resolved minor issues related to menu active/parent and hover/focus styles.

### Changed
- Minor visual changes.

## [0.12.1] - 2019-06-26

### Fixed
- Fixed an issue where mobile menu toggle button could overflow menu item text.

## [0.12.0] - 2019-06-26

### Added
- Added head script tag for setting a 'js' class to document root as early as possible.
- Added JavaScript based toggle feature to mobile menu subtrees.
- Added utility CSS class 'visually-hidden'.

### Changed
- Changed header background to new dark blue color (a11y).

## [0.11.0] - 2019-06-23

### Changed
- Wireframe updated to the latest version (0.2.0).
- View related templates directories reorganized to match the new default structure from Wireframe.

## [0.10.0] - 2019-06-23

### Added
- .gitignore file based on the Bare Minimum Git project. Added default ignore for the modules directory.

### Changed
- Update Wireframe, MarkupMenu, and processwire-composer-installer dependencies to latest versions.

## [0.9.6] - 2019-06-23

### Added
- Added default overrides for MarkupMenu to site/config.php.

## [0.9.5] - 2019-06-23

### Changed
- Updated the required version of MarkupMenu.

## [0.9.4] - 2019-06-22

### Changed
- Updated the required versions of wireframe-framework/processwire-composer-installer, MarkupMenu, and wireframe.

## [0.9.3] - 2019-06-22

### Changed
- Switched Markup Simple Navigation to MarkupMenu.
- Renamed site/templates/static/ to site/templates/resources and site/templates/static/img/ to site/templates/static/resources/images/.
- Removed wireframe module directory from the repository and readded it as a Composer dependency.

## [0.9.2] - 2019-06-02

### Added
- Added composer.json.
- Added LICENSE file.

## [0.9.1] - 2019-06-01

### Added
- Added .button--inverse and .button--plain as selectable options to link editor.

## [0.9.0] - 2019-06-01

### Fixed
- Fixes and improvements to button styles, including sensible hover styles for button--inverse.

### Added
- New hook in ready.php for replacing [icon class="xxx"] shorttags with <i class="xxx"></i> (for embedding icons).
- New button modifier class .button--plain for buttons without trailing angle icon.
- CHANGELOG.md.
