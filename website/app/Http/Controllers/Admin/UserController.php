<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view("admin.content.user.index",["users"=>$users]);
    }
    public function add(){
        $users = DB::table('users')->get();
        return view("admin.content.user.add", ["users"=>$users]);
    }
    public function store(Request $request){
        $input = $request->all();
        $user = new User();
        $user["name"] = $input["user_name"];
        $user["phone"] = $input["user_phone"];
        $user["email"] = $input["user_email"];
        $user["address"] = $input["user_address"];
        $user["password"] = "";
        $user["avatar"] = "";
        $user->save();
        return redirect()->route("admin.user.index");
    }
    public function edit($id){
        $item = User::find($id);
        $users = DB::table('users')->get();
        return view("admin.content.user.edit", ["users"=>$users, "item"=>$item]);
    }
    public function update(Request $request, $id){
        $item = User::find($id);
        if($item){
            $input = $request->all();
            $item["name"] = $input["user_name"];
            $item["phone"] = $input["user_phone"];
            $item["email"] = $input["user_email"];
            $item["address"] = $input["user_address"];
            $item["password"] = "";
            $item["avatar"] = "";
            $item->save();
        }

        return redirect()->route("admin.user.index");
    }
    public function destroy($id){
        $item = User::find($id);
        if($item)
            $item->delete();
        return redirect()->route("admin.user.index");
    }
}
