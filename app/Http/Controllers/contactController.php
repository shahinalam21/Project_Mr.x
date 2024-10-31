<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    public function page(Request $request){
        return view('page.contact');
    }

    public function contactData(Request $request){
        return DB::table('contacts')->insert($request->input());
    }
       
}
