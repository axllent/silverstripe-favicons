# Silverstripe favicon template for multiple devices

An extension to allow an easy templating system to add favicons for multiple devices.

## Requirements

Generate your favicons using [favicon-generator](http://www.favicon-generator.org/). This will provide you with a zip file of all the different files required.

You can use other online sources, however due to the different file naming of the different sites, you may have to create your own template with the appropriate code.

## Usage

Copy the generated icons to a path in your project (eg: `/icons/`). Then in the `<head>` of your `Page.ss`, add the following code:

```
$Favicons("/icons/")
```

The favicon template code is cached, so if you change your favicon path then you must do a `?flush`.

## Requirements

- SilverStripe 3+

## Notes

1. Depending on what source you use to generate your icons, the naming may be different to to the default `Favicons.ss` template. You can either rename your icons, or alternatively create your own `Favicons.ss` template in `themes/<site>/templates/`.
2. The `manifest.json` has been intentionally excluded. If you require this, see #1.
