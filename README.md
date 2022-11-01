php artisan vendor:publish --provider="Jensramakers\LaravelAsyncRoute\LaravelAsyncRouteServiceProvider"

install tailwind elements for modal functionality

install "npm i jquery" and include it in your js "window.$ = window.jQuery = require('jquery');"

add this to web.php with needed middleware

Route::get('/admin/modal/deletion/{route}', function ($route) {
    return view('vendor.jensramakers.modal_delete', ['route' => str_replace('\\', '/', $route)])->render();
})->name('admin.deletion.async.modal');
