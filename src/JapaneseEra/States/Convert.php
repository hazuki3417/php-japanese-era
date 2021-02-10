<?php

namespace Selen\JapaneseEra\States;

class Convert
{
    const YEAR_TYPE_NUMBER  = 0;
    const YEAR_TYPE_GANNNEN = 1;

    private static $isConvert = false;
    private static $state     = 0;

    public static function on()
    {
        self::$isConvert = true;
    }

    public static function off()
    {
        self::$isConvert = false;
    }

    public static function isConvert()
    {
        return self::$isConvert;
    }

    public static function state()
    {
        return self::$state;
    }

    public static function isYearTypeNumber()
    {
        return self::$state === self::YEAR_TYPE_NUMBER;
    }

    public static function isYearTypeGannnen()
    {
        return self::$state === self::YEAR_TYPE_GANNNEN;
    }

    public static function setYearTypeNumber()
    {
        self::on();
        self::$state = self::YEAR_TYPE_NUMBER;
    }

    public static function setYearTypeGannnen()
    {
        self::on();
        self::$state = self::YEAR_TYPE_GANNNEN;
    }
}
