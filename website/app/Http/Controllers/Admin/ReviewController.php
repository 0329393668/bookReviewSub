<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index(){
        $reviews = DB::table('reviews')->get();
        return view("admin.content.review.index",["reviews"=>$reviews]);
    }
    public function add(){
        $reviews = DB::table('reviews')->get();
        return view("admin.content.review.add", ["reviews"=>$reviews]);
    }

    public function store(Request $request){
        $input = $request->all();
        $Review = new Review();
        $Review["name"] = $input["review_name"];
        $Review["preview_image"] = $input["review_preview_image"];
        $Review["content"] = $input["review_content"];
        $Review["category_id"] = "1";
        $Review["user_id"] = "1";
        $Review["description"] = "aaaaaa";
        $Review->save();
        return redirect()->route("admin.review.index");
    }
    public function edit($id){
        $item = Review::find($id);
        $reviews = DB::table('reviews')->get();
        return view("admin.content.review.edit", ["reviews"=>$reviews, "item"=>$item]);
    }
    public function update(Request $request, $id){
        $item = Review::find($id);
        if($item){
            $input = $request->all();
            $item = new Review();
            $item["name"] = $input["review_name"];
            $item["preview_image"] = $input["review_preview_image"];
            $item["content"] = $input["review_content"];
            $item["category_id"] = "1";
            $item["user_id"] = "1";
            $item["description"] = "aaaaaa";
            $item->save();
        }
        return redirect()->route("admin.review.index");
    }
    public function destroy($id){
        $item = Review::find($id);
        if($item)
            $item->delete();
        return redirect()->route("admin.review.index");
    }
}
