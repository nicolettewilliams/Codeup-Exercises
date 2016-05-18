<?php

class Model
{
    //Array to store the key/value data
    private $attributes = [];

    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        //Set the $name key to hold $value in $data
        $this->attributes[$name] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }
}


$data = new Model();
$data->name = 'Niki';
$data->group = 'Codeup';
$data->age = 22;
echo $data->name . PHP_EOL;
echo $data->group . PHP_EOL;
echo $data->age . PHP_EOL;