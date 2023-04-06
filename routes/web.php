<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::controller(HomepageController::class)->group(function(){
    Route::get('/', 'index')->name('homepage');
});