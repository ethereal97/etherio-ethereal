PK   �HQ            '   src/Ethereal/Foundation/Application.php<?php

namespace Ethereal\Foundation;

class Dotenv
{
  public function __construct(array $env)
  {
    foreach ($env as $name => $value):
      $this->${name} = $value;  
    endforeac