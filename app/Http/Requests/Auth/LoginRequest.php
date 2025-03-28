<?php

namespace App\Http\Requests\Auth;

use App\DTO\Auth\LoginUserTDO;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ];
    }

    public function GetTdo(): LoginUserTDO
    {
        return new LoginUserTDO(
            email: $this->input('name'),
            password: $this->input('password')
        );

    }
}
