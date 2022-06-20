<?php
namespace App\Shortcodes;

use App\Models\Project;
use Corcel\Model\Option;
use Corcel\Shortcode;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class AllProjectsShortcode implements Shortcode
{
    /**
     * @param ShortcodeInterface $shortcode
     * @return string
     */
    public function render(ShortcodeInterface $shortcode)
    {
        // $projects = Project::published()->inRandomOrder()->get();
        $projects = Project::getPublished();
        $posts = $projects->map(function($post){
            return (object) [
                'title' => $post->title,
                'image' => $post->image,
                'summery' => $post->excerpt,
                'link' => $post->slug
            ];
        });

        return view('components.projects', compact('posts'));
    }
}
