<?php

namespace Axllent\Favicons;

use SilverStripe\Control\Director;
use SilverStripe\Core\Extension;

/**
 * FaviconsExt extends ContentController
 * Generate code in the head of Page.ss
 * with `$Favicons("path-to-icons")`
 */
class FaviconsExt extends Extension
{
    /**
     * Favicon returns the rendered HTML code
     *
     * @param mixed  $path  relative path
     * @param string $theme Hex theme color
     *
     * @return string
     */
    public function favicons($path = false, $theme = '#ffffff')
    {
        $path = preg_replace('/\/+/', '/', Director::baseURL() . $path . '/');

        return $this->owner->customise(
            [
                'Path'  => $path,
                'Theme' => $theme,
            ]
        )->renderWith('Favicons');
    }
}
