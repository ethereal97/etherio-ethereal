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
}<?php

namespace Ethereal\Foundation;

class Application
{
  private static $_instance;
  
  protected $basePath;
  
  protected $defaultPath;
  
  protected $appPath;
  
  protected $configPath;
  
  protected $databasePath;
  
  protected $environmentPath;
  
  protected $publicPath;
  
  protected $resourcesPath;
  
  protected $routesPath;
  
  protected $storagePath;
  
  public function __construct(string $basePath)
  {
    self::$_instance = $this;
    
    $this->basePath = realpath($basePath) ?: $basePath;
  }
  
  public function usePath(string $defaultPath)
  {
    $this->defaultPath = $defaultPath;
  }
  
  public function path(string $path = '')
  {
    $defaultPath = $this->defaultPath ?: $this->basePath;
    
    return $defaultPath . ($path ? DIRECTO