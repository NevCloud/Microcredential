<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\PeminatanRequest;
use App\Models\Peminatan;

class PeminatanController extends Controller
{
    /**
     * US-20: Menampilkan daftar seluruh peminatan beserta data track-nya (Index)
     */
    public function index()
    {
        try {
            $peminatan = Peminatan::with('track')->orderBy('created_at', 'desc')->get();

            return response()->json([
                'success' => true,
                'message' => 'Daftar peminatan berhasil diambil.',
                'data'    => $peminatan
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data peminatan.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-20: Menambah peminatan baru (Store)
     */
    public function store(PeminatanRequest $request)
    {
        try {
            $peminatan = Peminatan::create([
                'id_track'              => $request->id_track,
                'nama_peminatan'        => $request->nama_peminatan,
                'deskripsi'             => $request->deskripsi,
                'jenjang'               => $request->jenjang,
                'biaya_formulir'        => $request->biaya_formulir,
                'biaya_penyelenggaraan' => $request->biaya_penyelenggaraan,
                'kuota_minimal'         => $request->kuota_minimal ?? 15,
                'is_active'             => $request->is_active ?? 1,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Peminatan berhasil ditambahkan.',
                'data'    => $peminatan->load('track')
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan peminatan.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-20: Menampilkan detail peminatan berdasarkan ID (Show)
     */
    public function show($id)
    {
        try {
            $peminatan = Peminatan::with('track')->find($id);

            if (!$peminatan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Peminatan tidak ditemukan.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Detail peminatan berhasil diambil.',
                'data'    => $peminatan
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-20: Memperbarui data peminatan (Update)
     */
    public function update(PeminatanRequest $request, $id)
    {
        try {
            $peminatan = Peminatan::find($id);

            if (!$peminatan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Peminatan tidak ditemukan.',
                ], 404);
            }

            $peminatan->update([
                'id_track'              => $request->id_track,
                'nama_peminatan'        => $request->nama_peminatan,
                'deskripsi'             => $request->deskripsi,
                'jenjang'               => $request->jenjang,
                'biaya_formulir'        => $request->biaya_formulir,
                'biaya_penyelenggaraan' => $request->biaya_penyelenggaraan,
                'kuota_minimal'         => $request->kuota_minimal ?? $peminatan->kuota_minimal,
                'is_active'             => $request->is_active ?? $peminatan->is_active,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data peminatan berhasil diperbarui.',
                'data'    => $peminatan->load('track')
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui data peminatan.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-20: Menghapus peminatan (Destroy)
     */
    public function destroy($id)
    {
        try {
            $peminatan = Peminatan::find($id);

            if (!$peminatan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Peminatan tidak ditemukan.',
                ], 404);
            }

            $peminatan->delete();

            return response()->json([
                'success' => true,
                'message' => 'Peminatan berhasil dihapus.',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus peminatan (kemungkinan masih berelasi dengan data pendaftaran).',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
