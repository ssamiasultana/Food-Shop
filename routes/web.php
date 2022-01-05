<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/add_menu', function () {   
//     return view('add_menu');
// });
Route::get('/order-details', function () {
    return view('order-details');    
});
Route::get('/user', function () {   
    return view('user');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin-view', 'HomeController@adminView')->name('admin-view');
   
});

Route::resource('/menu',MenuController::class);
Route::resource('/checkout',CheckoutController::class);

Route::get('/menu','MenuController@index')->middleware('auth');
Route::post('add-to-cart', '\App\Http\Controllers\MenuController@addToCart');
Route::get('/cart', '\App\Http\Controllers\MenuController@viewCart');
Route::get('/checkout', 'CheckoutController@index');
Route::get('/order-details', '\App\Http\Controllers\CheckoutController@orderDetails');
Route::get('/remove-item/{rowId}', 'MenuController@removeItem');
Route::get('/add_menu','\App\Http\Controllers\MenuController@addmenu');
// Route::get('/user-details',' RegisterController@showUser');