<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use App\Mail\TrainingEnquery;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Training::getPublished();
    }


    /**
     * Training Enquery
     */
    public function enquery(Request $req)
    {
        Mail::to('imshibaji@gmail.com')->send(new TrainingEnquery($req->input()));

        // Date Send to Cart Page
        $encode_data =  base64_encode( json_encode($req->input()));
        return redirect(url('/cart', ['d'=> $encode_data]));
    }

    /**
     * Training Enquery
     */
    public function demo(Request $req)
    {
        Mail::to('imshibaji@gmail.com')->send(new SubscribeMail($req->input()));

        // Date Send to Cart Page
        // $encode_data =  base64_encode( json_encode($req->input()));
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function viewNow($slug)
    {
        $post = Training::slug($slug)->first();
        return view('trainings.show', compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $post = Training::find($id);
        $post = Training::slug($id)->published()->first();
        if($post){
        $title = $post->meta->_yoast_wpseo_title ?? $post->title.' - Shibaji Debnath';
        $keyword = $post->meta->_yoast_wpseo_focuskw;
        $description = $post->meta->_yoast_wpseo_metadesc;

        Config::set('training_title', $post->title);
        Config::set('training_amt', $post->meta->course_price);
        Config::set('training_amt_usd', $post->meta->course_price_usd);

        return view('trainings.show', compact('post', 'title', 'keyword', 'description'));
        }else{
            return redirect('/online-training');
        }
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
