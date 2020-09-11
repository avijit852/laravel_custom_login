<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;


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

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::view('/ad-login', 'admin.login.adlogin')->name('admin_login');
Route::view('/ad-register','admin.register.adregister')->name('ad_register');

Route::get('/', function () {
    return redirect('/ad-login');
});


Route::group(
    [
    "prefix"        =>  "adminfd",
    "namespace"     =>  "Admin",
    "as"            =>  "admin_",
    'middleware'    =>  'auth',
    ],

    function () {
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    }
);






