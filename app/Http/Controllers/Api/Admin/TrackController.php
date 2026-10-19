<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\TrackRequest;
use App\Models\Track;

class TrackController extends Controller
{
    /**
     * US-19: Menampilkan daftar seluruh track (Index)
     * Bisa diakses publik atau admin
     */
    public function index()
    {
        try {
            $tracks = Track::orderBy('created_at', 'desc')->get();

            return response()->json([
                'success' => true,
                'message' => 'Daftar track pelatihan berhasil diambil.',
                'data'    => $tracks
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data track.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-19: Menambah track baru (Store)
     */
    public function store(TrackRequest $request)
    {
        try {
            $track = Track::create([
                'nama_track' => $request->nama_track,
                'deskripsi'  => $request->deskripsi,
                'is_active'  => $request->is_active ?? 1,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Track pelatihan berhasil ditambahkan.',
                'data'    => $track
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan track.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-19: Menampilkan detail track berdasarkan ID (Show)
     */
    public function show($id)
    {
        try {
            $track = Track::find($id);

            if (!$track) {
                return response()->json([
                    'success' => false,
                    'message' => 'Track pelatihan tidak ditemukan.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Detail track berhasil diambil.',
                'data'    => $track
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
     * US-19: Memperbarui data track (Update)
     */
    public function update(TrackRequest $request, $id)
    {
        try {
            $track = Track::find($id);

            if (!$track) {
                return response()->json([
                    'success' => false,
                    'message' => 'Track pelatihan tidak ditemukan.',
                ], 404);
            }

            $track->update([
                'nama_track' => $request->nama_track,
                'deskripsi'  => $request->deskripsi,
                'is_active'  => $request->is_active ?? $track->is_active,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data track berhasil diperbarui.',
                'data'    => $track
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui data track.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-19: Menghapus track (Destroy)
     */
    public function destroy($id)
    {
        try {
            $track = Track::find($id);

            if (!$track) {
                return response()->json([
                    'success' => false,
                    'message' => 'Track pelatihan tidak ditemukan.',
                ], 404);
            }

            $track->delete();

            return response()->json([
                'success' => true,
                'message' => 'Track pelatihan berhasil dihapus.',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus track (kemungkinan masih berelasi dengan data peminatan).',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
