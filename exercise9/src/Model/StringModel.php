<?php 

namespace src\Model;

class StringModel 
{

    public function concatenation()
    {
        $hello = "Hello";
        $world = "World";
        echo "Concatnate: " . $hello . ", " . $world . "!<br>";
    }

    public function substring() 
    {
        $string = "Hello, World!";
        echo "Substitute String with positive number: " . substr($string, 6) . "<br>";
        echo "Substitute String with negative number: " . substr($string, -10) . "<br>";
    }

    public function replacement() 
    {
        $string = "Hello, World!";
        $replace = str_replace('World', 'User', $string);
        echo "Replace World with User: " . $replace . "<br>";
    }

    public function length() 
    {
        $string = "Hello, World!";
        $length = strlen($string);
        echo "String length = " . $length . "<br>";
    }

    public function count() 
    {
        $string = "Hello, World!";
        $count = str_word_count($string);
        echo "String Word Count = " . $count . "<br>";
    }

    public function reverse() 
    {
        $string = "Hello, World!";
        $reverse = strrev($string);
        echo "String Reverse = " . $reverse . "<br>";
    }
}
