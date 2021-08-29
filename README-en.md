- [![Starts](https://img.shields.io/github/stars/laravelir/laravel-dicom?style=flat&logo=github)](https://github.com/laravelir/laravel-dicom/forks)
- [![Forks](https://img.shields.io/github/forks/laravelir/laravel-dicom?style=flat&logo=github)](https://github.com/laravelir/laravel-dicom/stargazers)

- [فارسی](README.md)

# laravel Package

A package for fun

### Installation

1. Run the command below to add this package:

```
composer require laravelir/laravel-dicom
```

2. Open your config/app.php and add the following to the providers array:

```php
Laravelir\Dicom\Providers\DicomServiceProvider::class,
```

3. Run the command below to publish the package config file config/dicom.php:

```
php artisan vendor:publish
```
