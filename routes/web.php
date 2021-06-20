<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/users/list', 'UserController@list')->middleware('auth');
Route::get('/users/add', function () {
    return view('users/add');
})->middleware('auth');
Route::post('/users/add', 'UserController@add')->name('postData')->middleware('auth');

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => false,
    'reset'    => false,   // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->middleware('auth');
