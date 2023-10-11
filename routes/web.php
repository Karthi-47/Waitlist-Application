<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserAuth;

Route::GET('/index', [IndexController :: class,"index"]);
Route::POST('/register', [IndexController :: class,"register"]);
Route::POST('/orders', [IndexController :: class,"orders"]);
Route::POST('/contact', [IndexController :: class,"contact"]);
Route::POST('/subscribe', [IndexController :: class,"subscribe"]);
Route::GET('/waitlist', [IndexController :: class,"waitlist"]);
Route::GET('/admin', [IndexController :: class,"admin"]);
Route::GET('details/{id}/edit', [IndexController :: class,"edit"]); 
Route::PUT('details/{id}/update', [IndexController :: class,"update"]);
Route::GET('details/{id}/delete', [IndexController :: class,"delete"]);




Route::view("/orders","orders");

Route::GET('/thank', function () {
    return view('thank');
});

