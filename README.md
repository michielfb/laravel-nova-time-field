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
use Michielfb\Time\Time;

Time::make('Time')->format('HH:mm');
```

### Steps

The [step attribute](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/time#Using_the_step_attribute)
can be configured by using the `withSteps` method.

```php 
<?php 
use Michielfb\Time\Time;

Time::make('Time')->withSteps(1);
```

The `withSeconds` method sets a step of 1 which allows users to enter seconds.

```php 
<?php 
use Michielfb\Time\Time;

Time::make('Time')->withSeconds();
```