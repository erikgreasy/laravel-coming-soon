<?php

use Erikgreasy\LaravelComingSoon\Http\Controller\ComingSoonController;
use Illuminate\Support\Facades\Route;

if (config('coming-soon.enabled')) {
    Route::get(config('coming-soon.route'), ComingSoonController::class)->name('coming-soon');
}
