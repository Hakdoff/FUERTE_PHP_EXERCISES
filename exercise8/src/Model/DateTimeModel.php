<?php 

namespace src\Model;

class DateTimeModel 
{
    
    public function dateFormat() 
    {
        date_default_timezone_set("Asia/Manila");
        echo "Date format: " . date("Y.m.d") . "<br>";
        echo "Date format: " . date("Y-m-d") . "<br>";
        echo "Date format: " . date("Y/m/d") . "<br>";
    }

    public function year() 
    {
        date_default_timezone_set("Asia/Manila");
        echo "Year:  " . date("Y") . "<br>";
    }

    public function day() 
    {
        date_default_timezone_set("Asia/Manila");
        echo "Day:  " . date("l") . "<br>";
        echo "Day in month:  " . date("d") . "<br>";
    }

    public function month() 
    {
        date_default_timezone_set("Asia/Manila");
        echo "Month:  " . date("F") . "<br>";
        echo "Month in number:  " . date("m") . "<br>";
    }

    public function dateAndTime() 
    {
        date_default_timezone_set("Asia/Manila");
        echo "Date and Time:  " . date("l h:i:sa Y/m/d") . "<br>";
        echo "Date and Time:  " . date("l jS \of F Y h:i:s A"). "<br>";
    }

    public function dateRFC() 
    {
        date_default_timezone_set("Asia/Manila");
        echo "RFC 822:  " . date(DATE_RFC822) . "<br>";
    }

    public function dateISO() 
    {
        date_default_timezone_set("Asia/Manila");
        echo "ISO 8601:  " . date("c"). "<br>";
    }
}
