<?php

namespace App\Http\Requests;

use App\Rules\MitraTimelineStatus;
use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateMitraTimeline extends FormRequest
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
        $rule = [
            'status' => [],
            'pending_message' => ['max:255'],
            'success_message' => ['max:255']
        ];
        if (isset($this->status)) {
            $rule['status'] = [new MitraTimelineStatus()];
        }
        return $rule;
    }
}
