<?php

if(!function_exists('assets')) {
    function assets($path)
    {
        echo URL .'assets/'. $path ;
    }
}

if(!function_exists('uploads')) {
    function uploads($path)
    {
        echo URL .'uploads/'. $path ;
    }
}

if(!function_exists('url')) {
    function url($path = '')
    {
        echo URL . $path ;
    }
}

if(!function_exists('authCheck')) {
    function authCheck()
    {
        return Source\Http\Auth::check();
    }
}