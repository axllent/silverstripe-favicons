<?php

namespace Axllent\Favicons;

use SilverStripe\Control\Director;
use SilverStripe\ORM\DataExtension;

/**
 * FaviconsExt extends ContentController
 * Generate code in the head of Page.ss
 * with `$Favicons("path-to-icons")`
 */
class FaviconsExt extends DataExtension
{
    public function Favicons($path = false, $theme = '#ffffff')
    {
        $path = preg_replace('/\/+/', '/', Director::baseURL() . $path . '/');
        return $this->owner->customise(
            array(
                'Path' => $path,
                'Theme' => $theme
            )
        )->renderWith('Favicons');
    }
}
