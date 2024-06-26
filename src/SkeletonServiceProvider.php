<?php

namespace JoeSzeto\SkeletonLoading;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('skeleton-loading')
            ->hasViewComponent('', SkeletonLoading::class)
            ->hasViews();
    }
}
