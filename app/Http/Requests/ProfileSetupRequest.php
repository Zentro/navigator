<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'address' => ['max:255'],
            //'apartment_number' => ['max:255'],
            'zip_code' => ['max:5'],
            'city' => ['max:255'],
            'state' => ['max:255'],
        ];
    }
}
