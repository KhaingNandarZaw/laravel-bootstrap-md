## About
Bootstrap Material Design is a project done by [FezVrasta](http://fezvrasta.github.io/). It is a theme compatible for [bootstrap 3](http://getbootstrap.com/) and it's really a nice theme that everyone can work with [Laravel 5](https://laravel.com/). You can read more about in this [here](http://fezvrasta.github.io/bootstrap-material-design/#getting-started).

## Getting started

### Download the zip

Grab the latest stable [zip archive](https://github.com/FezVrasta/material-design-icons-svg/archive/master.zip) of this project. Then skip all steps and proceed to Post Install.

### Composer
```sh
$ composer create-project laravel/laravel laravel-bootstrap-md "5.2.*" --prefer-dist
```
### Laravel (if you have laravel installed)
```sh
$ laravel new laravel-bootstrap-md
```
### Bower

`cd` into the public folder in your project's root directory
```sh
$ bower install bootstrap-material-design
```

Add the necessary links to your `<head>` element for fonts and stylsheets:
```html
  <!-- Bootstrap Material -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap-material-design/dist/css/material-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap-material-design/dist/css/ripples.min.css') }}">
    <!-- End of Bootstrap Material -->
```
And before your `</body>` element for scripts:

```html
  <!-- Bootstrap Material -->
    <script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap-material-design/dist/js/material.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap-material-design/dist/js/ripples.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap-material-design/dist/js/snackbar.min.js') }}"></script>
    <!-- IMPORTANT -->
        <script>
          $.material.init();
        </script>
    <!-- End of Bootstrap Material -->
```

**Note**: Material Design Theme don't include material icons when you bower install it. But it's already have been setup in this project and you can run it locally. But if your project is tend for online use you can follow this [github](https://github.com/FezVrasta/material-design-icons-svg).

## Post install

`cd` into project root directory and run:

```sh
$ composer install
```

After all dependencies were already installed, don't forget to generate your key:

```sh
$ php artisan key:generate
```

**All Done!**

## Toastr [optional]

I also find it awesome if I include [Toastr](https://packagist.org/packages/oriceon/toastr-5-laravel) in this project.

### Bower

`cd` into public folder of your project and run:

```sh
$ bower install toastr
```
see [toastr.js](https://github.com/CodeSeven/toastr)

And add this necessary links after your `<head>` element:

```html
<!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/toastr/toastr.min.css') }}">
  <script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('bower_components/toastr/toastr.min.js') }}"></script>
  <!-- End of Toastr -->
```

### Installation

1.  Either run `composer require oriceon/toastr-5-laravel` or add `"oriceon/toastr-5-laravel": "dev-master"` to the `require` key in `composer.json` and run `composer update`.
2.  Add `Kamaln7\Toastr\ToastrServiceProvider::class,` to the providers key in `config/app.php`.
3.  Add `'Toastr' => Kamaln7\Toastr\Facades\Toastr::class,` to the `aliases` key in `config/app.php`.

Run:

```sh
$ php artisan vendor:publish
```

### Laravel Authentication [for toastr demo]

`cd` back into your project root directory and run:

```sh
$ php artisan make:auth
```

**Note**: If you run this command it is important for all your neccessary links above to put in `<yourproject>/resources/views/layouts/app.blade.php`.

1. Configure your `.env` file and run `php artisan migrate`. Cloning or downloading this project will not provide with `.env` file, so you must run this command to make your `.env` file:

```sh
$ php -r "copy('.env.example', '.env');"
```

2. Open your project in your favorite editor and go to `<yourproject>/resources/views/auth`, open `login.blade.php` and replace it with [login.blade.php](https://github.com/alexela8882/laravel-bootstrap-md/tree/master/resources/views/auth/login.blade.php)
3. Open `register.blade.php` and replace with [register.blade.php](https://github.com/alexela8882/laravel-bootstrap-md/tree/master/resources/views/auth/register.blade.php)
4. Open `AuthController.php` and put this code in `protected function validator(array $data)`:
```js
  $title = "Oops!";
  $message = "Please make sure to fill all required fields.";
  $options = [
      'progressBar' => true,
      'positionClass' => 'toast-top-right',
      'timeOut' => 6000,
  ];
  Toastr::error($message, $title, $options);
```

Run:

```sh
$ php artisan serve
```

Go to [http://localhost:8000](http://localhost:8000).
Try to register with the invalid authentication and Toastr will appear.

**Congratulations!!!**
