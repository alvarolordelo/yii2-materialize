[![license](https://img.shields.io/badge/LICENCE-BSD--3--Clause-blue.svg)](https://packagist.org/packages/alvarolordelo/yii2-materializecss)
[![Github Release](https://img.shields.io/github/release/alvarolordelo/yii2-materializecss.svg)](https://packagist.org/packages/alvarolordelo/yii2-materializecss)
[![Packagist](https://img.shields.io/packagist/dt/alvarolordelo/yii2-materializecss.svg)](https://packagist.org/packages/alvarolordelo/yii2-materializecss)

# Materialize for Yii2

----

This is the current, actively developed branch which is implementing Materialize version 1.0 and thus breaking backwards compatibility.

----

This package integrates the Materialize CSS framework into [Yii2](http://www.yiiframework.com/).
[Materialize](http://materializecss.com/) is a modern responsive front-end framework based on Material Design.

See [official documentation](http://alvarolordelo.github.io/yii2-materializecss/) for detailed information.

Have a look at the [official demo page](https://yii2-materializecss.pluspunkt-coding.de) to see the repo in action (needs adaption to v3)

Current Materialize version implemented: 1.0.0.

## Installation

The preferred way of installation is through Composer.
If you don't have Composer you can get it here: https://getcomposer.org/

You also should install the Composer Asset Plugin to handle NPM and Bower assets:
```
$ composer global require "fxp/composer-asset-plugin:~1.4"
```

Or you can make use of Asset Packagist: <https://asset-packagist.org/>

To install the package add the following to the ```require``` section of your composer.json:
```
"require": {
    "alvarolordelo/yii2-materializecss": "~3.0.0"
},
```

## Usage

To load the Materialize CSS files integrate the MaterializeAsset into your app.
Two ways to achieve this is to register the asset in the main layout:

```php
// @app/views/layouts/main.php

\alvarolordelo\yii2materializecss\assets\MaterializeAsset::register($this);
// further code
```

or as a dependency in your app wide AppAsset.php

```php
// @app/assets/AppAsset.php

public $depends = [
    'alvarolordelo\yii2materializecss\assets\MaterializeAsset',
    // more dependencies
];
```

## Widgets

The following widgets are currently available:

* ActiveField
* ActiveForm
* Alert
* Breadcrumbs
* Button
* Carousel
* ChipInput
* Collapsible
* DatePicker
* DetailView
* Dropdown
* FloatingActionButton
* GridView with ActionColumn
* Icon
* LinkPager
* MaterialBox
* Modal
* Nav
* NavBar
* Parallax
* Progress
* RangeInput
* Select
* SideNav
* Slider
* Spinner
* StaticChip
* SubmitButton
* SwitchButton
* TimePicker

## Gii support

If you are creating your CRUD controller and view files using Gii you can get materialized view files by integrating the adapted Gii templates.

```php
// @app/config/main-local.php

$config['modules']['gii'] = [
    'class' => 'yii\gii\Module',      
    'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'],  
    'generators' => [
        'crud' => [
            'class' => 'yii\gii\generators\crud\Generator',
            'templates' => [ // setting materializecss templates
                'materializecss' => '@vendor/alvarolordelo/yii2-materializecss/src/gii-templates/generators/crud/materializecss', 
            ]
        ]
    ],
];
```

You can copy those templates to any location you wish for further customization. Make sure you adapt the path accordingly in your config.

## Known issues

Systems operating on normal parameters :)


## Sample layout

There is a sample layout file included in the package. You can use this file to get inspiration for
your own layout or replace the respective ```views/layouts/main.php``` with the file provided.

You can find the sample layout file in ```src/layout/main.php```.

## Change log

### 0.0.1 - 2019-05-28
* Initial release
