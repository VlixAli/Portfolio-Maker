<?php

namespace App\Http\Requests\Experience;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceStoreRequest extends FormRequest
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
            'position' => 'required|string',
            'starting_year' => 'required|numeric',
            'ending_year' => 'required|numeric',
            'company' => 'required|string',
            'description' => 'required|string',
        ];
    }
}
