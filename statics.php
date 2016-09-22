<?php

class Math
{
    const PIE = 3.14;

    public static function add(array $array)
    {
        return array_sum($array);
    }
}

$array = array(1,2,3,4,5);

echo Math::add($array);