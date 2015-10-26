<?php namespace Watch-Video\LaravelSparkInstaller\Providers;

use Watch-Video\LaravelSparkInstaller\Console\Commands\SparkDowngrade;
use Watch-Video\LaravelSparkInstaller\Console\Commands\SparkUpgrade;
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
