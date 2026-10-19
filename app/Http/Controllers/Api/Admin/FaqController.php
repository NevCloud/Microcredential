<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\FaqRequest;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * US-21: Menampilkan daftar seluruh FAQ (Index)
     * Dapat diakses publik untuk halaman depan
     */
    public function index()
    {
        try {
            $faqs = Faq::orderBy('urutan', 'asc')->orderBy('created_at', 'desc')->get();

            return response()->json([
                'success' => true,
                'message' => 'Daftar FAQ berhasil diambil.',
                'data'    => $faqs
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data FAQ.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-21: Menambah FAQ baru (Store)
     */
    public function store(FaqRequest $request)
    {
        try {
            $faq = Faq::create([
                'pertanyaan' => $request->pertanyaan,
                'jawaban'    => $request->jawaban,
                'urutan'     => $request->urutan ?? 0,
                'is_active'  => $request->is_active ?? 1,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'FAQ berhasil ditambahkan.',
                'data'    => $faq
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan FAQ.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-21: Menampilkan detail FAQ berdasarkan ID (Show)
     */
    public function show($id)
    {
        try {
            $faq = Faq::find($id);

            if (!$faq) {
                return response()->json([
                    'success' => false,
                    'message' => 'FAQ tidak ditemukan.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Detail FAQ berhasil diambil.',
                'data'    => $faq
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
     * US-21: Memperbarui data FAQ (Update)
     */
    public function update(FaqRequest $request, $id)
    {
        try {
            $faq = Faq::find($id);

            if (!$faq) {
                return response()->json([
                    'success' => false,
                    'message' => 'FAQ tidak ditemukan.',
                ], 404);
            }

            $faq->update([
                'pertanyaan' => $request->pertanyaan,
                'jawaban'    => $request->jawaban,
                'urutan'     => $request->urutan ?? $faq->urutan,
                'is_active'  => $request->is_active ?? $faq->is_active,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data FAQ berhasil diperbarui.',
                'data'    => $faq
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui data FAQ.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-21: Menghapus FAQ (Destroy)
     */
    public function destroy($id)
    {
        try {
            $faq = Faq::find($id);

            if (!$faq) {
                return response()->json([
                    'success' => false,
                    'message' => 'FAQ tidak ditemukan.',
                ], 404);
            }

            $faq->delete();

            return response()->json([
                'success' => true,
                'message' => 'FAQ berhasil dihapus.',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus FAQ.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
