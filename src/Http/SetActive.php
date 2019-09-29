<?php


use Illuminate\Support\Facades\Route;

function isActive($routeName, $className){
    if(Route::currentRouteName() === $routeName)
        return $className;
    return '';
}
