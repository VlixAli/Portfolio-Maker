<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            'summary' => 'nullable',
            'title' => 'nullable|string',
            'short_summary' => 'nullable',
            'birthday' => 'nullable|date',
            'age' => 'nullable|numeric',
            'website' => 'nullable|string',
            'degree' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'city' => 'nullable|string',
            'freelance' => 'nullable|in:Available,Unavailable',
            'ending' => 'nullable'
        ];
    }
}
