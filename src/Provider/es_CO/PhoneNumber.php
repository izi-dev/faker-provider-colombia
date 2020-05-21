<?php

namespace IziDev\Provider\es_CO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Colombia
     */
    protected static $formats = array(
        '+57 {{mobileOperatorCode}} ### ####',
        '+57 {{mobileOperatorCode}} #######',
        '+57 {{mobileOperatorCode}}#######',
        '+57 {{mobileOperatorCode}}-###-####',
        '+57 {{mobileOperatorCode}}-#######',
        '{{mobileOperatorCode}} ### ####',
        '{{mobileOperatorCode}} #######',
        '{{mobileOperatorCode}}#######',
        '{{mobileOperatorCode}}-###-####',
        '{{mobileOperatorCode}}-#######',
        '+57 {{landlineOperatorCode}}{{areaCode}} {{twoToEight}}## ####',
        '+57 {{landlineOperatorCode}}{{areaCode}} {{twoToEight}}######',
        '+57 {{landlineOperatorCode}}{{areaCode}}{{twoToEight}}######',
        '+57 {{landlineOperatorCode}}{{areaCode}}-{{twoToEight}}##-####',
        '+57 {{landlineOperatorCode}}{{areaCode}}-{{twoToEight}}######',
        '{{landlineOperatorCode}}{{areaCode}} {{twoToEight}}## ####',
        '{{landlineOperatorCode}}{{areaCode}} {{twoToEight}}######',
        '{{landlineOperatorCode}}{{areaCode}}{{twoToEight}}######',
        '{{landlineOperatorCode}}{{areaCode}}-{{twoToEight}}##-####',
        '{{landlineOperatorCode}}{{areaCode}}-{{twoToEight}}######',
    );

    protected static $mobileOperatorCodes = array(
        300, 301, 302, 303, 304, 305, 310, 320, 321, 322, 323, 350, 351
    );

    protected static $landlineOperatorCodes = array(
        456, 444, 414, 5, 7, 9
    );

    public static function mobileOperatorCode()
    {
        return self::randomElement(static::$mobileOperatorCodes);
    }

    public static function landlineOperatorCode()
    {
        return self::randomElement(static::$landlineOperatorCodes);
    }

    public static function areaCode()
    {
        return self::numberBetween(1, 8);
    }

    public static function twoToEight()
    {
        return self::numberBetween(2, 8);
    }

    /**
     * @example '555-123-546'
     */
    public function phoneNumberFormat($format)
    {
        return static::numerify($this->generator->parse($format));
    }
}
