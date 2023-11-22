<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotographersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


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
Route::get('users',function(){
    return view('admin.users');
});

Route::get('/', function () {
    return view('user.home');
})->name('home');

Route::get('/reg',function(){
    return view('register');
})->name('reg');

Route::get('/contact',function(){
    return view('user.contact');
});

Route::get('/profile',[UsersController::class,'show'])->name('profile');
Route::post('/reg', [UsersController::class,'create'])->name('signup');
Route::post('/login',[UsersController::class,'login'])->name('login');
Route::get('/logout',[UsersController::class,'logout'])->name('logout');
Route::post('/createContact',[ContactController::class,'create'])->name('createContact');
Route::get('/photographer',[PhotographersController::class,'photographersPageUser']);
Route::get('/photographerDetails/{id}',[PhotographersController::class,'photographerDetails'])->name('photographerDetails');

//------------- edit profile ------------------------
//------------- edit profile ------------------------
//------------- edit profile ------------------------
//------------- edit profile ------------------------
Route::post('/fname',[UsersController::class,'fnameEdit'])->name('fnameEdit');
Route::post('/lname',[UsersController::class,'lnameEdit'])->name('lnameEdit');
Route::post('/email',[UsersController::class,'emailEdit'])->name('emailEdit');
Route::post('/password',[UsersController::class,'passwordEdit'])->name('passwordEdit');
Route::post('/phone',[UsersController::class,'phoneEdit'])->name('phoneEdit');
Route::post('/gender',[UsersController::class,'genderEdit'])->name('genderEdit');
Route::post('/city',[UsersController::class,'cityEdit'])->name('cityEdit');
Route::post('/address',[UsersController::class,'addressEdit'])->name('addressEdit');
Route::post('/profilePic',[UsersController::class,'profilePictureEdit'])->name('profilePictureEdit');
// Route::post('/signup', [])->name('reg');
// Route::post('/reservationDoc',[ReservationController::class,'AddResDocPage'])->name('reservationDoc');


//------------------admin dashboard--------------------//
Route::resource('users',UsersController::class);
Route::resource('contacts',ContactController::class);
Route::resource('categories',CategoriesController::class);
Route::resource('photographers',PhotographersController::class);
Route::get('/dashboard',function(){
    return view('admin.dashboard');
});

//---------------employees dashboard--------------------//
Route::get('Photographer-dashboard',[PhotographersController::class,'homePage']);
Route::get('Photographer-profile',[PhotographersController::class,'profilePage']);
