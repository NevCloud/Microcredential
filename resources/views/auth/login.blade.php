<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Polibatam Verify</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts (Plus Jakarta Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between text-slate-800">

    <!-- Header / Navbar -->
    <header class="w-full bg-white border-b border-slate-100 py-4 px-8 flex justify-between items-center">
        <!-- Logo Polibatam Verify -->
        <div class="flex items-center space-x-2">
            <div class="flex items-center text-sky-600 font-bold text-xl tracking-tight">
                <svg class="w-8 h-8 mr-1 text-sky-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                <span class="text-slate-800">polibatam</span>
                <span class="text-sky-500 font-normal ml-1">Verify</span>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="flex items-center space-x-8 text-sm font-medium text-slate-500">
            <a href="#" class="hover:text-slate-800 transition">Beranda</a>
            <a href="#" class="hover:text-slate-800 transition">Panduan Pendaftaran</a>
        </nav>
    </header>

    <!-- Main Content Container -->
    <main class="flex-grow flex items-center justify-center p-6 md:p-12">
        <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

            <!-- Left Card - Banner Informasi -->
            <div class="lg:col-span-5 bg-gradient-to-br from-sky-50 to-blue-50/50 rounded-2xl p-8 md:p-10 flex flex-col justify-between border border-sky-100/60 shadow-sm">
                <div>
                    <!-- Subheader Tag -->
                    <div class="flex items-center space-x-2 mb-6">
                        <span class="w-4 h-0.5 bg-sky-500 rounded-full"></span>
                        <span class="text-xs font-bold tracking-wider text-sky-600 uppercase">POLITEKNIK NEGERI BATAM</span>
                    </div>

                    <!-- Title -->
                    <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight mb-4">
                        Satu akun,<br>lanjutkan langkah Anda.
                    </h1>

                    <!-- Description -->
                    <p class="text-slate-500 text-sm leading-relaxed mb-8">
                        Akses pendaftaran, lengkapi berkas, dan pantau proses verifikasi melalui Polibatam Verify.
                    </p>

                    <!-- Features List -->
                    <div class="space-y-6">
                        <!-- Feature 1 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-100 flex items-center justify-center text-sky-500 shadow-sm flex-shrink-0">
                                <i class="fa-regular fa-bookmark text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Pembelajaran terapan</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Kembangkan kompetensi melalui praktik dan proyek.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-100 flex items-center justify-center text-sky-500 shadow-sm flex-shrink-0">
                                <i class="fa-regular fa-handshake text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Dekat dengan dunia industri</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Kenali bidang yang relevan dengan kebutuhan kerja.</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-100 flex items-center justify-center text-sky-500 shadow-sm flex-shrink-0">
                                <i class="fa-solid fa-layer-group text-lg text-sky-500"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Pilihan bidang yang beragam</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Temukan program sesuai minat dan rencana Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Text Inside Left Banner -->
                <div class="mt-12 text-xs text-slate-400">
                    Sistem verifikasi microcredential Politeknik Negeri Batam
                </div>
            </div>

            <!-- Right Card - Form Login -->
            <div class="lg:col-span-7 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm flex flex-col justify-between">
                <div>
                    <!-- Subheader -->
                    <span class="text-xs font-bold text-sky-600 tracking-wider uppercase mb-1 block">SELAMAT DATANG KEMBALI</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-1">Masuk ke akun Anda</h2>
                    <p class="text-xs text-slate-400 mb-6">Masuk untuk memantau status pendaftaran dan melanjutkan proses Anda.</p>

                    <!-- Toggle Button (Masuk / Daftar Akun) -->
                    <div class="bg-slate-100/70 p-1 rounded-xl flex items-center mb-6">
                        <button type="button" class="w-1/2 py-2.5 text-center text-sm font-semibold bg-white text-slate-800 rounded-lg shadow-sm border border-slate-100">Masuk</button>
                        <a href="/register" class="w-1/2 py-2.5 text-center text-sm font-semibold text-slate-500 hover:text-slate-700 transition">Daftar Akun</a>
                    </div>

                    <!-- Form Input Login -->
                    <form id="loginForm" class="space-y-4">

                        <!-- Email / Username -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Email / Username</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-sm">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                <input type="email" id="email" placeholder="Contoh: nama@polibatam.ac.id" class="w-full pl-10 pr-4 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-sky-500 focus:bg-white transition text-slate-800" required>
                            </div>
                        </div>

                        <!-- Kata Sandi -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Kata Sandi</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-sm">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input type="password" id="password" placeholder="Masukkan kata sandi" class="w-full pl-10 pr-10 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-sky-500 focus:bg-white transition text-slate-800" required>
                                <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-slate-600 text-sm">
                                    <i id="toggleIcon" class="fa-regular fa-eye-slash"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Ingat Saya & Lupa Password -->
                        <div class="flex items-center justify-between pt-1">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" id="remember" class="rounded border-slate-300 text-slate-800 focus:ring-slate-800 accent-slate-800" checked>
                                <span class="text-xs font-medium text-slate-600">Ingat Saya</span>
                            </label>
                            <a href="#" class="text-xs font-bold text-sky-600 hover:underline">Lupa Password?</a>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold py-3 rounded-xl shadow-sm text-sm transition mt-4">
                            Masuk Ke Sistem
                        </button>
                    </form>
                </div>

                <!-- Footer Link & Warning Text -->
                <div>
                    <div class="text-center mt-6 text-xs text-slate-500">
                        Belum punya akun? <a href="/register" class="font-bold text-sky-600 hover:underline">Daftar akun</a>
                    </div>
                    <div class="flex items-center justify-center space-x-1.5 mt-4 text-[11px] text-slate-400">
                        <i class="fa-regular fa-shield-halved"></i>
                        <span>Jangan bagikan kata sandi Anda kepada siapa pun.</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer Page -->
    <footer class="w-full bg-white border-t border-slate-100 py-4 px-8 flex justify-between items-center text-xs text-slate-400">
        <div>© 2026 Polibatam Verify. Hak cipta dilindungi.</div>
        <div>Politeknik Negeri Batam</div>
    </footer>

    <!-- Toggle Password Visibility Script -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

    <!-- Script Integrasi REST API Login -->
    <script>
        document.getElementById('loginForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            // 1. Ambil nilai dari input form login
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                // 2. Kirim data ke endpoint REST API Login Backend
                const response = await fetch('/api/v1/auth/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        email,
                        password
                    })
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    // 3. Login Berhasil
                    alert('Login berhasil! Selamat datang, ' + result.data.user.name);

                    // Simpan data user / role ke localStorage (opsional untuk frontend)
                    localStorage.setItem('user_data', JSON.stringify(result.data.user));

                    // 4. Arahkan (Redirect) berdasarkan role user
                    const role = result.data.user.role;
                    if (role === 'super_admin' || role === 'admin') {
                        window.location.href = '/admin/dashboard'; // Sesuaikan route dashboard admin Anda
                    } else if (role === 'keuangan') {
                        window.location.href = '/keuangan/dashboard'; // Sesuaikan route dashboard keuangan
                    } else {
                        window.location.href = '/dashboard'; // Dashboard peserta
                    }

                } else {
                    // 5. Jika gagal (Email/password salah atau akun tidak aktif)
                    alert(result.message || 'Gagal login. Periksa kembali email dan password Anda.');
                }

            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan koneksi ke server.');
            }
        });
    </script>
</body>
</html>
