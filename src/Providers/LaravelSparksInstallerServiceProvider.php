<?php namespace GeneaLabs\LaravelSparksInstaller\Providers;

use GeneaLabs\LaravelSparksInstaller\Console\Commands\SparkDowngrade;
use GeneaLabs\LaravelSparksInstaller\Console\Commands\SparkUpgrade;
use Illuminate\Support\ServiceProvider;

class LaravelSparksInstallerServiceProvider extends ServiceProvider
{
    protected $commands = [
        SparkUpgrade::class,
        SparkDowngrade::class,
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
