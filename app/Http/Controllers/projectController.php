<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class projectController extends Controller
{
    public function page(Request $request){
        return view('page.project');
    }
    public function projectData(Request $request){
        return DB::table('projects')->get();
    }
}
