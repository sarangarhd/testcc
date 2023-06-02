<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin',['middleware'=>'isadmin', function () {
    return view('admin');
}]);
Route::get('/user',['middleware'=>'isuser', function () {
    return view('user');
}]);
Route::get('/appoinment', function () {
    return view('appoinment');
});

Route::get('/frontpage', function () {
    return view('frontpage');
});


/*Route::get('/viewusers', function () {
    return view('viewusers');
});*/

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/viewusers', [App\Http\Controllers\HomeController::class, 'viewusers']);

Route::post('/sendappoinment', [App\Http\Controllers\HomeController::class, 'sendappoinment']);
//route for delete user
Route::get('/deleteEmp/{id}',[\App\Http\Controllers\HomeController::class,'deleteEmp']);
//route for view patient
Route::get('/viewappoinment', [App\Http\Controllers\HomeController::class, 'viewappoinment']);
//route for edit ststus of appoinment
Route::get('/confirm/{id}',[\App\Http\Controllers\HomeController::class,'confirm']);
//delete patient
Route::get('/deletepatient/{id}',[\App\Http\Controllers\HomeController::class,'deletepatient']);


