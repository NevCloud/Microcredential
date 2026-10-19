<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun — Polibatam Verify</title>

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
        <div class="flex items-center space-x-2">
            <div class="flex items-center text-sky-600 font-bold text-xl tracking-tight">
                <svg class="w-8 h-8 mr-1 text-sky-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                <span class="text-slate-800">polibatam</span>
                <span class="text-sky-500 font-normal ml-1">Verify</span>
            </div>
        </div>
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
                    <div class="flex items-center space-x-2 mb-6">
                        <span class="w-4 h-0.5 bg-sky-500 rounded-full"></span>
                        <span class="text-xs font-bold tracking-wider text-sky-600 uppercase">POLITEKNIK NEGERI BATAM</span>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight mb-4">
                        Langkah awal untuk masa depan Anda.
                    </h1>

                    <p class="text-slate-500 text-sm leading-relaxed mb-8">
                        Mulai perjalanan belajar di Polibatam. Buat akun untuk memilih program dan mengelola pendaftaran Anda.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-100 flex items-center justify-center text-sky-500 shadow-sm flex-shrink-0">
                                <i class="fa-regular fa-bookmark text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Pembelajaran terapan</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Kembangkan kompetensi melalui praktik dan proyek.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-100 flex items-center justify-center text-sky-500 shadow-sm flex-shrink-0">
                                <i class="fa-regular fa-handshake text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Dekat dengan dunia industri</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Kenali bidang yang relevan dengan kebutuhan kerja.</p>
                            </div>
                        </div>

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

                <div class="mt-12 text-xs text-slate-400">
                    Sistem verifikasi microcredential Politeknik Negeri Batam
                </div>
            </div>

            <!-- Right Card - Form Registrasi -->
            <div class="lg:col-span-7 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm flex flex-col justify-between">
                <div>
                    <span class="text-xs font-bold text-sky-600 tracking-wider uppercase mb-1 block">AKUN PENDAFTAR</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-1">Registrasi Akun</h2>
                    <p class="text-xs text-slate-400 mb-6">Daftarkan diri Anda untuk memulai pendaftaran di Polibatam Verify.</p>

                    <!-- Toggle Button (Masuk / Daftar Akun) -->
                    <div class="bg-slate-50 p-1 rounded-xl flex items-center mb-6">
                        <a href="/login" class="w-1/2 py-2.5 text-center text-sm font-semibold text-slate-500 hover:text-slate-700 transition">Masuk</a>
                        <button type="button" class="w-1/2 py-2.5 text-center text-sm font-semibold bg-white text-slate-800 rounded-lg shadow-sm border border-slate-100">Daftar Akun</button>
                    </div>

                    <!-- Form Input dengan ID untuk Fetch API -->
                    <form id="registerForm" class="space-y-4">

                        <!-- Nama Lengkap -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Nama Lengkap</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-sm">
                                    <i class="fa-regular fa-user"></i>
                                </span>
                                <input type="text" id="name" placeholder="Masukkan nama lengkap" class="w-full pl-10 pr-4 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-sky-500 focus:bg-white transition text-slate-800" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Email</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-sm">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                <input type="email" id="email" placeholder="nama@polibatam.ac.id" class="w-full pl-10 pr-10 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-sky-500 focus:bg-white transition text-slate-800" required>
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-emerald-500 text-sm">
                                    <i class="fa-regular fa-circle-check"></i>
                                </span>
                            </div>
                            <p class="text-[11px] text-emerald-600 font-medium mt-1.5 flex items-center gap-1">
                                <i class="fa-solid fa-check text-[10px]"></i> Format email valid
                            </p>
                        </div>

                        <!-- Nomor WhatsApp (Ditambahkan sesuai script JS) -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Nomor WhatsApp</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-sm">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </span>
                                <input type="text" id="no_wa" placeholder="08xxxxxxxxxx" class="w-full pl-10 pr-4 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-sky-500 focus:bg-white transition text-slate-800" required>
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
                            </div>
                            <div class="grid grid-cols-3 gap-2 mt-2">
                                <div class="h-1 bg-emerald-500 rounded-full"></div>
                                <div class="h-1 bg-emerald-500 rounded-full"></div>
                                <div class="h-1 bg-emerald-500 rounded-full"></div>
                            </div>
                            <div class="flex justify-between items-center text-[11px] mt-1 text-slate-400">
                                <span>Weak</span>
                                <span>Medium</span>
                                <span class="font-bold text-emerald-600">Strong • Kuat</span>
                            </div>
                        </div>

                        <!-- Konfirmasi Kata Sandi -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Konfirmasi Kata Sandi</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-sm">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input type="password" id="password_confirmation" placeholder="Ulangi kata sandi" class="w-full pl-10 pr-10 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-sky-500 focus:bg-white transition text-slate-800" required>
                            </div>
                            <p class="text-[11px] text-emerald-600 font-medium mt-1.5">Kata sandi cocok</p>
                        </div>

                        <!-- Checkbox Terms & Conditions -->
                        <div class="flex items-start space-x-2 pt-2">
                            <input type="checkbox" id="terms" class="mt-0.5 rounded border-slate-300 text-slate-800 focus:ring-slate-800 accent-slate-800" required checked>
                            <label for="terms" class="text-xs text-slate-600 leading-snug">
                                Saya menyetujui <a href="#" class="font-bold text-sky-600 hover:underline">Syarat & Ketentuan</a> serta <a href="#" class="font-bold text-sky-600 hover:underline">Kebijakan Privasi</a> Polibatam Verify.
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold py-3 rounded-xl shadow-sm text-sm transition mt-4">
                            Buat Akun
                        </button>
                    </form>
                </div>

                <div class="text-center mt-6 text-xs text-slate-500">
                    Sudah punya akun? <a href="/login" class="font-bold text-sky-600 hover:underline">Masuk di sini</a>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer Page -->
    <footer class="w-full bg-white border-t border-slate-100 py-4 px-8 flex justify-between items-center text-xs text-slate-400">
        <div>© 2026 Polibatam Verify. Hak cipta dilindungi.</div>
        <div>Politeknik Negeri Batam</div>
    </footer>

    <!-- Script Integrasi REST API -->
    <script>
        document.getElementById('registerForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            // Ambil nilai dari input form HTML
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const password_confirmation = document.getElementById('password_confirmation').value;
            const no_wa = document.getElementById('no_wa').value;

            try {
                // Kirim data ke REST API backend Laravel
                const response = await fetch('/api/v1/auth/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        name,
                        email,
                        password,
                        password_confirmation,
                        no_wa
                    })
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    alert('Registrasi berhasil! Silakan login.');
                    window.location.href = '/login';
                } else {
                    let errorMessage = result.message || 'Terjadi kesalahan.';
                    if (result.errors) {
                        errorMessage += '\n' + Object.values(result.errors).flat().join('\n');
                    }
                    alert(errorMessage);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Gagal terhubung ke server.');
            }
        });
    </script>
</body>
</html>
