<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\resumeController;
use App\Http\Controllers\servicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Page Routes

Route::get('/',[homeController::class,'page']);
Route::get('/contact',[contactController::class,'page']);
Route::get('/service',[servicesController::class,'page']);
Route::get('/project',action: [projectController::class,'page']);
Route::get('/resume',[resumeController::class,'page']);

// Ajax Call routes
Route::get('/heroData',[homeController::class,'heroData']);
Route::get('/aboutData',[homeController::class,'aboutData']);
Route::get('/socialData',[homeController::class,'socialData']);

Route::post('/contactData',[contactController::class,'contactData']);

Route::get('/serviceData',[servicesController::class,'serviceData']);

Route::get('/projectData',[projectController::class,'projectData']);

Route::get('/resumeData',[resumeController::class,'resumeData']);
Route::get('/expreincesData',[resumeController::class,'expreincesData']);
Route::get('/educationData',[resumeController::class,'educationData']);
Route::get('/skillsData',[resumeController::class,'skillsData']);
Route::get('/languagesData',[resumeController::class,'languagesData']);







