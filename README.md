# Laravel Nova Time Field

This package adds a basic HTML5 time field to Laravel Nova.

## Requirements

This package require laravel/nova:~4.0.

## Installation
Use composer to install the package.

```shell
composer require michielfb/laravel-nova-time-field
```

## Usage

The example below shows how to create a Time field where users can enter hours, minutes, and
seconds. The time is show in the "h:i A" format (For example 11:15 PM). When no value is
entered the value "n/a" is shown.

```php
use Michielfb\Time\Time;

Time::make('Time')
    ->withSeconds()
    ->format('h:i A', 'n/a');
```

For documentation on how to add fields to a resource see the 
[Laravel Nova documentation](https://nova.laravel.com/docs/4.0/resources/fields.html).

### Format

Use the `format` method to customize how to date is shown to users. The format must be a 
[PHP date format](https://www.php.net/manual/en/datetime.format.php).

A default value can be passed to the `format` method. This determines the value shown to users if there is no
value entered.

```php
use Michielfb\Time\Time;

Time::make('Time')
    ->format('h:i A', '-');
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

The `withMilliseconds` method sets a step of 0.001 which allows users to enter milliseconds.

```php
<?php 
use Michielfb\Time\Time;

Time::make('Time')->withMilliseconds();
```
