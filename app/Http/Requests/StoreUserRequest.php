<?php

namespace App\Http\Requests;

use Illuminate\Support\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required| min:3',
            'email' => 'required|email',
            'age' => 'required|numeric|min:18',

            'password' => [
                'required',
                'min:8',
                'confirmed',

            ],

            'password_confirmation' => 'required|same:password',
            'file' => 'required|file|mimetypes:image/jpeg,image/png,image/jpg|max:2048',
            'url' => 'required|url',
        ];
    }
}
