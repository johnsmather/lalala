<?php

namespace App\Http\Requests\Admin\ComplitedTasks;

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
            'user_id' => 'required|integer|exists:users,id',
            'name' => 'required|string',
            'category' => 'required|string',
            'points' => 'required|integer',
            'time' => 'required|integer',
            'correct_count' => 'required|integer|max:10|min:0'
        ];
    }
    public function messages()
    {
        return [
            'test_id.required' => 'Заполнить тест ид',
            'user_id.required' => 'Заполнить юзер ид',
            'name.required' => 'Заполнить имя',
            'category.required' => 'Заполнить категорию',
            'points.required' => 'Заполнить очки',
            'time.required' => 'Заполнить время',
            'correct_count.required' => 'Заполнить правильные ответы',
            'user_id.exists' => 'Не существует user с таким id',
            'test_id.integer' => 'тест ID должно быть числовым значением',
            'user_id.integer' => 'юзер ID должно быть числовым значением',
            'points.integer' => 'очки Должно быть числовым значением',
            'time.integer' => 'время Должно быть числовым значением',
            'correct_count.integer' => ' правильные ответы Должно быть числовым значением',
            'correct_count.min' => 'правильные ответы Минимальное допустимиое число-0',
            'correct_count.max' => 'правильные ответы Максимально допустимиое число-10',
        ];
    }
}
