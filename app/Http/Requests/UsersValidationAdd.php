<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UsersValidationAdd extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullname'     => ['required', 'string', 'max:255'],
            'username'     => ['required', 'string', 'max:100', 'unique:users,username'],
            'phone_number' => ['required', 'string', 'max:20'],
            'email'        => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'role'         => ['required', 'string'],
            'password'     => ['required', 'string', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'fullname.required'     => 'Nama lengkap wajib diisi.',
            'fullname.string'       => 'Nama lengkap harus berupa teks.',
            'fullname.max'          => 'Nama lengkap tidak boleh lebih dari 255 karakter.',

            'username.required'     => 'Username wajib diisi.',
            'username.string'       => 'Username harus berupa teks.',
            'username.max'          => 'Username tidak boleh lebih dari 100 karakter.',
            'username.unique'       => 'Username sudah digunakan.',

            'phone_number.required' => 'Nomor telepon wajib diisi.',
            'phone_number.string'   => 'Nomor telepon harus berupa teks.',
            'phone_number.max'      => 'Nomor telepon tidak boleh lebih dari 20 karakter.',

            'email.required'        => 'Email wajib diisi.',
            'email.string'          => 'Email harus berupa teks.',
            'email.email'           => 'Format email tidak valid.',
            'email.max'             => 'Email tidak boleh lebih dari 255 karakter.',
            'email.unique'          => 'Email sudah digunakan.',

            'role.required'         => 'Role wajib diisi.',
            'role.string'           => 'Role harus berupa teks.',

            'password.required'     => 'Password wajib diisi.',
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
