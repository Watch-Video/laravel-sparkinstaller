<?php namespace GeneaLabsNew\LaravelSparkInstaller\Providers;

use GeneaLabsNew\LaravelSparkInstaller\Console\Commands\SparkDowngrade;
use GeneaLabsNew\LaravelSparkInstaller\Console\Commands\SparkUpgrade;
use Illuminate\Support\ServiceProvider;

class LaravelSparkInstallerServiceProvider extends ServiceProvider
{
    protected $commands = [
        SparkUpgrade::class,
//        SparkDowngrade::class,
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
