<?php

namespace App\Http\Requests\Api\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class LandingPageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'bagian_halaman' => 'required|string|max:100',
            'jenis_konten'   => 'nullable|string|max:100',
            'judul'          => 'required|string|max:255',
            'deskripsi'      => 'required|string',
            'gambar_path'    => 'nullable|string|max:255',
            'is_active'      => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'bagian_halaman.required' => 'Bagian halaman wajib diisi (contoh: Hero Section, Tentang).',
            'judul.required'          => 'Judul konten wajib diisi.',
            'deskripsi.required'      => 'Deskripsi konten wajib diisi.',
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
