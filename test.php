<?php

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName , $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

$niki = new Person('Niki' , 'Williams');
echo $niki->firstName, PHP_EOL;


class Triagnle
{
    public $sideOne;
    public $sideTwo;
    public $sideThree;

    public function __construct($sideOne , $sideTwo , $sideThree)
    {
        $this->sideOne  = $sideOne;
        $this->sideTwo = $sideTwo;
        $this->sideThree = $sideThree;
    }

    public function __destruct()
    {
        echo 'Done!' . PHP_EOL;
    }

    public function perimeter()
    {
        return $this->sideOne + $this->sideTwo + $this->sideThree;
    }
}

$triangle = new Triagnle(2 , 3 , 4);
echo $triangle->perimeter() . PHP_EOL;


