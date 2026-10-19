<?php

namespace App\Http\Requests\Api\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Mengambil ID user dari route parameter
        $userId = $this->route('id') ?? $this->route('user');

        return [
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|email|max:255|unique:users,email,' . $userId . ',id_users',
            'password'    => 'nullable|string|min:8',
            'no_wa'       => 'nullable|string|max:20',
            'role'        => 'required|in:peserta,admin,keuangan,super_admin',
            'status_akun' => 'required|string|max:50',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validasi gagal.',
            'errors'  => $validator->errors()
        ], 422));
    }
}
