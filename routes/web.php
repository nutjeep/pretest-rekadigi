<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;

Route::controller(HomepageController::class)->group(function(){
    Route::get('/', 'index')->name('homepage');
});

Route::controller(RegistrationController::class)->group(function(){
    Route::get('/registration', 'index')->middleware('guest');
    Route::post('/registration', 'registration');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authentication');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard', 'index');

    Route::post('/dashboard/add/feature', 'storeFeature');
    Route::put('/dashboard/update/feature/{feature:slug}', 'updateFeature');
    Route::delete('/dashboard/delete/{feature:slug}', 'deleteFeature');

    Route::get('/dashboard/category/add', 'addCategory');
    Route::post('/dashboard/category/store', 'storeCategory');
    Route::get('/dashboard/category/edit/{category:slug}', 'editCategory');
    Route::put('/dashboard/category/update/{category:slug}', 'updateCategory');
    Route::delete('/dashboard/category/delete/{category:id}', 'deleteCategory');

    Route::get('/dashboard/carrier/add', 'addCarrier');
    Route::post('/dashboard/carrier/store', 'storeCarrier');
    Route::get('/dashboard/carrier/edit/{carrier:slug}', 'editCarrier');
    Route::put('/dashboard/carrier/update/{carrier:slug}', 'updateCarrier');
    Route::delete('/dashboard/carrier/delete/{carrier:id}', 'deleteCarrier');

    Route::put('/dashboard/link/update/{link:id}', 'updateLink');
});

Route::controller(PageController::class)->group(function(){
    Route::get('/pages', 'index');

    Route::get('/pages/terms/edit/{terms:id}', 'getTerms');
    Route::get('/pages/privacy/edit/{privacy:id}', 'getPrivacy');

    Route::put('/pages/terms/update/{terms:id}', 'updateTerms');
    Route::put('/pages/privacy/update/{privacy:id}', 'updatePrivacy');
});