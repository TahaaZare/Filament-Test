<?php

namespace App\Core\Enums;

enum CountryEnum: string
{
    case IRAN = 'iran';
    case USA = 'usa';
    case SAUDI_ARABIA = 'saudi_arabia';
    case IRAQ = 'iraq';
    case RUSSIA = 'russia';

    public function label(): string
    {
        return match($this) {
            self::IRAN => 'ایران',
            self::USA => 'آمریکا',
            self::SAUDI_ARABIA => 'عربستان',
            self::IRAQ => 'عراق',
            self::RUSSIA => 'روسیه',
        };
    }


    public static function toArray(): array
    {
        $array = [];
        foreach (self::cases() as $case) {
            $array[$case->value] = $case->label();
        }
        return $array;
    }
}
