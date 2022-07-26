<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CostsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ListingController;
use App\Models\Teacher;

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

// Route::get('/home',[HomeController::class,'redirect']);
// Route::get('/', [HomeController::class,'index']);




Route::delete('/listings/{listing}/delete',[ListingController::class,'delete'] )->middleware('auth');
Route::put('/listings/{listing}/update',[ListingController::class,'update'] )->middleware('auth');
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'] )->middleware('auth');
Route::get('/listings/create', [ListingController::class,'create'] )->middleware('auth');
Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth');
Route::get('/listings/{listing}',[ListingController::class,'show'] );
Route::post('/listings/create',[ListingController::class,'store'] );
Route::get('/', [ListingController::class,'index'] );


Route::put('/listings/{listing}/updateUser',[UserController::class,'updateUser'] )->middleware('auth');
Route::get('/listings/{listing}/editUser',[UserController::class,'editUser'] )->middleware('auth');
Route::get('/users/login',[UserController::class,'login'] )->name('login')->middleware('guest');
Route::get('/users/register',[UserController::class,'create'] )->middleware('guest');
Route::post('/logout',[UserController::class,'logout'] )->middleware('auth');
Route::post('/users/authenticate',[UserController::class,'authenticate']);
Route::get('/users/profile',[UserController::class,'profile'] );
Route::post('/users',[UserController::class,'store']);



// Route::delete('/costs/{costing}/delete',[CostsController::class,'delete'] )->middleware('auth');
// Route::put('/costs/{costing}/update',[CostsController::class,'update'] )->middleware('auth');
// Route::get('/costs/{costing}/edit',[CostsController::class,'edit'] )->middleware('auth');
Route::get('/costs/create', [CostsController::class,'create'] )->middleware('auth');
Route::get('/costs/manage',[CostsController::class,'manage'])->middleware('auth');
Route::post('/costs/create',[CostsController::class,'store'] );




Route::get('/admin/cards',[AdminController::class,'cards']);
Route::get('/admin/charts',[AdminController::class,'charts']);
Route::get('/admin/tables',[AdminController::class,'tables']);
Route::get('/admin/home',[AdminController::class,'adminhome']);
Route::get('/admin/subjects',[AdminController::class,'create']);
Route::post('/admin/subjects',[AdminController::class,'store'] );
Route::get('/admin/manage',[AdminController::class,'manage']);

// Route::get('/teacher/{teaching}',[AdminController::class,'showdetail'] );

Route::get('/teacher/manage',[AdminController::class,'manageSub']);


 
Route::get('/teacher/{subjects}',[AdminController::class,'showdetail'] );



Route::post('comments',[CommentController::class,'store']);





Route::get('/get',[all::class,'getting']);

// show  -show single listing
// index- show all listing  
// create - create form to create new listing
// store- store new listing
// edit-show form to edit listing
// update -update listing.
// destroy- delete listing.






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
