<?php

namespace Ethereal\Foundation;

class Dotenv
{
  public function __construct(array $env)
  {
    foreach ($env as $name => $value):
      $this->${name} = $value;  
    endforeach;
  }
  
  public function __get($offset)
  {
    return null;
  }
}