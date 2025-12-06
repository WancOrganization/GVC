<?php

use App\Http\Controllers\MailController;
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
    return view('home');
});

Route::get('/butterfly-valve', function () {
    return view('products.butterfly-valve');
});

Route::get('/ball-valve', function () {
    return view('products.ball-valve');
});

Route::get('/gate-globe-check-valve', function () {
    return view('products.gate-globe-check-valve');
});

Route::get('/plug-valve', function () {
    return view('products.plug-valve');
});

Route::get('/stack-double-parking', function () {
    return view('products.stack-double-parking');
});

Route::get('/puzzle-parking', function () {
    return view('products.puzzle-parking');
});

Route::get('/tower-parking', function () {
    return view('products.tower-parking');
});

Route::get('/customized-solutions', function () {
    return view('products.customized-solutions');
});
Route::get('/cart-parking', function () {
    return view('products.cart-parking');
});
Route::get('/car-lifts', function () {
    return view('products.car-lifts');
});
Route::get('/circulatory-parking', function () {
    return view('products.circulatory-parking');
});
Route::get('/rotary-parking', function () {
    return view('products.rotary-parking');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/bike-parking', function () {
    return view('products.bike-parking');
});

Route::get('/three-stack-parking', function () {
    return view('products.three-stack-parking');
});



Route::get('/industries-served', function () {
    return view('industries-served');
});


Route::get('/facilities', function () {
    return view('facilities');
});

// Mail
Route::post('/sendmail',[MailController::class, 'sendMail']);
