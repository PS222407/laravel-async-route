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

asyncDeletionModal = function (url) {
    let el = $("[data-async-container='deletionModal']")[0];
    el.innerHTML = '';
    $.get(url, function (data) {
        el.innerHTML = data;
    });
}
```
add this to web.php with needed middleware
```php
Route::get('/admin/modal/deletion/{route}', function ($route) { 
  return view('vendor.jensramakers.modal_delete', ['route' => str_replace('\\', '/', $route)])->render();
})->name('admin.deletion.async.modal');
```
install tailwind elements for modal functionality https://tailwind-elements.com/quick-start/

install fontawesome
```bash
npm install --save @fortawesome/fontawesome-free
```
and add this line in your scss file
```scss
@import '~@fortawesome/fontawesome-free/css/all';
```
