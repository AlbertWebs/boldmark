<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function services($slung){
        $Services = DB::table('services')->where('slung',$slung)->get();
        foreach ($Services as $key => $value) {
            $title = $value->title;
        }
        return view('front.services', compact("title","Services"));
    }
}
