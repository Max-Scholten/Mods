<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:100',
            'creator' => 'required|string',
            'version' => 'required|string|max:10',
        ];
    }
}
