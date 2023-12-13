<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function () {
   Route::get('list', [NewsController::class, 'index'])->name('list');
   Route::get('{slug}', [NewsController::class, 'show'])->name('show');
});