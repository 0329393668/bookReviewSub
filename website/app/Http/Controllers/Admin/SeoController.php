<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeoController extends Controller
{
    public function index(){
        $seos = DB::table('seos')->get();
        return view("admin.content.seo.index",["seos"=>$seos]);
    }
}
