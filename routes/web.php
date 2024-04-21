<?php

use App\Http\Controllers\UIController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(UIController::class)->group(function(){
    Route::get('/','home')->name('/');
    Route::get('/home','home')->name('home');
    Route::get('about','about')->name('about');
    Route::get('contact','contact')->name('contact');
    Route::get('mentor-profile','mentorProfile')->name('mentor-profile');
    Route::get('termsofservice','termsofservice')->name('termsofservice');
    Route::get('privacyandpolicy','privacyandpolicy')->name('privacyandpolicy');
    Route::get('faq','faq')->name('faq');
    Route::get('marketing','marketing')->name('marketing');
    Route::get('support','support')->name('support');
});