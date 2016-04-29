<?php
/**
 * FaviconsExt extends Page_Controller
 * Generate code in the head of Page.ss
 * with `$Favicons("path-to-icons")`
 */
class FaviconsExt extends DataExtension
{
    public function Favicons($path=false, $theme='#ffffff')
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
