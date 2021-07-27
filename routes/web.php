<?php
use App\Models\blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeLang;

//==================== Home Page ====================//
Route::get('/', function () {
    return view('index');
})->name('home');
Route::post('/', [ HomeLang::class, 'changeLang' ])->name('home_post');

//==================== Blog ====================//
Route::get('/blog', function (){
    return view('blog');
})->name('blog');
Route::post('/blog/submit', [ BlogController::class, 'submit' ])->name('blog_submit');
Route::get('blog_post_updater', function (){
    $post_subject = $_GET['post_subject'];
    if (isset($post_subject)){
        $posts = blog::where('subject', $post_subject)->get();
    }
    else $posts = blog::all();
    $data = ['posts' => $posts];
    return view('blog_posts', $data);
})->name('update_blog_post');
