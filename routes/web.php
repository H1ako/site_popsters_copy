<?php
use App\Models\blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeLang;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::post('/change_lang', [ HomeLang::class, 'changeLang' ])->name('home_post');
Route::get('/blog', function (){
    return view('blog');
})->name('blog');

Route::post('/blog/submit', [ BlogController::class, 'submit' ])->name('blog_submit');

Route::get('blog_post_updater', function (){
    $post_subject = $_GET['post_subject'];
    $posts = blog::where('subject', $post_subject)->get();
    $data = ['posts' => $posts];
    return view('blog_posts', $data);
})->name('update_blog_post');
