<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaderRequest extends FormRequest
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
            'session_id' => "required|exists:sessions,id",
            'teacher_id' => "required|exists:yz_teacher,id",
            'leader_type' => "required|in:1,2",
            'job' => "nullable|string|max:20",
            'remark' => "required|string|max:50",

        ];
    }
}
