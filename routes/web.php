<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotographersController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\Reservation;

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

Route::get('/', [UsersController::class, 'homePage'] )->name('home');

Route::get('/reg',function(){
    return view('register');
})->name('reg');

Route::get('/contact',function(){
    return view('user.contact');
});

Route::get('/about',function(){
    return view('user.about');
});
Route::post('/reg', [UsersController::class,'create'])->name('signup');
Route::post('/login',[UsersController::class,'login'])->name('login');
Route::get('/logout',[UsersController::class,'logout'])->name('logout');
////////////////////////// routs for user side ////////////////////////////
Route::get('/profile',[UsersController::class,'show'])->name('profile');
Route::post('/createContact',[ContactController::class,'create'])->name('createContact');
Route::get('/photographer',[PhotographersController::class,'photographersPageUser']);
Route::get('/photographerDetails/{id}',[PhotographersController::class,'photographerDetails'])->name('photographerDetails');
Route::post('/storeReservation', [ReservationController::class,'create']);
Route::delete('delete-session-userSide/{id}' , [ReservationController::class, 'deleteResUserSide']);
Route::get('search',[PhotographersController::class,'search']);

//------------- edit profile (user & admin) ------------------------
//------------- edit profile (user & admin) ------------------------
//------------- edit profile (user & admin) ------------------------
//------------- edit profile (user & admin) ------------------------
Route::post('/fname',[UsersController::class,'fnameEdit'])->name('fnameEdit');
Route::post('/lname',[UsersController::class,'lnameEdit'])->name('lnameEdit');
Route::post('/email',[UsersController::class,'emailEdit'])->name('emailEdit');
Route::post('/password',[UsersController::class,'passwordEdit'])->name('passwordEdit');
Route::post('/phone',[UsersController::class,'phoneEdit'])->name('phoneEdit');
Route::post('/gender',[UsersController::class,'genderEdit'])->name('genderEdit');
Route::post('/city',[UsersController::class,'cityEdit'])->name('cityEdit');
Route::post('/address',[UsersController::class,'addressEdit'])->name('addressEdit');
Route::post('/profilePic',[UsersController::class,'profilePictureEdit'])->name('profilePictureEdit');

//------------------admin dashboard--------------------//
//------------------admin dashboard--------------------//
//------------------admin dashboard--------------------//
//------------------admin dashboard--------------------//
Route::resource('users',UsersController::class);
Route::resource('contacts',ContactController::class);
Route::resource('categories',CategoriesController::class);
Route::resource('photographers',PhotographersController::class);
Route::resource('appointments',ReservationController::class);
Route::get('dashboard',[UsersController::class,'dashboardAdmin']);
Route::get('admin-profile',[UsersController::class,'adminProfile']);


//---------------employees dashboard--------------------//
Route::get('Photographer-dashboard',[PhotographersController::class,'homePage']);
Route::get('Photographer-profile',[PhotographersController::class,'profilePage']);
Route::get('Photographer-schedule',[PhotographersController::class,'schedulePage']);
Route::post('Photographer-storeSchedule/{id}',[PhotographersController::class,'storeSchedulePage']);
Route::delete('photographer-destroySchedule/{id}',[PhotographersController::class,'destroySchedule']);
Route::post('changeStatus-photographerSide/{id}',[ReservationController::class, 'changeStatusPhotogpraherSide']);
Route::post('cancelSession-photographerSide/{id}',[ReservationController::class, 'canselSessionPhotographerSide']);
//---------------employee edit profile------------------//
Route::post('/fnamePhotographer',[PhotographersController::class,'fnameEdit']);
Route::post('/lnamePhotographer',[PhotographersController::class,'lnameEdit']);
Route::post('/emailPhotographer',[PhotographersController::class,'emailEdit']);
Route::post('/passwordPhotographer',[PhotographersController::class,'passwordEdit']);
Route::post('/descriptionPhotographer',[PhotographersController::class,'descriptionEdit']);
Route::post('/profilePicPhotographer',[PhotographersController::class,'profilePicEdit']);
Route::post('/pricePhotographer',[PhotographersController::class,'priceEdit']);
Route::post('/sessionTypePhotographer',[PhotographersController::class,'sessionTypeEdit']);

