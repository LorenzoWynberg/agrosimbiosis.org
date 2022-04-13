<?php

if (!function_exists('translateCurrentRouteName')) {
    function translateCurrentRouteName($lang)
    {
        $routeName = 'routes.name.' . Str::After(Route::currentRouteName(), '.');
        return Lang::get($routeName, [], $lang);
    }
}