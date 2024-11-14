<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashblard;
use App\Http\Controllers\shopping;


Route::get('/dashboard',[Dashblard::class,'index'])->middleware('auth');
Route::get('/products',[Dashblard::class,'products'])->name('products')->middleware('auth');
Route::get('/create_newproducts',[Dashblard::class,'create_newproducts'])->name('create_newproducts')->middleware('auth');
Route::get('/shoproductdata',[Dashblard::class,'shoproductdata'])->name('shoproductdata')->middleware('auth');
Route::get('/delete',[Dashblard::class,'delete'])->name('delete')->middleware('auth');
Route::get('/edit/{id}',[Dashblard::class,'edit'])->name('edit')->middleware('auth');
Route::get('/update}',[Dashblard::class,'update'])->name('update')->middleware('auth');
Route::get('/showproduct_details}',[Dashblard::class,'showproduct_details'])->name('showdet')->middleware('auth');
Route::post('/creat_new_detail}',[Dashblard::class,'creat_new_detail'])->name('createnewdet')->middleware('auth');
Route::get('/',[shopping::class,'index'])->name('index');
Auth::routes();
Route::get('/electric',[shopping::class,'electric'])->name('electric');
Route::get('/rosese',[shopping::class,'rosese'])->name('rosese');
Route::get('/productdetails/{id}',[shopping::class,'productdetails'])->name('proddet');
Route::get('/add_to_cart',[shopping::class,'add_to_cart'])->name('add_to_cart');
Route::get('/homeapp',[shopping::class,'homeapp'])->name('homeapp');
Route::get('/producthome/{id}',[shopping::class,'producthome'])->name('prodhom');
Route::get('/roseseprod/{id}',[shopping::class,'roseseprod'])->name('roseseprod');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
