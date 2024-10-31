<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function page(){
        return view('page.home');
    }

    public function heroData(Request $request){
        return DB::table('heroproperties')->get();
    }

    public function aboutData(Request $request){
        return DB::table('abouts')->get();
    }

    public function socialData(Request $request){
        return DB::table('socials')->get();

    }
}
