<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeLang extends Controller
{
    function changeLang(Request $req){
        if ($req->input('locale')){
            Session::put('locale', $req->input('locale'));
        }
    }
}
