 
### Laravel simple Menu from data source

This package is customized for bootstrap 4. *. If you want to change the layout for other css libraries then you need to publish resources (see 'Publish resources' section ).

### Install
composer require begicf/simple-menu

### Register Service Provider
Go in 'config/app.php' file.

Find array **providers** and add this element to register provider:
```
\SimpleMenu\SimpleMenuServiceProvider::class
```

### Migrate 
php artisan migrate

### How to use

Put in view blade template 
```
<x-menu-menu-component />
```
### Example  
 ``` html
<ul class="navbar-nav mr-auto">
  <x-menu-menu-component />
</ul>
 ```
### Publish resources 
```
php artisan vendor:publish --provider="SimpleMenu\SimpleMenuServiceProvider"

 ```
