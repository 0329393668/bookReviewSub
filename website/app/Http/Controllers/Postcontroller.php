<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
{
    public function add(){
        return view('add_post');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $item = new Post();
        $item->name = $input["name"];
        $item->content = $input["content"];
        $updatedContent = preg_replace('/(?<=src=")storage\//', '/storage/', $item->content);
        $item->content = $updatedContent;
        $item->save();
        $posts = DB::table('posts')->get();
        return view('blog', ["posts" => $posts]);
    }
    public function detail($id){
        $item = Post::find($id);
        return view('post_detail', ["post"=>$item]);
    }
    public function edit($id){
        $item = Post::find($id);
        return view('edit_post', ["post"=>$item]);
    }
    public function update(Request $request, $id)
    {
        $item = Post::find($id);
        if ($item) {
            $input = $request->all();
            $item->name = $input["name"];
            $item->content = $input["content"];
            $updatedContent = preg_replace('/(?<=src=")storage\//', '/storage/', $item->content);
            $item->content = $updatedContent;
            $item->save();
        }
        $posts = DB::table('posts')->get();
        return view('blog', ["posts" => $posts]);
    }
}
