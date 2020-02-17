Laravel Agent Detector
=====

[![Latest Stable Version](http://img.shields.io/packagist/v/karmendra/laravel-agent-detector.svg)](https://packagist.org/packages/karmendra/laravel-agent-detector) [![Total Downloads](http://img.shields.io/packagist/dm/karmendra/laravel-agent-detector.svg)](https://packagist.org/packages/karmendra/laravel-agent-detector)

A PHP desktop/mobile user agent parser for Laravel, based on [Device Detector](https://github.com/matomo-org/device-detector) that will parse any User Agent and detect the browser, operating system, device used (desktop, tablet, mobile, tv, cars, console, etc.), brand and model. 

Goto http://devicedetector.net for a quick demo of what this library can detect.

Installation
------------

Install using composer:

```bash
composer require karmendra/laravel-agent-detector
```

Laravel (optional)
------------------

Add the service provider in `config/app.php`:

```php
Karmendra\LaravelAgentDetector\AgentDetectorServiceProvider::class,
```

And add the AgentDetector alias to `config/app.php`:

```php
'AgentDetector' => Karmendra\LaravelAgentDetector\Facades\AgentDetector::class,
```

Basic Usage
-----------

Start by creating an `AgentDetector` instance (or use the `AgentDetector` Facade):

```php
use Karmendra\LaravelAgentDetector\AgentDetector;

$dd = new AgentDetector();
```

All of the original [Device Detector](https://github.com/matomo-org/device-detector)  methods are still available


Additional Functionality
------------------------

### Device type

Get the device type. (`smartphone`, `mobile`, `tablet`, `desktop`, `bot` ...)

```php
$type = $ad->device();
```

### Device brand name

Get the device manufactures brand name, if mobile. (`Apple`, `Nexus`, `Samsung`, ...)

```php
$brand = $ad->deviceBrand();
```

### Device model

Get the device model, if mobile. (Apple: `iPhone`, Samsung: `Galaxy S9` ...)

```php
$model = $ad->deviceModel();
```

### Platform / Operating system name

Get the operating system. (`Ubuntu`, `Android`, `Windows`, `Mac`, `iOS`, ...)

```php
$platform = $ad->platform();
```

### Platform version (OS version).

Get the platform version. (Windows: `10`, Mac: `10.11`, Android: `9.0`, ...)

```php
$platform_version = $ad->platformVersion();
```

### Browser name

Get the browser name. (`Chrome`, `IE`, `Safari`, `UC Browser`, ...)

```php
$browser = $ad->browser();
```

### Browser version

Get the browser name. (Chrome: `56`, Safari: `9.0`, Firefox: `48`, ...)

```php
$browser_version = $ad->browserVersion();
```

### Robot detection

Check if the user is a robot. (`true` or `false`)

```php
$ad->isBot();
```

To-do (PR welcome):
------
- Adding test cases
- Adding additional functions for getting robot info, enable disable robot detection etc.

License
-------

Laravel Agent Detector is licensed under [The MIT License (MIT)](LICENSE).