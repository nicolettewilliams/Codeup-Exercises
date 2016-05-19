<?php 

class Model
{
    // Array to store key/value data
    private $attributes = [];
    //protected static property
    protected static $table;
    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->attributes[$name] = $value;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }
    public static function getTableName() 
    {
        return static::$table;
    }
}



