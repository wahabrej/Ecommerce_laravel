<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get("/",[HomeController::class,"index"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("/redirect",[HomeController::class,"redirect"]);

Route::get("/view_category",[AdminController::class,'view_category']);

Route::post("/add_category",[AdminController::class,'add_category']);
Route::get("/delete_category/{id}",[AdminController::class,'delete_category']);

Route::get("/view_product",[AdminController::class,'view_product']);
Route::post("/add_product",[AdminController::class,'add_product']);
Route::get("/show_product",[AdminController::class,'show_product']);
Route::get("/product_delete/{id}",[AdminController::class,"product_delete"]);
Route::get("/product_update/{id}",[AdminController::class,'product_update']);
Route::post("/updated/{id}",[AdminController::class,'updated']);

Route::get("/product_detail/{id}",[HomeController::class,'product_detail']);

Route::post("/add_cart/{id}",[HomeController::class,'add_cart']);

Route::get("/show_cart",[HomeController::class,'show_cart']);
Route::get("/remove_cart/{id}",[HomeController::class,'remove_cart']);

Route::get("/cash_order",[HomeController::class,'cash_order']);

Route::get("/stripe/{totalprice}",[HomeController::class,'stripe']);


Route::post('/stripe/{totalprice}',[HomeController::class,'stripePost'] )->name('stripe.post');
 Route::get("/order_show",[AdminController::class,'order_show']);