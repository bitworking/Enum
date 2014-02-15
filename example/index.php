<?php

/**
 * PHP abstract enum class example
 *
 * PHP version 5.3
 */

include "..".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."Enum.php";

class Month extends Enum {
    const __default = self::January;

    const January = 1;
    const February = 2;
    const March = 3;
    const April = 4;
    const May = 5;
    const June = 6;
    const July = 7;
    const August = 8;
    const September = 9;
    const October = 10;
    const November = 11;
    const December = 12;
}


echo new Month(Month::June) . PHP_EOL;

try {
    new Month(13);
} catch (UnexpectedValueException $uve) {
    echo $uve->getMessage() . PHP_EOL;
}

$month = new Month(Month::June);
var_dump($month() === Month::June);
