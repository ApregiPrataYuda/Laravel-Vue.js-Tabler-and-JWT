<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsersValidationUpdate extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullname'     => ['nullable', 'string', 'max:255'],
            'username'     => [
                'nullable',
                'string',
                'max:100',
                Rule::unique('users', 'username')->ignore($this->user) // <-- abaikan ID user
            ],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'email'        => [
                'nullable',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->user) // <-- abaikan ID user
            ],
            'role'         => ['nullable', 'string'],
            'password'     => ['nullable', 'string', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'fullname.string'       => 'Nama lengkap harus berupa teks.',
            'fullname.max'          => 'Nama lengkap tidak boleh lebih dari 255 karakter.',

            'username.string'       => 'Username harus berupa teks.',
            'username.max'          => 'Username tidak boleh lebih dari 100 karakter.',
            'username.unique'       => 'Username sudah digunakan.',

            'phone_number.string'   => 'Nomor telepon harus berupa teks.',
            'phone_number.max'      => 'Nomor telepon tidak boleh lebih dari 20 karakter.',

            'email.string'          => 'Email harus berupa teks.',
            'email.email'           => 'Format email tidak valid.',
            'email.max'             => 'Email tidak boleh lebih dari 255 karakter.',
            'email.unique'          => 'Email sudah digunakan.',

            'role.string'           => 'Role harus berupa teks.',

            'password.string'       => 'Password harus berupa teks.',
            'password.min'          => 'Password minimal 6 karakter.',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'fullname'     => $this->fullname ? trim($this->fullname) : null,
            'username'     => $this->username ? trim($this->username) : null,
            'phone_number' => $this->phone_number ? trim($this->phone_number) : null,
            'email'        => $this->email ? strtolower(trim($this->email)) : null,
            'role'         => $this->role ? trim($this->role) : null,
        ]);
    }
}
