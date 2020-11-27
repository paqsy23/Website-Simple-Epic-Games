<?php

use App\Http\Controllers\GameController;
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

Route::get('login', 'LoginRegisterController@showLogin');
Route::post('login', 'LoginRegisterController@loginProcess');
Route::get('register', 'LoginRegisterController@showRegister');
Route::post('register', 'LoginRegisterController@registerProcess');
Route::get('logout', 'LoginRegisterController@logout');

Route::group(['prefix' => 'account'], function () {
    Route::get('/', 'UserController@dashboard');
    Route::get('orders', 'UserController@order');
    Route::get('address', 'UserController@addresses');
    Route::get('detail', 'UserController@accountDetails');
    Route::post('edit', 'UserController@editDetails');
    Route::post('edit-password', 'UserController@editPassword');
});

Route::get('/game/{id}','GameController@showGameDetail');
Route::get('/tambahTag','GameController@tambahTag');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.login');
    });
    Route::post('/login','AdminController@login');
    Route::get('/home','AdminController@home');
    Route::get('/developer','AdminController@developer');
    Route::get('/report','AdminController@report');
    Route::get('/logout','AdminController@logout');
    Route::get('/developer/{id}','AdminController@developerDetail');
});

Route::group(['prefix' => 'developer'], function () {
    Route::get('/',function(){
        return view('developer.login');
    });
    Route::post('/login','DeveloperController@login');
    Route::get('/register',function(){
        return view('developer.register');
    });
    Route::get('/home','DeveloperController@home');
    Route::get('/gamelist','DeveloperController@gameList');
    Route::get('/newGame','DeveloperController@newGame');
    Route::post('/insertGame','DeveloperController@insertGame');
    Route::get('/logout','DeveloperController@logout');
});
