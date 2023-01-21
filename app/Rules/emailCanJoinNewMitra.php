<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class emailCanJoinNewMitra implements Rule
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
        $user = User::where('email', $value)->first();
        if($user->count()){
            if (!$this->validateMitraStatus($user)){
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Anda sudah memiliki mitra yang sudah di approve atau dalam progres.';
    }

    private function validateMitraStatus($user)
    {
        if ($user->mitras()->count() == 0){ return true; }

        //validate goes here
        return true;
    }
}
