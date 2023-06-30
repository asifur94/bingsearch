<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\WithdrawController;
use App\Http\Controllers\Admin\FAQController;


use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;



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



Route::get('/', [WelcomeController::class, 'index'])->name('/');
Route::get('/news/{keyword_string}', [WelcomeController::class, 'news'])->name('news');
Route::get('/all/{keyword_string}', [WelcomeController::class, 'all'])->name('all');
Route::get('/image/{keyword_string}', [WelcomeController::class, 'image'])->name('image');
Route::get('/maps/{keyword_string}', [WelcomeController::class, 'maps'])->name('maps');

Route::get('/search', [WelcomeController::class, 'search'])->name('search');
Route::get('/result', [WelcomeController::class, 'result'])->name('result');


Route::get('/chat_form', [WelcomeController::class, 'chat_form'])->name('chat_form');
Route::post('/chat', [WelcomeController::class, 'chat'])->name('/chat');





Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/registration', [AuthenticationController::class, 'registration'])->name('registration');
Route::post('/submit_registration', [AuthenticationController::class, 'submit_registration'])->name('submit_registration');
Route::post('/submit_login', [AuthenticationController::class, 'submit_login'])->name('submit_login');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');


Route::get('/post-like/{id}', [AuthenticationController::class, 'post_like'])->name('post-like');
Route::get('/post-dislike/{id}', [AuthenticationController::class, 'post_dislike'])->name('post-dislike');


Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');




Route::prefix('admin')->group(function (){
    Route::get('/login', [AdminController::class, 'login']);
    Route::get('/dashboard', [AdminController::class, 'home'])->name('dashboard');
    Route::post('/login', [AdminController::class, 'admin_login'])->name('admin-login');
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin-logout');
    Route::get('/forget-password', 'AdminController@forget_password')->name('forget-password');
    Route::group(['middleware' => ['AdminUserMiddleWare']], function () {
        Route::get('/dashboard', [AdminController::class, 'home'])->name('dashboard');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/profile', [AdminController::class, 'save_profile'])->name('save-profile');
        Route::get('/change-password', [AdminController::class, 'change_password'])->name('change-password');
        Route::post('/save-password', [AdminController::class, 'save_password'])->name('save-password');




        //website setting
        Route::get('/site-setting', [SettingController::class, 'setting'])->name('site-setting');
        Route::post('/save-logo', [SettingController::class, 'save_logo'])->name('save-logo');
        Route::post('/save-favicon', [SettingController::class, 'save_favicon'])->name('save-favicon');
        Route::post('/save-site-info', [SettingController::class, 'save_site_info'])->name('save-site-info');



        //faq
        Route::resource('faq', FAQController::class);


        //user
        Route::resource('user',  App\Http\Controllers\Admin\UserController::class);



        //country
        Route::resource('country', CountryController::class);
        Route::get('/country/active/{id}', [CountryController::class, 'active'])->name('active-country');
        Route::get('/country/inactive/{id}', [CountryController::class, 'inactive'])->name('inactive-country');


    });
});