<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * US-03: Logout Pengguna
     */
    public function logout(Request $request)
    {
        try {
            // Karena menggunakan pendekatan stateless (tanpa Sanctum),
            // server memberikan respons sukses agar sisi Client (Web/Mobile)
            // dapat langsung menghapus session / token yang tersimpan di local storage/secure storage.

            return response()->json([
                'success' => true,
                'message' => 'Logout berhasil. Sesi pengguna telah diakhiri.',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem saat proses logout.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
