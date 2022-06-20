<?php
namespace App\Shortcodes;

use App\Models\Service;
use Corcel\Model\Option;
use Corcel\Shortcode;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class AllServicesShortcode implements Shortcode
{
    /**
     * @param ShortcodeInterface $shortcode
     * @return string
     */
    public function render(ShortcodeInterface $shortcode)
    {
        // $projects = Project::published()->inRandomOrder()->get();
        $projects = Service::getPublished();
        $posts = $projects->map(function($post){
            return (object) [
                'title' => $post->title,
                'image' => $post->image,
                'summery' => $post->excerpt,
                'link' => $post->slug
            ];
        });

        return view('components.all-services', compact('posts'));
    }
}