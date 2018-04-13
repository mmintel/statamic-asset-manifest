# statamic-asset-manifest
Addon for [Statamic](https://statamic.com?rfsn=1226699.c208cc): searches occurences of files and replaces them as listed in the manifest

Heavily inspired by https://github.com/edcs/laravel-mix-statamic.

# Installation
## with git
Run this command in the root of your theme:

`git submodule add git@github.com:mmintel/statamic-asset-manifest.git site/addons/AssetManifest`

## without git
[Download](https://github.com/mmintel/statamic-asset-manifest/archive/master.zip) the addon and place it in your [Statamic](https://statamic.com?rfsn=1226699.c208cc) folder under `site/addons/AssetManifest`.

# Usage
Just place an `asset-manifest.json` in your theme and reference your assets via `{{ asset_manifest:js }}` or `{{ asset_manifest:css }}` and this addon will replace them with the associated files of your manifest.

A manifest file looks like that:
```JSON
{
  "/css/default.css":"/css/default-9c1d17762e887e413460d516954c2406.css",
  "/js/default.js":"/js/default-2706e5c549bb2e6acd588e27880516cd.js"
}
```

This addon will not generate this manifest for you, it will just replace your assets. To generate this file you should use a build tool like Gulp, Grunt, Webpack, NPM scripts or whatever.

## Importing specific files
The `asset_manifest` tag works exactly like the `theme` tag. So e.g. `{{ asset_manifest:css }}` will import `/css/default.css` and `{{ asset_manifest:css src="test" }}` will import `/css/test.css`.

This addon will not generate this manifest for you, it will just replace your assets. To generate this file you should use a build tool like Gulp, Grunt, Webpack, NPM scripts or whatever.
