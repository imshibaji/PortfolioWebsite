<?php
namespace App\Shortcodes;

use App\Models\Training;
use Corcel\Model\Option;
use Corcel\Shortcode;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class AllTrainingsShortcode implements Shortcode
{
    /**
     * @param ShortcodeInterface $shortcode
     * @return string
     */
    public function render(ShortcodeInterface $shortcode)
    {
        $trainings = Training::getPublished();
        $posts = $trainings->map(function($post){
            return (object) [
                'title' => $post->title,
                'summery' => str_replace("\n", "<br>", $post->post_excerpt),
                'price' => $post->meta->course_price,
                'price_usd' => $post->meta->course_price_usd,
                'spacial' => $post->meta->_training_spacial_meta_key,
                'popular' => $post->meta->_training_popular_meta_key,
                'why' => $post->meta->_training_why_meta_key,
                'offer' => Option::get('offer_amt'),
                'link' => $post->slug
            ];
        });

        return view('components.trainings', compact('posts'));
    }
}
