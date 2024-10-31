<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function page(){
        return view('services');
    }
    public function serviceData(Request $request){
        
    }
}
