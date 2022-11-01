<?php

namespace Jensramakers\LaravelAsyncRoute\app\Classes;

class RouteAsyncClassForBlade
{
    public function build(string $route): string
    {
        return route('admin.deletion.async.modal', ['route' => urlencode(str_replace('/', '\\', $route))]);
    }
}
