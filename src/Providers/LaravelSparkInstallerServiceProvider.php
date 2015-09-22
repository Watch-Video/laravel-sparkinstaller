<?php namespace GeneaLabs\LaravelSparkInstaller\Providers;

use GeneaLabs\LaravelSparkInstaller\Console\Commands\SparkDowngrade;
use GeneaLabs\LaravelSparkInstaller\Console\Commands\SparkUpgrade;
use Illuminate\Support\ServiceProvider;

class LaravelSparkInstallerServiceProvider extends ServiceProvider
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
        if (! defined('SPARK_PATH')) {
            define('SPARK_PATH', base_path('vendor/laravel/spark/'));
        }

        if (! class_exists('Spark')) {
            class_alias('Laravel\Spark\Spark', 'Spark');
        }

        $this->commands($this->commands);
    }
}
