<?php

namespace BubbaOps\MacroCollection;

use BubbaOps\MacroCollection\Commands\MacroCollectionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MacroCollectionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('macro-collection')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_macro-collection_table')
            ->hasCommand(MacroCollectionCommand::class);
    }
}
