# Spark Installer for Laravel
## Installation
1. `composer require genealabs/laravel-sparkinstaller`
2. Add the service providers:
  ```php
          Laravel\Spark\Providers\SparkServiceProvider::class,
          GeneaLabs\LaravelSparkInstaller\Providers\LaravelSparkInstallerServiceProvider::class,
  ```
3. **DO NOT RUN `php artisan spark:install`**, as that is meant for new installations only. Instead, run `php artisan spark:upgrade`.
4. Run the migrations: `php artisan migrate`.

## Uninstallation
Coming soon!

## Documentation
Coming soon!
