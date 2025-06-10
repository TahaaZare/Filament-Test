<?php

namespace App\Helpers;

class PersianNumbers
{
    public static function convert($string)
    {
        if (is_null($string)) {
            return '';
        }

        if (is_numeric($string)) {
            $string = (string) $string;
        }

        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        
        return str_replace($english, $persian, $string);
    }

    public static function convertBack($string)
    {
        $persian_numbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $english_numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        
        return str_replace($persian_numbers, $english_numbers, $string);
    }
}

if (!function_exists('convertEnglishToPersian')) {
    function convertEnglishToPersian($input)
    {
        return PersianNumbers::convert($input);
    }
}

if (!function_exists('persianNumbers')) {
    function persianNumbers($input)
    {
        return PersianNumbers::convert($input);
    }
}

if (!function_exists('convertPersianToEnglish')) {
    function convertPersianToEnglish($string)
    {
        return PersianNumbers::convertBack($string);
    }
}

if (!function_exists('formatPersianPrice')) {
    function formatPersianPrice($price)
    {
        if (!$price) {
            return persianNumbers('0');
        }
        
        return persianNumbers(number_format($price));
    }
} 