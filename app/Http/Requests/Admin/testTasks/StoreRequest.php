<?php

namespace App\Http\Requests\Admin\testTasks;

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
            'test_id' => 'required|exists:tests,id|integer',
            'name' => 'required|string',
            'correct' => 'required|integer',
            'answer_1' => 'required|string',
            'answer_2' => 'required|string',
            'answer_3' => 'required|string',
            'answer_4' => 'required|string'
        ];
    }
    public function messages()
    {
        return [
            'test_id.required' => 'Заполнить test_id',
            'name.required' => 'Заполнить user_id',
            'correct.required' => 'Заполнить правильный ответ',
            'answer_1.required' => 'Заполнить ответ 1',
            'answer_2.required' => 'Заполнить ответ 2',
            'answer_3.required' => 'Заполнить ответ 3',
            'answer_4.required' => 'Заполнить ответ 4',
            'test_id.exists' => 'Теста с таким id не существует',
            'test_id.integer' => 'ID должно быть числовым значением',
        ];
    }
}
