<?php

namespace App;

class ArrayHelper
{
    public static function getFirstElement(array $arr): mixed
    {
        return empty($arr) ? 'void' : $arr[0];
    }
}
