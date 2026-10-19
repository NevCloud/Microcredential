<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * US-02: Login Pengguna
     */
    public function login(LoginRequest $request)
    {
        try {
            // Cari data user berdasarkan email
            $user = User::where('email', $request->email)->first();

            // Cek apakah user ada dan password-nya cocok
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email atau password salah.',
                ], 401);
            }

            // Cek status akun aktif atau tidak
            if ($user->status_akun !== 'active') {
                return response()->json([
                    'success' => false,
                    'message' => 'Akun Anda sedang tidak aktif atau diblokir.',
                ], 403);
            }

            // Berhasil login (mengembalikan data profil dan role untuk diarahkan ke dashboard masing-masing)
            return response()->json([
                'success' => true,
                'message' => 'Login berhasil.',
                'data'    => [
                    'user' => [
                        'id_users'    => $user->id_users,
                        'name'        => $user->name,
                        'email'       => $user->email,
                        'no_wa'       => $user->no_wa,
                        'role'        => $user->role, // Menentukan arah dashboard (peserta, admin, keuangan, super_admin)
                        'status_akun' => $user->status_akun,
                    ]
                ]
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem saat proses login.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
