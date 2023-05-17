<?php

namespace App\Http\Requests\Admin\Test;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'test_id' => 'required|integer',
            'user_id' => 'required|integer',
            'category' => 'required|integer',
            'correct_count' => 'required|integer',
            'points' => 'required|integer',
            'time' => 'required|integer',
            'name' => 'required|string'
        ];
    }
}
