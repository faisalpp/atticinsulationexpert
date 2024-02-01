<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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
    return view('index');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/quote', function () {
    return view('quote');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/blog/1', function () {
    return view('blog1');
});
Route::get('/blog/2', function () {
    return view('blog2');
});
Route::get('/about', function () {
    return view('about');
});
Route::post('/send-msg',[MailController::class,'SubmitMsg']);
Route::post('/send-quote',[MailController::class,'SubmitQuote']);

