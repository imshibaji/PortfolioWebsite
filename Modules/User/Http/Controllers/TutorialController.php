<?php

namespace Modules\User\Http\Controllers;

use App\Models\Taxonomy;
use App\Models\Tutorial;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\TutorialCatagory;

class TutorialController extends Controller
{
    public function index()
    {
        $tutorials = TutorialCatagory::all();
        $tuts = $tutorials->sortBy([
            fn ($a, $b) => $a['term']['term_order'] <=> $b['term']['term_order'],
        ])->values()->all();

        return view('user::tutorial.list', ['tutorials' => $tuts ]);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function category($cat)
    {

        $tutorials = Tutorial::taxonomy('tutorial_catagory',$cat)->published()->orderBy('menu_order')->get();
        $tutorial = Tutorial::taxonomy('tutorial_catagory',$cat)->published()->orderBy('menu_order')->first();
        $course_title = $tutorial->terms['tutorial_catagory'][$cat] ?? 'Course Dashboard';
        $title = $course_title .' - '. ($tutorial->title ?? 'No Topic');
        $catagory = $cat;

        if($tutorial){
            return view('user::tutorial.index', compact(
                'tutorials', 'tutorial',
                'course_title', 'title',
                'catagory'
            ));
        }
        return view('user::tutorial.no-topic');
    }

    public function tutorial($cat, $tut)
    {
        $tutorials = Tutorial::taxonomy('tutorial_catagory',$cat)->published()->orderBy('menu_order')->get();
        $tutorial = Tutorial::slug($tut)->first();
        $course_title = $tutorial->terms['tutorial_catagory'][$cat];
        $title = $course_title .' - '. $tutorial->title;
        $catagory = $cat;

        // return $tutorial;
        // $xml = simplexml_load_string($tutorial->content);
        // dd($xml);
        // return $xml->figure;

        if($tutorial){
            return view('user::tutorial.index', compact(
                'tutorials', 'tutorial',
                'course_title', 'title',
                'catagory'
            ));
        }
        return view('user::tutorial.no-topic');
    }

}
