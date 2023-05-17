<?php

namespace App\Http\Requests\Admin\Logical;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'text' => 'required|string',
            'answer' => 'required|string',
            'points_multiplier' => 'required|string',
            'img' => 'required|integer',
            'main_image' => 'file'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Заполните название',
            'text.required' => 'Заполните текст',
            'answer.required' => 'Заполните ответ',
            'points_multiplier.required' => 'Заполните множитель очков',
            'img.integer' => 'IMG должно быть числовым значением',
        ];
    }
}
