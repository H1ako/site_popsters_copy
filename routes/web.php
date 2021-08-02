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
    Session::put('posts_amount', 12);
    // for ($i=3; $i <= 100; $i++){
    //     $el = new blog();
    //     $el->title = $i;
    //     $el->description = $i;
    //     $el->date = '2021-08-03';
    //     if ($i <= 30) $el->subject = 'Number';
    //     else if ($i > 30 && $i <= 70) $el->subject = 'Number2';
    //     else $el->subject = 'Number3';
    //     $el->save();
    // }
    $filters = array_unique(blog::pluck('subject')->all());
    $data = [
        'filters' => $filters,
    ];
    return view('blog', $data);
})->name('blog');

Route::post('/blog/submit', [ BlogController::class, 'submit' ])->name('blog_submit');

Route::get('/blog/blog_post_updater', function (){
    $posts_amount = Session::get('posts_amount');
    try{
        $post_subject = $_GET['post_subject'];
    }
    catch (Exception){
        $post_subject = 'all';
    }
    try{
        $posts_page = $_GET['posts_page'] - 1;
    }
    catch (Exception){
        $posts_page = 0;
    }
    $posts_page_start = ($posts_page * $posts_amount);
    if (isset($post_subject) && isset($posts_page)){
        if ($post_subject == 'all') $posts = blog::skip($posts_page_start)->take($posts_amount)->get();
        else $posts = blog::where('subject', $post_subject)->skip($posts_page_start)->take($posts_amount)->get();
    }
    else $posts = blog::take($posts_amount)->get();

    $data = [
        'posts' => $posts,
    ];
    return view('blog_posts', $data);
})->name('update_blog_post');
Route::get('/blog/blog_post_pages_updater', function () {
    $posts_amount = Session::get('posts_amount');
    try{
        $current_page = $_GET['current_page'];
    }
    catch (Exception) {
        $current_page = 1;
    }
    try{
        $post_subject = $_GET['post_subject'];
    }
    catch (Exception) {
        $post_subject = 'all';
    }
    if ($post_subject == 'all') $pages_amount = ceil(DB::table('blogs')->count() / $posts_amount);
    else $pages_amount = ceil(DB::table('blogs')->where('subject', $post_subject)->count() / $posts_amount);
    $data = [
        'pages_amount' => $pages_amount,
        'current_page' => $current_page
    ];
    return view('blog_posts_pages', $data);
})->name('update_blog_post_pages');