<?php
namespace App\Http\Requests\Auth;

use App\DTO\Auth\RegisterUserDTO;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Open registration
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'nullable|string|in:client,employee', // Optional role validation
        ];
    }

    /**
     * Convert validated data into a RegisterUserDTO instance.
     */
    public function toDTO(): RegisterUserDTO
    {
        $validated = $this->validated();

        return new RegisterUserDTO(
            $validated['name'],
            $validated['email'],
            Hash::make($validated['password']),
            $validated['role']
        );
    }
}
