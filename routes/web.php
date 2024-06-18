<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'backend','as'=>'backend.'],function()
{
    Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
});
