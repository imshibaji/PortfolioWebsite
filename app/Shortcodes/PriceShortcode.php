<?php
namespace App\Shortcodes;

use App\Models\Option;
use App\Models\Training;
use Corcel\Shortcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class PriceShortcode implements Shortcode
{
    /**
     * @param ShortcodeInterface $shortcode
     * @return string
     */
    public function render(ShortcodeInterface $shortcode)
    {
        // return sprintf(
        //     'price = %s, %s, %s',
        //     $shortcode->getName(),
        //     $shortcode->getParameter('amt'),
        //     $shortcode->getContent()
        // );

        $options = Option::asArray(['offer_name','offer_amt','offer_expire']);
        $data = [
            'name' => $shortcode->getName(),
            'title' => Config::get('training_title'),
            'amt' => Config::get('training_amt') ?? $shortcode->getParameter('amt'),
            'amt_usd' => Config::get('training_amt_usd') ?? $shortcode->getParameter('amt_usd'),
            'know' => $shortcode->getParameter('know'),
            'duration' => $shortcode->getParameter('duration'),
            'ctype' => $shortcode->getParameter('ctype'),
            'is_discount' => $shortcode->getParameter('is_discount'),
            'features' => $shortcode->getParameter('features'),
            'offer_name' => $options['offer_name'],
            'offer_amt' => $options['offer_amt'],
            'offer_expire' => $options['offer_expire'],
            'content' => $shortcode->getContent(),
        ];
        return  view('components.price', $data);
    }
}
