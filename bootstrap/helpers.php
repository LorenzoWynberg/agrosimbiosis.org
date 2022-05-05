<?php

if (!function_exists('translateCurrentRouteName')) {
    function translateCurrentRouteName($lang)
    {
        $routeLangKey = 'routes.name.' . Str::After(Route::currentRouteName(), '.');
        return Lang::get($routeLangKey, [], $lang);
    }
}

if (!function_exists('translateCurrentRoute')) {
    function translateCurrentRoute($lang, $params = [])
    {
        $routeName = translateCurrentRouteName($lang);
        return route($routeName, $params);
    }
}
