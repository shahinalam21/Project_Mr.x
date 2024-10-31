<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resumeController extends Controller
{
    public function page(Request $request){
        return view('page.resume');
    }

    public function resumeData(Request $request){
        return DB::table('resumes')->first();
    }
    public function expreincesData(Request $request){
        return DB::table('experiences')->get();
    }
    public function educationData(Request $request){
        return DB::table('educations')->get();
    }
    public function skillsData(Request $request){
        return DB::table('skills')->get();
    }
    public function languagesData(Request $request){
        return DB::table('languages')->get();
    }

}
