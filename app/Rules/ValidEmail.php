<?php

namespace App\Rules;

use App\PermittedUser;
use Illuminate\Contracts\Validation\Rule;

class ValidEmail implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $text=$value;
        if(PermittedUser::where('email', '=', $text)->exists())
            return true;
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You do not have permission to register.';
    }
}
