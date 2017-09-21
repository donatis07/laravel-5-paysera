# Laravel 5 Paysera WebToPay
Package that helps to use Paysera API in Laravel application.

## Installation
First require package with composer:
```sh
$ composer require Tsulavi/laravel-5-paysera
```
Then add service provider to config/app.php:
```php
'providers' => [
    ...
    Tsulavi\Paysera\PayseraServiceProvider::class,
],
```
Facade to aliases:
```php
'aliases' => [
    ...
    'Paysera' => Tsulavi\Paysera\Facades\Paysera::class,
],
```
Add route
```php
Route::get('payment-callback', ['as' => 'paysera.callback', 'uses' => 'OrderController@callback']);
```
And last is to publish config and views:
```sh
$ php artisan vendor:publish --provider="Tsulavi\Paysera\ServiceProvider"
```

## Set configuration
Description comming soon...

## Usage

```php
use Tsulavi\Paysera\Facades\Paysera;
```

### Get payment methods
```php
Paysera::getPaymentMethods($locale = null);
```
Parameter for this method is optional. `$locale` have to be string of locale key.
By default `$locale` will be set by application locale (`App::getLocale()`). Result of this method will be 
 array with payment methods and information about them.
 ### Make payment method
```php
Paysera::makePayment($order_id, $amount, $options = []);
```
