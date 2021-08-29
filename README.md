- [![Starts](https://img.shields.io/github/stars/laravelir/laravel-dicom?style=flat&logo=github)](https://github.com/laravelir/laravel-dicom/forks)
- [![Forks](https://img.shields.io/github/forks/laravelir/laravel-dicom?style=flat&logo=github)](https://github.com/laravelir/laravel-dicom/stargazers)

- [English](README-en.md)

# پکیج لاراولی

یه پکیج خفن

### نصب

1.  برای نصب در مسیر روت پروژه خود دستور زیر را در ریشه پروژه اجرا کنید

```
composer require laravelir/laravel-dicom
```

2. Open your config/dicom.php and add the following to the providers array:

```php
Laravelir\Dicom\Providers\DicomServiceProvider::class,
```

3. Run the command below to publish the package config file config/dicom.php:

```
php artisan vendor:publish
```
