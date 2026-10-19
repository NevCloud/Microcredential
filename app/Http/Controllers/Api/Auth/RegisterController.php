<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * US-01: Registrasi Akun Peserta Didik Baru (Tanpa Sanctum)
     */
    public function register(RegisterRequest $request)
    {
        try {
            // Membuat salt acak untuk keamanan tambahan sesuai skema tabel users
            $salt = Str::random(16);

            $user = User::create([
                'name'                 => $request->name,
                'email'                => $request->email,
                'password'             => Hash::make($request->password),
                'no_wa'                => $request->no_wa,
                'role'                 => 'peserta', // Default role peserta
                'status_akun'          => 'active',
                'user_salt'            => $salt,
                'salted_password_hash' => hash('sha256', $request->password . $salt),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Registrasi akun peserta berhasil.',
                'data'    => [
                    'user' => [
                        'id_users'    => $user->id_users,
                        'name'        => $user->name,
                        'email'       => $user->email,
                        'no_wa'       => $user->no_wa,
                        'role'        => $user->role,
                        'status_akun' => $user->status_akun,
                    ]
                ]
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem saat registrasi.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
