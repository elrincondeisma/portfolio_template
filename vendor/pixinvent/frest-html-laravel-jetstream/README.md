# frest-html-laravel-jetstream

[![Latest Stable Version](https://poser.pugx.org/pixinvent/frest-html-laravel-jetstream/v)](//packagist.org/packages/pixinvent/frest-html-laravel-jetstream)
[![License](https://poser.pugx.org/pixinvent/frest-html-laravel-jetstream/license)](//packagist.org/packages/pixinvent/frest-html-laravel-jetstream)

##### Specially customized Laravel jetstream's scaffolding for [Frest html + laravel admin Template](https://1.envato.market/frest_admin). It'll not work with any other project.
[Download from packagist](https://packagist.org/packages/pixinvent/frest-html-laravel-jetstream)

## Description

Laravel Jetstream is designed using Tailwind CSS and offers your choice of Livewire or Inertia scaffolding. We have removed the Tailwind CSS dependency and modified the Livewire scaffolding as per our template. __Please note we have not provided Inertia scaffolding yet. This package only works with livewire scaffolding__.

Frest Laravel Jetstream is a lightweight laravel package that focuses on the `VIEW` side of [Jetstream](https://github.com/laravel/jetstream) package installed in your Laravel application, so when a swap is performed, the `Action`, `MODEL`, `CONTROLLER`, `Component` and `Action` classes of your project is still 100% handled by Laravel development team with no added layer of complexity.

## Table of Content

* [Installation](#installation)

* [Installing Jetstream](#installing-jetstream)

* [Install Jetstream With Livewire](#install-jetstream-with-livewire)

* [Install Frest Laravel Bootstrap Jetstream](#install-frest-html-laravel-jetstream)

* [Finalizing The Installation](#finalizing-the-installation)

* [Extras](#extras)

* [Pagination](#pagination)
  
* [License](#license)

## Installation

### Installing Jetstream

You may use Composer to install Jetstream into your new Laravel project:

```
composer require laravel/jetstream
```

If you choose to install Jetstream through Composer, you should run the jetstream:install Artisan command. This command accepts the name of the stack you prefer (livewire). You are highly encouraged to read through the entire documentation of Livewire before beginning your Jetstream project. In addition, you may use the __--teams__ switch to enable team support:

#### Install Jetstream With Livewire

```bash
// without teams support

php artisan jetstream:install livewire

or

// with teams support

php artisan jetstream:install livewire --teams
```

### Install Frest Laravel Bootstrap Jetstream

Use Composer to install Frest Jetstream into your new Laravel project as dev dependency:

```
composer require pixinvent/frest-html-laravel-jetstream --dev
```

Regardless how you install Jetstream, Frest Laravel Bootstrap Jetstream commands are very similar to that

of Jetstream as it accepts the name of the stack you would like to swap (livewire).

> It is important you install and configure [Laravel Jetstream](https://github.com/laravel/jetstream) before performing a swap.

You are highly encouraged to read through the entire documentation of [Jetstream](https://jetstream.laravel.com/1.x/introduction.html)

before beginning your Frest Laravel Jetstream project. In addition, you may use the `--teams` switch to swap team assets just like you would in Jetstream:

```bash
// without teams support

php artisan jetstream_frest:swap livewire

or

// with teams support

php artisan jetstream_frest:swap livewire --teams
```

This will publish overrides to enable Bootstrap like the good old days!

### Finalizing The Installation

After installing Frest jetstream and swapping Jetstream resources, remove tailwindCSS and its dependencies if any from your package.json and then install and build your NPM dependencies and migrate your database:

```
npm install && npm run dev

or  

yarn && yarn dev


php artisan migrate
```

### Extras

#### Pagination

It is also important to point out that Laravel still includes pagination views built using Bootstrap CSS. To use these views instead of the default Tailwind views, you may call the paginator's useBootstrap method within your AppServiceProvider:

```php
<?php

namespace  App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class  AppServiceProvider  extends  ServiceProvider{

/**
* Register any application services.
*
* @return  void
*/

public  function  register(){

//
  
}

/**
* Bootstrap any application services.
* @return  void
*/

public  function  boot(){

Paginator::useBootstrap();

}

}
```

## Credits

This packages is built on top of [Jetstream](https://github.com/laravel/jetstream) & [Jetstrap](https://github.com/nascent-africa/jetstrap)

## License

Frest Jetstream is open-sourced software licensed under the [MIT license](https://github.com/pixinvent/frest-html-laravel-jetstream/blob/master/LICENSE).
