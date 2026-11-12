<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $task = $this->route('task');

        return [
                'title' => ['sometimes','bail','string','min:3','max:100',
                Rule::unique('tasks','title')->ignore($task->id ?? $task)],
                'is_done' => ['sometimes','boolean']
            ];
    }
}
