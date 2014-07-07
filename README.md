# Redactor Styles plugin for Craft

Adds JP DeVries’s [Styles](https://github.com/jpdevries/styles) Redactor plugin to Rich Text fields in Craft, which lets you add custom styles to the Formatting menu.

## Installation

To install Redactor Styles, copy the redactorstyles/ folder into craft/plugins/, and then go to Settings > Plugins and click the “Install” button next to “Redactor Styles”.

## Configuration

You can enable the custom Styles menu on a per-config basis by following these instructions.

1. Open up your Redactor config file in craft/config/redactor/
2. Add `'styles'` to your config’s `plugins` array:

        {
            // ...
            plugins: ['fullscreen', 'styles'],
            // ...
        }

3. Add a new `stylesJson` array to your config:

        {
            // ...
            stylesJson: [
            	{ btnName: 'Code', wrap: 'code' }
            ],
            // ...
        }

See https://www.modmore.com/extras/redactor/documentation/creating-custom-formats/#examples for some style declaration examples.

## Known Issues

The Styles plugin was written for Redactor 1.2, and in our testing many of the example style declarations do not actually work on the latest version of Redactor.

Additionally the “Remove style” menu option does not appear to work.
