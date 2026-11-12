<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['bail','required','string','min:3','max:100', 'unique:tasks,title'],
            "is_done" => ['boolean','sometimes']
        ];
    }

    public function messages(): array
    {
        return [
            'title' => [
                'required' => 'Every task needs  a title.',
                'unique' => 'You already have a task with this title.'
            ]
        ];
    }
}
