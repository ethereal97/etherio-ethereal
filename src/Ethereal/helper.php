<?php

//* Ethereal Framework Default Helper Functions File

use Ethereal\Foundation\Application;

if (! function_exists('env')) {
  function env($name, $default = null)
  {
    return $_ENV[$name] ?? getenv($name) ?: $default;
  }
}

if (! function_exists('app')) {
  function app($accessor = null)
  {
    $app = Application::getInstance();
    
    return $accessor ? $app[$accessor] : $accessor;
  }
}

if (! function_exists('config')) {
  function config($name, $default = null)
  {
    $config = app('config');
    
    return $config[$name] ?: $default;
  }
}

if (! function_exists('request')) {
  function request($name, $default = null)
  {
    $request = app('request');
    
    return $request[$name] ?: $default;
  }
}