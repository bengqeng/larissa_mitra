<?php

namespace App\Http\Requests\User;

use App\Rules\typeMitraIsValid;
use Illuminate\Foundation\Http\FormRequest;

class JoinGeraiRequest extends FormRequest
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
            'type' => ['required', new typeMitraIsValid()],
            'location' => ['required', 'min:10', 'max:255'],
            'mitra_name' => ['required', 'min:3', 'max:50']
        ];
    }
}
