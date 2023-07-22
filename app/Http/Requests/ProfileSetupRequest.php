<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileSetupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'address' => ['required','string','max:255'],
            'city' => ['required','string','max:255'],
            'zip_code' => ['required','integer','digits_between:1,10'],
            'state' => ['required','string','max:255'],
        ];
    }
}
