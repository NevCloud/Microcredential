<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\LandingPageRequest;
use App\Models\LandingPageKonten;

class LandingPageController extends Controller
{
    /**
     * US-24: Menampilkan daftar seluruh konten landing page (Index)
     * Dapat diakses publik untuk merender halaman depan
     */
    public function index()
    {
        try {
            $konten = LandingPageKonten::orderBy('created_at', 'desc')->get();

            return response()->json([
                'success' => true,
                'message' => 'Daftar konten landing page berhasil diambil.',
                'data'    => $konten
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data konten landing page.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-24: Menambah konten landing page baru (Store)
     */
    public function store(LandingPageRequest $request)
    {
        try {
            $konten = LandingPageKonten::create([
                'bagian_halaman' => $request->bagian_halaman,
                'jenis_konten'   => $request->jenis_konten,
                'judul'          => $request->judul,
                'deskripsi'      => $request->deskripsi,
                'gambar_path'    => $request->gambar_path,
                'is_active'      => $request->is_active ?? 1,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Konten landing page berhasil ditambahkan.',
                'data'    => $konten
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan konten landing page.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-24: Menampilkan detail konten landing page berdasarkan ID (Show)
     */
    public function show($id)
    {
        try {
            $konten = LandingPageKonten::find($id);

            if (!$konten) {
                return response()->json([
                    'success' => false,
                    'message' => 'Konten landing page tidak ditemukan.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Detail konten landing page berhasil diambil.',
                'data'    => $konten
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
     * US-24: Memperbarui data konten landing page (Update)
     */
    public function update(LandingPageRequest $request, $id)
    {
        try {
            $konten = LandingPageKonten::find($id);

            if (!$konten) {
                return response()->json([
                    'success' => false,
                    'message' => 'Konten landing page tidak ditemukan.',
                ], 404);
            }

            $konten->update([
                'bagian_halaman' => $request->bagian_halaman,
                'jenis_konten'   => $request->jenis_konten,
                'judul'          => $request->judul,
                'deskripsi'      => $request->deskripsi,
                'gambar_path'    => $request->gambar_path ?? $konten->gambar_path,
                'is_active'      => $request->is_active ?? $konten->is_active,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Konten landing page berhasil diperbarui.',
                'data'    => $konten
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui konten landing page.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-24: Menghapus konten landing page (Destroy)
     */
    public function destroy($id)
    {
        try {
            $konten = LandingPageKonten::find($id);

            if (!$konten) {
                return response()->json([
                    'success' => false,
                    'message' => 'Konten landing page tidak ditemukan.',
                ], 404);
            }

            $konten->delete();

            return response()->json([
                'success' => true,
                'message' => 'Konten landing page berhasil dihapus.',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus konten landing page.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
