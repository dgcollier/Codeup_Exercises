<?php

class Model
{

    public $attributes = array();

    public function __set ($key, $value)
    {
        $this->attributes[$key] = $value;
    }
    
    public function __get ($key)
    {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return null;
    }
}

$person1 = new Model();
$person1->streetName = 'The n00b';
$person1->hairColor = 'brown';
$person1->eyeColor = 'green';
$person1->height = 'average';
$person1->language = 'English';


echo 'street name: '  . $person1->streetName  . PHP_EOL . 
    'hair: '          . $person1->hairColor   . PHP_EOL . 
    'eyes: '          . $person1->eyeColor    . PHP_EOL . 
    'height: '        . $person1->height      . PHP_EOL . 
    'speaks: '        . $person1->language    . PHP_EOL .
    '======================='                 . PHP_EOL; 

$person2 = new Model();
$person2->streetName = 'Bulldozer';
$person2->hairColor = 'white';
$person2->eyeColor = 'grey';
$person2->height = 'short';
$person2->language = 'Mute';


echo 'street name: '  . $person2->streetName  . PHP_EOL . 
    'hair: '          . $person2->hairColor   . PHP_EOL . 
    'eyes: '          . $person2->eyeColor    . PHP_EOL . 
    'height: '        . $person2->height      . PHP_EOL . 
    'speaks: '        . $person2->language    . PHP_EOL .
    '======================='                 . PHP_EOL; 