<?php

namespace Ethereal\Foundation;

class Environment
{
  public function parse(string $envFile)
  {
    if (! file_exists($envFile)) {
      return false;
    }
    
    $env = parse_ini_file($env, false, INI_SCANNER_TYPED);
    
    return new Dotenv($env);
  }
  
  public function __get($offset)
  {
    return null;
  }
}