<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index(){
        $comments = DB::table('comments')->get();
        return view("admin.content.comment.index",["comments"=>$comments]);
    }
    public function destroy($id){
        $item = Comment::find($id);
        if($item)
            $item->delete();
        return redirect()->route("admin.comment.index");
    }
}
