<?php 

namespace src\Controller;

use src\Model\DateTimeModel;

class DateTimeController
{
    
    public function displayDateTime()
    {
        $printDateTime = new DateTimeModel();
        $printDateTime->dateFormat();
        $printDateTime->year();
        $printDateTime->day();
        $printDateTime->month();
        $printDateTime->dateAndTime();
        $printDateTime->dateRFC();
        $printDateTime->dateISO();
    }
}
