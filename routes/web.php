<?php

use Erikgreasy\LaravelComingSoon\Http\Controller\ComingSoonController;
use Illuminate\Support\Facades\Route;

if (config('coming-soon.enabled')) {
    Route::get('coming-soon', ComingSoonController::class)->name('coming-soon');
}
