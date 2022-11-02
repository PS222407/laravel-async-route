## Installation

install composer package
```bash
composer require jensramakers/laravel-async-route
```
publish views
```bash
php artisan vendor:publish --provider="Jensramakers\LaravelAsyncRoute\LaravelAsyncRouteServiceProvider"
```
install jquery
```bash
npm i jquery
```
and include it in your javascript file
```js
window.$ = window.jQuery = require('jquery');
```
add this to web.php with needed middleware
```php
Route::get('/admin/modal/deletion/{route}', function ($route) { 
  return view('vendor.jensramakers.modal_delete', ['route' => str_replace('\', '/', $route)])->render();
})->name('admin.deletion.async.modal');
```
install tailwind elements for modal functionality https://tailwind-elements.com/quick-start/
