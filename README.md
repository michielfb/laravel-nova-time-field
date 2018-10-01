# Laravel Nova Time Field

This package adds a basic HTML5 time field to Laravel Nova.


## Installation
Use composer to install the package.

```shell
composer require michielfb/laravel-nova-time-field
```


## Usage
The display format of the `Time` field can be customized using the `format` method.
The format must be a format supported by `Moment.js`.


```php 
<?php 
use Michielfb\Time;


Time::make('Time')->format('HH:mm');

```
