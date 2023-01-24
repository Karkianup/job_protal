<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/asd','dashboard');

Auth::routes();

//for admin login
Route::get('/admin/login',[LoginController::class,'loginForm'])->middleware('guest');
Route::post('/admin/login',[LoginController::class,'login'])->middleware('guest')->name('admin.login');
Route::post('/admin/logout',[LoginController::class,'logout'])->middleware('auth')->name('admin.logout');

Route::namespace('App\Http\Controllers\admin')->middleware('auth')->prefix('admin')->name('admin.')->group(function(){
    // Route::get('/dashboard',DashboardController::class)->name('dashboard');

    //role
//    Route::controller(RoleController::class)->prefix('role')->name('role.')->group(function(){
//         Route::get('','index')->name('index');
//         Route::get('/create','create')->name('create');
//         Route::post('','store')->name('store');
//         Route::put('/{role}','update')->name('update');
//         Route::get('/{role}','edit')->name('edit');
//         Route::delete('/{role}','destroy')->name('destroy');
//    });

    //role
    Route::resource('/role',RoleController::class)->names('role');

   //user
   Route::resource('/user',UserController::class)->names('user');

   //profile
   Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile','index')->name('profile');
    Route::get('/security-setting','securitySetting')->name('securitySetting');
    Route::get('/password/edit','passwordEdit')->name('password.edit');
    Route::put('/password','passwordUpdate')->name('password.update');

   });

   Route::controller(EmployerController::class)->prefix('employer')->name('employer.')->group(function(){
        Route::get('','index')->name('index');
        Route::put('/approval/{employer}','approval')->name('approval');
        Route::get('/{employer}','show')->name('show');
        Route::delete('/{employer}','destroy')->name('destroy');
   });
   Route::controller(JobSeekerController::class)->prefix('job-seeker')->name('jobSeeker.')->group(function(){
    Route::get('','index')->name('index');
    Route::put('/approval/{jobSeeker}','approval')->name('approval');
    Route::get('/{jobSeeker}','show')->name('show');
    Route::delete('/{jobSeeker}','destroy')->name('destroy');
});

});