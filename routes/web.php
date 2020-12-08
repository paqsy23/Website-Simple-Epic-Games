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

Route::get('search', 'MainController@search');

Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => ['UserWithoutLogin']], function () {
        Route::get('login', 'LoginRegisterController@showLogin');
        Route::post('login', 'LoginRegisterController@loginProcess');
        Route::get('register', 'LoginRegisterController@showRegister');
        Route::post('register', 'LoginRegisterController@registerProcess');
    });

    Route::group(['middleware' => ['UserOnly']], function () {
        Route::get('/', 'UserController@dashboard');
        Route::get('/library', 'UserController@library');
        Route::get('orders', 'UserController@order');
        Route::get('detail', 'UserController@accountDetails');
        Route::post('edit', 'UserController@editDetails');
        Route::post('edit-password', 'UserController@editPassword');
        Route::get('checkout/{id}','UserController@checkout');
        Route::get('done/{id}','UserController@done');
        Route::get('/wallet','UserController@showTopup');
        Route::get('/topup/{value}','UserController@topup');
        Route::get('logout', 'LoginRegisterController@logout');
    });
});

Route::get('/game/{id}','GameController@showGameDetail');
Route::get('/tambahTag','GameController@tambahTag');

// Admin
Route::group(['middleware'=>['AdminOnly'],'prefix' => 'admin'], function () {
    Route::group(['middleware' => ['WithoutLogin']], function () {
        Route::get('/login', function () {
            return view('admin.login');
        })->withoutMiddleware('AdminOnly');
        Route::post('/login','AdminController@login')->withoutMiddleware('AdminOnly');
    });
    Route::get('/home','AdminController@home');
    Route::get('/developer','AdminController@developer');
    Route::get('/report/{bulan}/{tahun}','AdminController@report');
    Route::post('/report','AdminController@report');
    Route::get('/logout','AdminController@logout');
    Route::get('/developer/{id}','AdminController@developerDetail');
    Route::get('/reactivate/game/{id}','AdminController@reactivateGame');
    Route::get('/ban/game/{id}','AdminController@banGame');
    Route::get('/confirm/developer/{id}','AdminController@confirmDeveloper');
    Route::get('/reject/developer/{id}','AdminController@rejectDeveloper');
});

// Developer
Route::group(['middleware'=>['DeveloperOnly'],'prefix' => 'developer'], function () {
    Route::group(['middleware' => ['WithoutLogin']], function () {
        Route::get('/login',function(){
            return view('developer.login');
        })->withoutMiddleware('DeveloperOnly');
        Route::post('/login','DeveloperController@login')->withoutMiddleware('DeveloperOnly');
        Route::get('/register',function(){
            return view('developer.register');
        })->withoutMiddleware('DeveloperOnly');
        Route::get('/forgetpassword',function(){
            return view('developer.forgotpassword');
        })->withoutMiddleware('DeveloperOnly');
    });
    Route::group(['middleware' => ['DeveloperActiveOnly']], function () {
        Route::get('/newGame','DeveloperController@newGame');
        Route::get('/report/{bulan}/{tahun}','DeveloperController@report');
        Route::post('/report','DeveloperController@report');
        Route::get('/reactivate/{id}','DeveloperController@reactivate');
        Route::get('/deactivate/{id}','DeveloperController@deactivate');
        Route::post('/insertGame','DeveloperController@insertGame');
        Route::get('/editGame/{id}','DeveloperController@showEditGame');
        Route::post('/editGame','DeveloperController@editGame');
    });
    Route::post('/resetPasswordToken','DeveloperController@prosesResetPasswordToken')->withoutMiddleware('DeveloperOnly');
    Route::post('/forgetpassword','DeveloperController@resetPassword')->withoutMiddleware('DeveloperOnly');
    Route::get('/editprofile/{id}','DeveloperController@showEditprofile');
    Route::post('/editprofile','DeveloperController@editProfile');
    Route::post('/register','DeveloperController@Register')->withoutMiddleware('DeveloperOnly');
    Route::get('/home','DeveloperController@home');
    Route::get('/gamelist','DeveloperController@gameList');
    Route::get('/logout','DeveloperController@logout');
});

Route::get('/resetpassword/{token}','DeveloperController@resetPasswordToken')->middleware('WithoutLogin');

Route::get('/', 'MainController@showHome');
Route::get('{id}', 'MainController@showHome');
