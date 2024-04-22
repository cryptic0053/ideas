<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/terms',function(){
    return view('terms');
});

Route::get('/', [DashboardController::class,'index']);

Route::get('/profile', [ProfileController::class,'index']);



//dashboard
//profile
//views
