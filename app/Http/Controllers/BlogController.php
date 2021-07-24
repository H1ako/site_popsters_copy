<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
class BlogController extends Controller
{
    public function submit(Request $req){
        $validation = $req->validate(["title" => "required|min:3"]);
        $blog_post = new blog();
        $blog_post->title = $req->input('title');
        $blog_post->subject = $req->input('subject');
        $blog_post->description = $req->input('description');
        $blog_post->date = $req->input('date');
        $blog_post->save();
    }
}
