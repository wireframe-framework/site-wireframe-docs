# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- .gitignore file based on the Bare Minimum Git project. Added default ignore for the modules directory.

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