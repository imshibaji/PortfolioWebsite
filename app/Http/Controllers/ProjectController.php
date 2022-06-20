<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::getPublished();
        // return Project::find(2842)->meta->source_code_download_link;
    }
    public function show($slug){
        $post = Project::slug($slug)->first();
        if($post){
            $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
            $keyword = $post->meta->_yoast_wpseo_focuskw;
            $description = $post->meta->_yoast_wpseo_metadesc;
            return view('projects.show', compact('post', 'title', 'keyword', 'description'));
        }else{
            return redirect('/my-projects');
        }
    }

    public function create()
    {
        $title = 'Hire me for Project - Shibaji Debnath';
        $keyword = '';
        $description = 'You wanted to ';
        return view('projects.create', compact('title', 'keyword', 'description'));
    }


    public function store(Request $req)
    {
        Mail::to('imshibaji@gmail.com')->send(new SubscribeMail($req->input()));

        // Date Send to Cart Page
        // $encode_data =  base64_encode( json_encode($req->input()));
        Session::flash('status', 'Thank you for your enquiery. We will be contact with you soon...');
        return back();
    }

    /**
     * Project Enquery
     */
    public function download(Request $req)
    {
        Mail::to('imshibaji@gmail.com')->send(new SubscribeMail($req->input()));

        // Date Send to Cart Page
        // $encode_data =  base64_encode( json_encode($req->input()));
        $post = Project::find($req->pid);
        if($post->meta->source_code_download_link){
            return Redirect::away($post->meta->source_code_download_link);
        }
        return back();
    }
}
