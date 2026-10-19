<?php

namespace App\Http\Requests\Api\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TrackRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Mendapatkan ID track jika sedang melakukan proses update (untuk mengecualikan unique check pada nama track itu sendiri jika perlu)
        $trackId = $this->route('id') ?? $this->route('track');

        return [
            'nama_track' => 'required|string|max:255|unique:tracks,nama_track,' . $trackId . ',id_track',
            'deskripsi'  => 'nullable|string',
            'is_active'  => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_track.required' => 'Nama track pelatihan wajib diisi.',
            'nama_track.unique'   => 'Nama track sudah terdaftar.',
            'nama_track.max'      => 'Nama track maksimal 255 karakter.',
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
