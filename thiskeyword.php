<?php
class People
{
    var string $name;

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name,my name is {$this->name}";
        }
    }
}

$People = new People();
$People->name = "agus";

$People->sayHello(null);
