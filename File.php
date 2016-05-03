<?php

class File()
{
  public $handle;
  public function __construct($file)
  {
    $this->handle = fopen($file, 'a');
  }
  public function append($string)
  {
    fwrite($this->handle, $string . PHP_EOL);
  }
  public function close();
  {
    fclose($this->handle);
  }
}