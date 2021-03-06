<?php

namespace Statamic\Addons\AssetManifest;

use Statamic\Extend\Tags;

class AssetManifestTags extends Tags
{
    use AssetManifestTrait;

    /**
     * The {{ asset_manifest }} tag - outputs the revision manifest file as JSON.
     *
     * @return string
     */
    public function index()
    {
        return $this->getManifest()->toJson();
    }

    /**
     * The {{ asset_manifest:css }} tag - outputs the URL or tag for the theme's main CSS file.
     *
     * @return string
     */
    public function css()
    {
        $url = $this->getAssetPath('css');

        if ($this->getBool('tag')) {
            return '<link rel="stylesheet" href="' . $url . '" />';
        }

        return $url;
    }

    /**
     * The {{ asset_manifest:js }} tag - outputs the URL or tag for the theme's main JS file.
     *
     * @return string
     */
    public function js()
    {
        $url = $this->getAssetPath('js');

        if ($this->getBool('tag')) {
            return '<script src="' . $url . '"></script>';
        }

        return $url;
    }
}
