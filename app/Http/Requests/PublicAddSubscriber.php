<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicAddSubscriber extends FormRequest
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
            'prospek_name' => ['required', 'min:5', 'max:50'],
            'prospek_phone_number' => ['required', 'min:9', 'max:20'],
            'prospek_address' => ['required', 'min:10', 'max:255']
        ];
    }
}
