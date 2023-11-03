<?php

namespace App\Helpers;

use App\Models\ReferalInformation;

class Utility
{
    public static function generateUniqueCode($codeLength)
    {

        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersNumber = strlen($characters);

        $code = '';

        while (strlen($code) < $codeLength) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }

        if (ReferalInformation::where('code', $code)->exists()) {
            $this->generateUniqueCode();
        }

        return $code;
    }
}
