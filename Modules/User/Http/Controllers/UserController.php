<?php

namespace Modules\User\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\User\Entities\TutorialCatagory;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('user::index');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function learning()
    {
        // $tutorials = TutorialCatagory::orderBy('menu_order')->get();
        // return view('user::learning', ['tutorials' => $tutorials ]);

        // Complecated ShortBy Option
        $tutorials = TutorialCatagory::all();
        $tuts = $tutorials->sortBy([
            fn ($a, $b) => $a['term']['term_order'] <=> $b['term']['term_order'],
        ])->values()->all();

        return view('user::learning', ['tutorials' => $tuts ]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function profile()
    {
        return view('user::profile');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function support()
    {
        return view('user::support');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function privacy()
    {
        return view('user::privacy');
    }
}
