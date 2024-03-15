<?php

namespace src\Controller;

use src\Model\StringModel;

class StringController
{
    public function displayString()
    {
        $stringOperation = new StringModel();
        $stringOperation->concatenation();
        $stringOperation->substring();
        $stringOperation->replacement();
        $stringOperation->length();
        $stringOperation->count();
        $stringOperation->reverse();
    }
}
