<?php

namespace App\Http\Controllers;

use App\Mail\ContactEnquery;
use App\Models\Page;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\Training;
use App\Models\Service;
use App\Models\Tutorial;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\User\Entities\TutorialCatagory;

class PageController extends Controller
{
    public function home(){
        $testimonials = Testimonial::published()->inRandomOrder()->limit(3)->get();
        return view('index', compact('testimonials'));
    }

    public function post($slug){
        $post = Post::slug($slug)->first();
        if($post){
            $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
            $keyword = $post->meta->_yoast_wpseo_focuskw;
            $description = $post->meta->_yoast_wpseo_metadesc;
            return view('article', compact('post', 'title', 'keyword', 'description'));
        }

        $post = Page::slug($slug)->first();
        if($slug == 'online-training'){
            $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
            $keyword = $post->meta->_yoast_wpseo_focuskw;
            $description = $post->meta->_yoast_wpseo_metadesc;
            return view('trainings.list', compact('post', 'title', 'keyword', 'description'));
        }

        $post = Page::slug($slug)->first();
        if($slug == 'articles'){
            $posts = Post::getPublishedLimited();
            $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
            $keyword = $post->meta->_yoast_wpseo_focuskw;
            $description = $post->meta->_yoast_wpseo_metadesc;
            return view('articles', compact('posts', 'post', 'title', 'keyword', 'description'));
        }

        $post = Page::slug($slug)->first();
        if($slug == 'my-projects'){
            $posts = Post::getPublishedLimited();
            $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
            $keyword = $post->meta->_yoast_wpseo_focuskw;
            $description = $post->meta->_yoast_wpseo_metadesc;
            return view('projects.list', compact('posts', 'post', 'title', 'keyword', 'description'));
        }

        $post = Page::slug($slug)->first();
        if($slug == 'app-development-services'){
            $posts = Post::getPublishedLimited();
            $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
            $keyword = $post->meta->_yoast_wpseo_focuskw;
            $description = $post->meta->_yoast_wpseo_metadesc;
            return view('services.list', compact('posts', 'post', 'title', 'keyword', 'description'));
        }

        $post = Tutorial::slug($slug)->first();
        if($post){
            $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
            $keyword = $post->meta->_yoast_wpseo_focuskw;
            $description = $post->meta->_yoast_wpseo_metadesc;
            return view('post', compact('post', 'title', 'keyword', 'description'));
        }

        // Any Pages
        $post = Page::slug($slug)->first();
        if($post){
            $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
            $keyword = $post->meta->_yoast_wpseo_focuskw;
            $description = $post->meta->_yoast_wpseo_metadesc;
            return view('post', compact('post', 'title', 'keyword', 'description'));
        }
        return view('404');
    }

    /**
     * Contact Page
     */
    public function contact(Request $request)
    {
        Mail::to('imshibaji@gmail.com')->send(new ContactEnquery($request->input()));
        $request->session()->flash('alert', 'Your enquery goes successfully.');
        return back();
    }


    public function sitemap()
    {
        $tutorials = TutorialCatagory::all();
        $cats = $tutorials->sortBy([
            fn ($a, $b) => $a['term']['term_order'] <=> $b['term']['term_order'],
        ])->values()->all();

        return view('sitemap', [
            'pages' => Page::getPublished(),
            'trainings' => Training::getPublished(),
            'services' => Service::getPublished(),
            'categories' => $cats,
            'tutorials' => Tutorial::getPublished(),
            'posts' => Post::getPublished()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Page::published()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
