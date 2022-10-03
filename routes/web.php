<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SampleMail;

use App\Http\Controllers\FileUploadController;

// use App\Http\Controllers\MemberController;

// use Illuminate\Support\Str;

// use App\Http\Controllers\Member;

// use App\Http\Controllers\EmployeeController;

// use App\Http\Controllers\Members;

//use App\Http\Controllers\MemberController;

// use App\Http\Controllers\UploadController;

// use App\Http\Controllers\StoreController;

// use App\Http\Controllers\UserAuth;

// use App\Http\Controllers\UserController;

// use App\Http\Controllers\User;

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


// $info = 'hi, I am Numan Anwar';
// $info = Str::ucfirst($info);
// $info = Str::replace('Hi','Hello',$info);
// $info = Str::camel($info);

// Fluent String Operations
// $info = Str::of($info)
//       ->ucfirst($info)
//       ->replace('Hi','Hello',$info)
//       ->camel($info);

// echo $info;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'welcome');
Route::get('/', [FileUploadController::class, 'list'])->name('list');
Route::view('/upload', 'welcome');
Route::post('upload', [FileUploadController::class, 'upload'])->name('welcome');


// Sample Mail Route
Route::get('mail', function () {
    return new SampleMail();
});

Route::get('/about', function () {
    return view('about');
});

Route::view('home','home')->middleware('protectedPage');

Route::get('/noaccess', function () {
    return view('noaccess');
});


// New Controller
// Route::get('member/{key:name}',[MemberController::class,'index']);

// Join on Database
// Route::get('list',[EmployeeController::class,'getData']);

// For fetching data from data base updating and deleting it

// Route::get('list',[MemberController::class,'list']);
// Route::get('delete/{id}',[MemberController::class,'delete']);
// Route::get('edit/{id}',[MemberController::class,'showData']);
// Route::post('edit',[MemberController::class,'update']);

// Query Builder 
// Route::get('list', [Members::class,'operations']);

// Route::post('add',[MemberController::class,'addData']);

// Route::view('add','add_members');
// Route::get('/profile/{lang}', function($lang){
//     App::setlocale($lang);
//     return view('profile_page');
// });

// Route::view('profile','profile_page');

// Route::view('upload','upload');

// Route::post('upload',[UploadController::class,'index']);

// Route::view('login','login');

// Route::view('store','storeUser');

// Route::post('storecontroller',[StoreController::class,'storeMember']);

// Route::view('profile','profile');

// Route::get('/logout', function () {
//     if(session()->has('user')){
//         session()->pull('user',null);
//     }
//     return redirect('login');
// });

// Route::get('/login', function () {
//     if(session()->has('user')){
//         return redirect('profile');
//     }
//     return view('login');
// });

// Route::post('user',[UserAuth::class,'userLogin']);

// Route::view('login','users');

// Route::delete('users',[UserController::class,'testRequest']);

// Route::get('user',[UserController::class,'getData']);

// Route::get('home',[UserController::class, 'index']);

// Route::group(['middleware'=>['protectPage']],function(){
//     Route::get('/home', function () {
//     return view('home');
// });
// });

// Route::post('users',[User::class,'getData']);

// Route::get('users-page/{user}',[UserController::class, 'loadView']);

// Route::get('user/{id}',[UserController::class,'show']);

// Route::get('/users/{name}', function($name) {
//     return view('users-page', ["name"=>$name]);
// });