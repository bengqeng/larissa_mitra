<?php

namespace App\Rules;

use App\Http\Traits\MitraTrait;
use Illuminate\Contracts\Validation\Rule;

class typeMitraIsValid implements Rule
{
    use MitraTrait;
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
        return $this->validMitra($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Tipe mitra tidak sesuai';
    }
}
