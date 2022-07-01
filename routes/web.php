<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptchaController;

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



Route::get('/',[CaptchaController::class,'create'])->name('captcha');
Route::post('captcha',[CaptchaController::class,'captchaValidate']);
Route::get('refreshcaptcha',[CaptchaController::class,'refreshCaptcha']);