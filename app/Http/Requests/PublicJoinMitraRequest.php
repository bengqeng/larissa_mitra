<?php

namespace App\Http\Requests;

use App\Rules\emailCanJoinNewMitra;
use App\Rules\typeMitraIsValid;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class PublicJoinMitraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required', 'confirmed', Password::min(8)],
            'phone_number' => ['required', 'min:9', 'max:20'],
            'address' => ['required', 'min:10', 'max:255'],
            'type' => ['required', new typeMitraIsValid()],
            'location' => ['required', 'min:10', 'max:255'],
            'mitra_name' => ['required', 'min:3', 'max:50']
        ];
    }
}
