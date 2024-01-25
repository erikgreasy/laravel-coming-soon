<?php

namespace Erikgreasy\LaravelComingSoon;

use Erikgreasy\LaravelComingSoon\Commands\LaravelComingSoonCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelComingSoonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-coming-soon')
            ->hasConfigFile()
            ->hasRoute('web')
            ->hasViews();
    }
}
