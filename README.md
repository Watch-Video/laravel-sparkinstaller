# Spark Installer for Laravel
This is very much a pre-release version. As long as Laravel Spark is not stable, neither is this package. Please test 
 on a new branch of your Laravel app, so in case it doesn't work as expected you won't loose anything. If it does work,
 just PR the branch into your release branch for your app once you are satisfied.
 
## Goal
Ability to quickly add Spark to your existing Laravel 5.1 projects.

## Installation
1. `composer require genealabs/laravel-sparkinstaller --dev`
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
