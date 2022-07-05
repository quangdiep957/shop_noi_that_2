<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/businesss',App\Http\Controllers\BusinesssController::class);
Route::resource('/feadbacks',App\Http\Controllers\FeadbacksController::class);
Route::resource('/advertisments',App\Http\Controllers\AdvertismentsController::class);
Route::resource('/partners',App\Http\Controllers\PartnersController::class);
Route::resource('/blog',App\Http\Controllers\BlogController::class);
Route::resource('/products',App\Http\Controllers\ProductsController::class);
Route::resource('/styles',App\Http\Controllers\StylesController::class);
Route::resource('/categories',App\Http\Controllers\CategoriesController::class);
Route::resource('/comments',App\Http\Controllers\CommentsController::class);
Route::resource('/cart',App\Http\Controllers\OrdersController::class);
Route::resource('/checkout',App\Http\Controllers\Order_detailsController::class);
Route::resource('/customers',App\Http\Controllers\CustomersController::class);
Route::resource('/client/home',App\Http\Controllers\Home_Controller::class);
Route::resource('client/product',App\Http\Controllers\Product1Controller::class);
Route::post('/client/login','App\Http\Controllers\CustomersController@Login');
Route::post('/client/register','App\Http\Controllers\CustomersController@Register');
Route::post('/client/checkout','App\Http\Controllers\OrdersController@createCart');
Route::get('/client/detail/{id}','App\Http\Controllers\Product1Controller@show');
Route::get('client/Add_Cart/{id}','App\Http\Controllers\OrdersController@AddToCart');
Route::get('/client/Delete_Cart/{id}','App\Http\Controllers\OrdersController@remove');
Route::get('/remove/{id}','App\Http\Controllers\CustomersController@remove');
Route::post('/client/products/{name}','App\Http\Controllers\Product1Controller@search');
Route::get('/client/blog','App\Http\Controllers\BlogController@clientBlog');
Route::get('/client/contact','App\Http\Controllers\BlogController@contact');
Route::get('sendmail','App\Http\Controllers\OrdersController@sendEmail');
Route::get('/confirm/{id}/{status}','App\Http\Controllers\OrdersController@confirm');
Route::get('/Access','App\Http\Controllers\HomeController@Access');
/*Route::resource('/customers',App\Http\Controllers\CustomersController::class);
Route::resource('/customers',App\Http\Controllers\CustomersController::class);
Route::resource('/customers',App\Http\Controllers\CustomersController::class);
Route::resource('/customers',App\Http\Controllers\CustomersController::class);*/






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
