<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'cms',
    'as' => 'cms.',
    'middleware' => 'auth'
], function () {
    Route::get('', [\App\Http\Controllers\Cms\HomeController::class, 'index']);

    Route::group([
        'prefix' => \App\Helpers\Constant::SLIDE_HOME,
        'as' => \App\Helpers\Constant::SLIDE_HOME . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\SlideHomeController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\SlideHomeController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\SlideHomeController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'changeShow'])->name('change-show');
    });

    Route::group([
        'prefix' => \App\Helpers\Constant::INSURANCE_PACKAGE,
        'as' => \App\Helpers\Constant::INSURANCE_PACKAGE . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'changeShow'])->name('change-show');
        Route::get('change-show-home-page/{id}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'changeShowHomePage'])->name('change-show-home-page');
    });

    Route::group([
        'prefix' => \App\Helpers\Constant::LIST_GOLFER_WIN_HIO,
        'as' => \App\Helpers\Constant::LIST_GOLFER_WIN_HIO . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'changeShow'])->name('change-show');
        Route::get('change-show-home-page/{id}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'changeShowHomePage'])->name('change-show-home-page');
    });

    Route::group([
        'prefix' => \App\Helpers\Constant::FAQ,
        'as' => \App\Helpers\Constant::FAQ . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\FAQController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\FAQController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\FAQController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\FAQController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\FAQController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\FAQController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\FAQController::class, 'changeShow'])->name('change-show');
        Route::get('change-show-home-page/{id}', [\App\Http\Controllers\Cms\FAQController::class, 'changeShowHomePage'])->name('change-show-home-page');
    });

    Route::group([
        'prefix' => \App\Helpers\Constant::IMPRESSIVE_NUMBER,
        'as' => \App\Helpers\Constant::IMPRESSIVE_NUMBER . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\ImpressiveNumberController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\ImpressiveNumberController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\ImpressiveNumberController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\ImpressiveNumberController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\ImpressiveNumberController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\ImpressiveNumberController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\ImpressiveNumberController::class, 'changeShow'])->name('change-show');
        Route::get('change-show-home-page/{id}', [\App\Http\Controllers\Cms\ImpressiveNumberController::class, 'changeShowHomePage'])->name('change-show-home-page');
    });

    Route::group([
        'prefix' => 'promotion',
        'as' => 'promotion.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\PromotionController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\PromotionController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\PromotionController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\PromotionController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\PromotionController::class, 'update'])->name('update');
        Route::POST('delete/{id}', [\App\Http\Controllers\Cms\PromotionController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\PromotionController::class, 'changeShow'])->name('change-show');
    });

    Route::group([
        'prefix' => 'customer-register',
        'as' => 'customer-register.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\CustomerRegisterController::class, 'index'])->name('index');
        Route::post('/store', [\App\Http\Controllers\Cms\CustomerRegisterController::class, 'store'])->name('store');
        Route::get('{id}/edit', [\App\Http\Controllers\Cms\CustomerRegisterController::class, 'edit'])->name('edit');
    });

    Route::group([
        'prefix' => 'config-info',
        'as' => 'config-info.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\ConfigController::class, 'index'])->name('index');
        Route::post('/store', [\App\Http\Controllers\Cms\ConfigController::class, 'store'])->name('store');
        Route::post('/destroy/{id}', [\App\Http\Controllers\Cms\ConfigController::class, 'destroy'])->name('destroy');
        Route::get('{id}/edit', [\App\Http\Controllers\Cms\ConfigController::class, 'edit'])->name('edit');
    });

    Route::group([
        'prefix' => 'become-agent',
        'as' => 'become-agent.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\BecomeAgentController::class, 'index'])->name('index');
        Route::post('/store', [\App\Http\Controllers\Cms\BecomeAgentController::class, 'store'])->name('store');
        Route::post('/destroy/{id}', [\App\Http\Controllers\Cms\BecomeAgentController::class, 'destroy'])->name('destroy');
        Route::get('{id}/edit', [\App\Http\Controllers\Cms\BecomeAgentController::class, 'edit'])->name('edit');
    });
});
