<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog()
    {
        $posts = DB::table('posts')->get();
        return view('blog',["posts"=>$posts]);
    }
}
