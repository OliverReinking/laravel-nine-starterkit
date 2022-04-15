<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Language implements Rule
{

    public function passes($attribute, $value)
    {
        $user_languages = 0;
        foreach ($value as $key => $item) {
            if ($item == true) {
                $user_languages += 1;
            }
        }
        //
        if ($user_languages >= 2) {
            return true;
        }
        return false;
    }

    public function message()
    {
        return trans('validation.language');
    }
}
