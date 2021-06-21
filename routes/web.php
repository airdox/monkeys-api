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

Route::get('/user/list', 'Web\UserController@list')->middleware('auth');
Route::get('/question/list', 'Web\QuestionController@list')->middleware('auth');
Route::get('/user/add', function () {
    return view('user/add');
})->middleware('auth');
Route::get('/question/add', function () {
    return view('question/add');
})->middleware('auth');
Route::post('/user/add', 'Web\UserController@add')->name('postUser')->middleware('auth');
Route::post('/question/add', 'Web\QuestionController@add')->name('postQuestion')->middleware('auth');

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
