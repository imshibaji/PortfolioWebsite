<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\ServiceController;
use App\Models\Page;
use App\Models\Post;
use App\Models\Training;
use App\Models\Tutorial;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home' ]);


// Route::get('tranings/{slug}', [TrainingController::class, 'view']);
Route::resource('pages', PageController::class);
Route::resource('posts', PostController::class);
Route::resource('trainings', TrainingController::class);
Route::resource('services', ServiceController::class);
Route::resource('testimonials', TestimonialController::class);



// Project Routers Sections
Route::get('projects', [ProjectController::class, 'index']);
Route::get('project/create', [ProjectController::class, 'create']);
Route::post('project/enquiry', [ProjectController::class, 'store']);
Route::post('project/download', [ProjectController::class, 'download']);
Route::get('project/{slug}', [ProjectController::class, 'show']);

// Traiining Query
Route::post('trainings/enquery', [TrainingController::class, 'enquery'])->name('traning.enquery');
Route::post('trainings/demo', [TrainingController::class, 'demo'])->name('traning.demo');

// Contact Us
Route::post('contact', [PageController::class, 'contact'])->name('contact.enquery');

Route::get('opts', function () {
    // return Taxonomy::all();
    // return Category::all();
    // return Option::asArray(['wpcf7']);
    // return Option::get('wpcf7');
    // return Post::getPublished();
    return Project::getPublished();
    // return Tutorial::all();
});
// Route::get('testi', function(){
//     return Testimonial::find(3199);
// });

Route::get('/sitemap.xml', [PageController::class, 'sitemap']);

Route::get('opt', function () {
    // $t = Training::find(59);
    // $pages = Page::getPublished();
    // return $pages;
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::prefix('tutorial')->group(function(){
    Route::get('/', [TutorialController::class, 'index']);
    Route::get('/{cat}', [TutorialController::class, 'category']);
    Route::get('/{cat}/{tut}', [TutorialController::class, 'tutorial']);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/../Modules/Payment/Routes/web.php';
require __DIR__.'/../Modules/User/Routes/web.php';


// Redirect Section
Route::permanentRedirect('/app-development-services','/application-developer');
Route::permanentRedirect('/business-growth-services','/application-developer');
Route::permanentRedirect('/my-projects','/projects-and-portfolio');

Route::get('/{slug}', [PageController::class, 'post' ]);


