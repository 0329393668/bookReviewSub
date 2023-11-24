<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function index(){
        $configs = DB::table('configs')->get();
        return view("admin.content.config.index",["configs"=>$configs]);
    }
}
