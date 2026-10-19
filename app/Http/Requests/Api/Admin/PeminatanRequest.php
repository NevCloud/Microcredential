<?php

namespace App\Http\Requests\Api\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class PeminatanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $peminatanId = $this->route('id') ?? $this->route('peminatan');

        return [
            'id_track'             => 'required|exists:tracks,id_track',
            'nama_peminatan'       => 'required|string|max:255|unique:peminatan,nama_peminatan,' . $peminatanId . ',id_peminatan',
            'deskripsi'            => 'nullable|string',
            'jenjang'              => 'nullable|string|max:50',
            'biaya_formulir'       => 'required|integer|min:0',
            'biaya_penyelenggaraan'=> 'required|integer|min:0',
            'kuota_minimal'        => 'nullable|integer|min:1',
            'is_active'            => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'id_track.required'            => 'Track pelatihan wajib dipilih.',
            'id_track.exists'              => 'Track pelatihan yang dipilih tidak valid.',
            'nama_peminatan.required'      => 'Nama peminatan wajib diisi.',
            'nama_peminatan.unique'        => 'Nama peminatan sudah terdaftar.',
            'biaya_formulir.required'      => 'Biaya formulir wajib diisi.',
            'biaya_penyelenggaraan.required'=> 'Biaya penyelenggaraan wajib diisi.',
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
