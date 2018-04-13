# statamic-asset-manifest
Addon for [Statamic](https://statamic.com?rfsn=1226699.c208cc): searches occurences of files and replaces them as listed in the manifest

`git submodule add git@github.com:mmintel/statamic-asset-manifest.git site/addons/AssetManifest`

Heavily inspired by https://github.com/edcs/laravel-mix-statamic.

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

# Todo
* make manifest configurable
* make file paths configurable
