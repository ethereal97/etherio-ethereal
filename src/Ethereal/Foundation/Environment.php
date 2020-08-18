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
  fun