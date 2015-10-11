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
4. If you didn't choose to let the upgrade process run the migrations, make any necessary changes, then run the migrations manually.: `php artisan migrate`.

### Publishing Views
Before publishing Spark views for customization, be sure to backup your `/resources/views/home.blade.php` file first, as it will get overwritten.
Then you can publish the views as follows:
```sh
php artisan vendor:publish --tag=spark-full
```

## Uninstallation
Coming soon!

## Documentation
Coming soon!
