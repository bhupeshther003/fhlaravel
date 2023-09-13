<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basic_controller;
use Inertia\Middleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Auth::routes(['verify' => true]);;
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->Middleware('verified');
Route::get('index',[basic_controller::class,'index'])->name('home');


Route::get('/',[basic_controller::class,'index']);
Route::get('/find_doc',[basic_controller::class,'doc']);
Route::get('/medical-service',[basic_controller::class,'medical']);   
Route::get('/query',[basic_controller::class,'Query']); 
Route::get('/enviorment',[basic_controller::class,'environment']);    
// Route::get('/enviormentone',[basic_controller::class,'environmentone']); 


Route::get('/brain',[basic_controller::class,'Brain']);
Route::get('/cadiology',[basic_controller::class,'cadiology']);
Route::get('/cardiac',[basic_controller::class,'cardiac']);  
Route::get('/heart',[basic_controller::class,'heart']); 
Route::get('/live',[basic_controller::class,'live']);  
Route::get('/lung',[basic_controller::class,'lung']); 
Route::get('/kidney',[basic_controller::class,'kidney']); 


Route::get('/about#mission',[basic_controller::class,'mission']); 
// Route::get('/enviorment#first',[basic_controller::class,'envior_first']); 
Route::get('/Physicial_medici',[basic_controller::class,'Physicial_medici']); 
Route::get('enviorment_#blog',[basic_controller::class,'blog']);

Route::get('/nephro',[basic_controller::class,'nephro']); 
Route::get('/Neurology',[basic_controller::class,'Neurology']); 
Route::get('/Neurosurgery',[basic_controller::class,'Neurosurgery']); 
Route::get('/Ortho',[basic_controller::class,'Ortho']); 
Route::get('/Orthopa',[basic_controller::class,'Orthopadic']); 
Route::get('/urinary',[basic_controller::class,'urinary']); 
Route::get('/hernia',[basic_controller::class,'hernia']);     
Route::get('/appointment',[basic_controller::class,'apoin']);   
Route::get('/appointment_status',[basic_controller::class,'apoin_status']);   
Route::get('/about',[basic_controller::class,'about']);   
Route::get('/carrier',[basic_controller::class,'carrier']);   
Route::get('/contact',[basic_controller::class,'contact']);   
Route::get('/child',[basic_controller::class,'child']);   
Route::get('/specility',[basic_controller::class,'specility']);
Route::post('/apointbook',[basic_controller::class,'apointbook']);
Route::get('/carrier_login',[authontication_controller::class,'carrier_login']);


// Route::post('/sign_up',[authontication_controller::class,'store']);
// Route::get('/login',[authontication_controller::class,'log']);
// Route::get('/login', 'AuthController@showLoginForm')->name('login')->middleware('guest');
// Route::post('/login_sub',[authontication_controller::class,'login_submit']);
// Route::post('/verify_mail',[authontication_controller::class,'verify_mail']);
Route::post('enquiry',[basic_controller::class,'main_enquiry']);
Route::post('feedback',[basic_controller::class,'feedback']);
Route::post('appoint_enquiry',[basic_controller::class,'appoint_enquiry']);
Route::get('kidney',[basic_controller::class,'kidney']);
Route::post('kidney',[basic_controller::class,'sub']);
Route::get('jobs',[basic_controller::class,'job']);


// email not work
Route::get('send_mail' , [basic_controller::class, 'gomail']);

// contact form
Route::post('contact', [basic_controller::class, 'data'])->name('contact.us.store');