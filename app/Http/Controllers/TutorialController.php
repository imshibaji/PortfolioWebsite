<?php

namespace App\Http\Controllers;

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

        // return $tutorials;
        $tuts = $tutorials->sortBy([
            fn ($a, $b) => $a['term']['term_order'] <=> $b['term']['term_order'],
        ])->values()->all();


        return view('tutorial.list', [
            'tutorials' => $tuts,
            'title' => 'Free Software Development Tutorials in Hindi',
            'keyword' => 'free software development tutorials, software development tutorial',
            'description' => 'If you wanted to learning about Software Development in Hindi. This section will be helping you to learning About Software Development'
        ]);
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
        $catagory = $cat;

        $title = $course_title .' - '. ($tutorial->title ?? 'No Topic');
        $keyword = $tutorial->meta->_yoast_wpseo_focuskw ?? '';
        $description = $tutorial->meta->_yoast_wpseo_metadesc ?? '';

        if($tutorial){
            return view('tutorial.index', compact(
                'tutorials', 'tutorial',
                'course_title', 'title',
                'catagory', 'keyword', 'description'
            ));
        }
        return view('tutorial.no-topic');
    }

    public function tutorial($cat, $tut)
    {
        $tutorials = Tutorial::taxonomy('tutorial_catagory',$cat)->published()->orderBy('menu_order')->get();
        $tutorial = Tutorial::slug($tut)->first();
        $course_title = $tutorial->terms['tutorial_catagory'][$cat];
        $catagory = $cat;

        $title = $tutorial->meta->_yoast_wpseo_title ?? $tutorial->title .' - '. $course_title;
        $keyword = $tutorial->meta->_yoast_wpseo_focuskw ?? '';
        $description = $tutorial->meta->_yoast_wpseo_metadesc ?? '';

        if($tutorial){
            return view('tutorial.index', compact(
                'tutorials', 'tutorial',
                'course_title', 'title',
                'catagory', 'keyword', 'description'
            ));
        }
        return view('tutorial.no-topic');
    }

}
