<?php

namespace Statamic\Addons\AssetManifest;

use Statamic\Extend\Modifier;

class AssetManifestModifier extends Modifier
{
    use AssetManifestTrait;

    /**
     * Modifies the input into an asset path.
     *
     * @param string $value In this case either 'js' or 'css'.
     * @return string
     */
    public function index($value)
    {
        return $this->getAssetPath($value);
    }
}
