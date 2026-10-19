<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreUserRequest;
use App\Http\Requests\Api\Admin\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * US-18: Menampilkan daftar seluruh user (Index)
     */
    public function index()
    {
        try {
            $users = User::select('id_users', 'name', 'email', 'no_wa', 'role', 'status_akun', 'created_at')
                         ->orderBy('created_at', 'desc')
                         ->get();

            return response()->json([
                'success' => true,
                'message' => 'Daftar pengguna berhasil diambil.',
                'data'    => $users
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data pengguna.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-18: Menambah user baru oleh Super Admin (Store)
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $salt = Str::random(16);

            $user = User::create([
                'name'                 => $request->name,
                'email'                => $request->email,
                'password'             => Hash::make($request->password),
                'no_wa'                => $request->no_wa,
                'role'                 => $request->role,
                'status_akun'          => $request->status_akun ?? 'active',
                'user_salt'            => $salt,
                'salted_password_hash' => hash('sha256', $request->password . $salt),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pengguna baru berhasil ditambahkan.',
                'data'    => $user
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan pengguna.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-18: Menampilkan detail user berdasarkan ID (Show)
     */
    public function show($id)
    {
        try {
            $user = User::select('id_users', 'name', 'email', 'no_wa', 'role', 'status_akun', 'created_at')
                        ->where('id_users', $id)
                        ->first();

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Pengguna tidak ditemukan.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Detail pengguna berhasil diambil.',
                'data'    => $user
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
     * US-18: Memperbarui data user (Update)
     */
    public function update(UpdateUserRequest $request, $id)
    {
        try {
            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Pengguna tidak ditemukan.',
                ], 404);
            }

            $dataUpdate = [
                'name'        => $request->name,
                'email'       => $request->email,
                'no_wa'       => $request->no_wa,
                'role'        => $request->role,
                'status_akun' => $request->status_akun,
            ];

            // Jika password diisi, perbarui juga password dan hash-nya
            if ($request->filled('password')) {
                $salt = Str::random(16);
                $dataUpdate['password'] = Hash::make($request->password);
                $dataUpdate['user_salt'] = $salt;
                $dataUpdate['salted_password_hash'] = hash('sha256', $request->password . $salt);
            }

            $user->update($dataUpdate);

            return response()->json([
                'success' => true,
                'message' => 'Data pengguna berhasil diperbarui.',
                'data'    => $user
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui data pengguna.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    /**
     * US-18: Menghapus user (Destroy)
     */
    public function destroy($id)
    {
        try {
            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Pengguna tidak ditemukan.',
                ], 404);
            }

            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'Pengguna berhasil dihapus.',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus pengguna.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
