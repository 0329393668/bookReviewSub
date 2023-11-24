<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index(){
        $menus = DB::table('menus')->get();
        return view("admin.content.menu.index",["menus"=>$menus]);
    }
    public function add(){
        $menus = DB::table('menus')->get();
        return view("admin.content.menu.add", ["menus"=>$menus]);
    }
    public function store(Request $request){
        $input = $request->all();
        $menu = new Menu();
        $menu["menu_name"] = $input["menu_name"];
        $menu["menu_url"] = $input["menu_url"];
        $menu["menu_parent_id"] = 0;
        $menu->save();
        return redirect()->route("admin.menu.index");
    }
    public function edit($id){
        $item = Menu::find($id);
        $menus = DB::table('users')->get();
        return view("admin.content.menu.edit", ["menus"=>$menus, "item"=>$item]);
    }
    public function update(Request $request, $id){
        $item = Menu::find($id);
        if($item){
            $input = $request->all();
            $item["menu_name"] = $input["menu_name"];
            $item["menu_url"] = $input["menu_url"];
            $item["menu_parent_id"] = 0;
            $item->save();
        }

        return redirect()->route("admin.menu.index");
    }
    public function destroy($id){
        $item = Menu::find($id);
        if($item)
            $item->delete();
        return redirect()->route("admin.menu.index");
    }
}
