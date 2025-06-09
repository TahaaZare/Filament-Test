<?php

namespace App\Rules;

use App\Core\Enums\CountryEnum;
use Illuminate\Contracts\Validation\Rule;
use App\Enums\Country;

class PhoneNumberByCountry implements Rule
{
    protected CountryEnum $country;
    protected string $message;

    public function __construct(string|CountryEnum $country)
    {
        // If a string is provided, convert it to the Country enum
        if (is_string($country)) {
            $country = CountryEnum::tryFrom(strtolower($country)) ?? throw new \InvalidArgumentException("Invalid country.");
        }
        $this->country = $country;
        $this->message = 'The phone number is not valid.';
    }

    public function passes($attribute, $value)
    {
        switch ($this->country) {
            case CountryEnum::IRAN:
                // Iran phone number: 09xxxxxxxxx or +989xxxxxxxxx
                $pattern = '/^(?:\+98|0)?9\d{9}$/';
                break;

            case CountryEnum::USA:
                // USA phone number: 10 digits (with or without country code)
                // Examples: (123) 456-7890 or 123-456-7890 or +1 123-456-7890
                $pattern = '/^(\+1)?\s*\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/';
                break;

            case CountryEnum::SAUDI_ARABIA:
                // Saudi Arabia (country code +966 and 9 digit number)
                $pattern = '/^(?:\+966|0)?5\d{8}$/';
                break;

            case CountryEnum::IRAQ:
                // Iraq (country code +964 and 10 digit number)
                $pattern = '/^(?:\+964|0)?7\d{9}$/';
                break;

            case CountryEnum::RUSSIA:
                // Russia (country code +7 and 10 digit number)
                $pattern = '/^(?:\+7|8)?9\d{9}$/';
                break;

            default:
                $pattern = '/^\d{8,15}$/';
                break;
        }

        if (preg_match($pattern, $value)) {
            return true;
        }

        $this->message = "The phone number does not match the pattern for country {$this->country->label()}.";
        return false;
    }

    public function message()
    {
        return $this->message;
    }
}
