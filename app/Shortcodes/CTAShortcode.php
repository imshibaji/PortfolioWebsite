<?php
namespace App\Shortcodes;

use Corcel\Shortcode;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class CTAShortcode implements Shortcode
{
    /**
     * @param ShortcodeInterface $shortcode
     * @return string
     */
    public function render(ShortcodeInterface $shortcode)
    {
        // return $shortcode->getName(). ' '. $shortcode->getParameter('id');
        return  view('components.cta');
    }
}