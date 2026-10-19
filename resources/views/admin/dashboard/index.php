<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard System — Polibatam Verify</title>

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

    <!-- Top Navigation / Header -->
    <header class="w-full bg-white border-b border-slate-100 py-3.5 px-8 flex justify-between items-center sticky top-0 z-20">
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

        <!-- Center Nav Links -->
        <nav class="hidden md:flex items-center space-x-8 text-xs font-semibold text-slate-500">
            <a href="#" class="hover:text-slate-800 transition">Beranda</a>
            <a href="#" class="hover:text-slate-800 transition">Jalur Pendaftaran</a>
            <a href="#" class="hover:text-slate-800 transition">FAQ</a>
            <a href="#" class="hover:text-slate-800 transition">Kontak</a>
        </nav>

        <!-- User Profile Header -->
        <div class="flex items-center space-x-4">
            <button class="text-slate-400 hover:text-slate-600 relative">
                <i class="fa-regular fa-bell text-lg"></i>
                <span class="absolute -top-1 -right-1 w-2 h-2 bg-sky-500 rounded-full"></span>
            </button>
            <div class="flex items-center space-x-3 pl-2">
                <div class="w-9 h-9 rounded-full bg-[#1e3a6d] text-white flex items-center justify-center font-bold text-xs">
                    CA
                </div>
                <div class="text-left hidden sm:block">
                    <p class="text-xs font-bold text-slate-800 leading-none">Citra Aulia</p>
                    <span class="text-[10px] font-semibold text-sky-600 bg-sky-50 px-1.5 py-0.5 rounded mt-1 inline-block">SuperAdmin</span>
                </div>
            </div>
            <a href="/logout" class="ml-2 border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold px-3.5 py-1.5 rounded-lg transition">
                Logout
            </a>
        </div>
    </header>

    <!-- Main Content Area with Sidebar -->
    <div class="flex-grow flex max-w-full">

        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-white border-r border-slate-100 p-6 hidden lg:flex flex-col justify-between flex-shrink-0">
            <div class="space-y-6">
                <div>
                    <span class="text-[10px] font-bold text-sky-600 tracking-wider uppercase block">PORTAL SUPER ADMIN</span>
                    <p class="text-xs text-slate-400 font-medium">Pendaftaran 2026</p>
                </div>

                <nav class="space-y-1.5">
                    <a href="#" class="flex items-center space-x-3 bg-[#1e3a6d] text-white px-3 py-2.5 rounded-xl text-xs font-semibold shadow-sm transition">
                        <i class="fa-solid fa-compass text-base w-5"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="/admin/users-management" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-user text-base w-5"></i>
                        <span>Kelola User</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-clock-rotate-left text-base w-5"></i>
                        <span>Audit Log</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-solid fa-arrows-rotate text-base w-5 text-slate-400"></i>
                        <span>Registrasi Otomatis</span>
                    </a>
                </nav>
            </div>

            <!-- Sidebar Info Box -->
            <div class="bg-sky-50/60 border border-sky-100/80 rounded-2xl p-4 text-xs">
                <div class="text-sky-600 text-lg mb-2">
                    <i class="fa-regular fa-message"></i>
                </div>
                <h5 class="font-bold text-slate-800 text-xs mb-1">Panduan super admin</h5>
                <p class="text-slate-500 text-[11px] leading-relaxed mb-3">Pantau sistem, kelola akun, dan periksa jejak audit secara berkala</p>
                <a href="#" class="text-sky-600 font-bold text-[11px] hover:underline inline-flex items-center gap-1">
                    Buka panduan <i class="fa-solid fa-arrow-right text-[9px]"></i>
                </a>
            </div>
        </aside>

        <!-- Main Body Content -->
        <main class="flex-grow p-6 lg:p-8 overflow-y-auto space-y-6">

            <!-- Breadcrumb & Status Bar Header -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <div class="text-xs text-slate-400 mb-1">
                        <span>Portal Super Admin</span>
                        <span class="mx-1">›</span>
                        <span class="text-slate-700 font-medium">Dashboard</span>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900">Dashboard System</h1>
                    <p class="text-xs text-slate-500 mt-1">Kondisi sistem dan ringkasan akun terdaftar.</p>
                </div>

                <!-- Status System Badge -->
                <div class="flex items-center space-x-3 bg-white px-4 py-2 rounded-xl border border-slate-100 shadow-sm text-xs">
                    <span class="flex items-center gap-1.5 bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full font-semibold">
                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Semua layanan normal
                    </span>
                    <span class="text-slate-400 text-[11px]">
                        <i class="fa-regular fa-clock mr-1"></i> Diperbarui 6 Okt 2026, 14.52 WIB
                    </span>
                </div>
            </div>

            <!-- Section 1: Kesehatan Sistem -->
            <div>
                <div class="flex justify-between items-center mb-3">
                    <h3 class="text-sm font-bold text-slate-800">Kesehatan Sistem</h3>
                    <span class="text-[11px] text-slate-400 font-mono">Node: srv-core-01.polibatam.ac.id</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- CPU Usage -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center text-xs font-bold text-slate-500">
                                <span>CPU USAGE</span>
                                <i class="fa-solid fa-microchip text-slate-400"></i>
                            </div>
                            <div class="text-3xl font-black text-slate-900 mt-2">34%</div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden mb-2">
                                <div class="bg-[#1e3a6d] h-1.5 rounded-full" style="width: 34%"></div>
                            </div>
                            <div class="flex justify-between items-center text-[11px] text-slate-400">
                                <span>8 core</span>
                                <span>Load avg: 0.82</span>
                            </div>
                        </div>
                    </div>

                    <!-- Memory Usage -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center text-xs font-bold text-slate-500">
                                <span>MEMORY USAGE</span>
                                <i class="fa-solid fa-memory text-slate-400"></i>
                            </div>
                            <div class="text-3xl font-black text-slate-900 mt-2">62%</div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden mb-2">
                                <div class="bg-[#1e3a6d] h-1.5 rounded-full" style="width: 62%"></div>
                            </div>
                            <div class="flex justify-between items-center text-[11px] text-slate-400">
                                <span>9,9 GB dari 16 GB</span>
                                <span>Free: 6,1 GB</span>
                            </div>
                        </div>
                    </div>

                    <!-- Database Connections -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center text-xs font-bold text-slate-500">
                                <span>DATABASE CONNECTIONS</span>
                                <i class="fa-solid fa-database text-slate-400"></i>
                            </div>
                            <div class="text-3xl font-black text-slate-900 mt-2">48 <span class="text-lg font-normal text-slate-400">/200</span></div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden mb-2">
                                <div class="bg-sky-500 h-1.5 rounded-full" style="width: 24%"></div>
                            </div>
                            <div class="flex justify-between items-center text-[11px]">
                                <span class="text-emerald-600 font-semibold flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Pool normal
                                </span>
                                <span class="text-slate-400">PostgreSQL 15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Status Layanan -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-slate-100 flex justify-between items-center">
                    <div>
                        <h3 class="text-sm font-bold text-slate-800">Status Layanan</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Pemantauan ketersediaan komponen utama infrastruktur</p>
                    </div>
                    <span class="text-[11px] text-slate-500 bg-slate-50 border border-slate-200/60 px-3 py-1 rounded-lg">
                        Interval cek: 60 detik
                    </span>
                </div>

                <div class="divide-y divide-slate-100 text-xs">
                    <!-- Item 1 -->
                    <div class="p-4 flex items-center justify-between hover:bg-slate-50/50 transition">
                        <div class="flex items-center space-x-3.5">
                            <div class="text-slate-500 text-base w-6 text-center">
                                <i class="fa-regular fa-window-maximize"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs">Aplikasi Web</h4>
                                <p class="text-[11px] text-slate-400">Frontend Client & Gateway SSR</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="text-right">
                                <span class="font-bold text-slate-800">18 ms</span>
                                <p class="text-[10px] text-slate-400">Latensi</p>
                            </div>
                            <span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full text-[11px] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Normal
                            </span>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="p-4 flex items-center justify-between hover:bg-slate-50/50 transition">
                        <div class="flex items-center space-x-3.5">
                            <div class="text-slate-500 text-base w-6 text-center">
                                <i class="fa-solid fa-circle-nodes"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs">API</h4>
                                <p class="text-[11px] text-slate-400">REST Endpoints & Authentication API</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="text-right">
                                <span class="font-bold text-slate-800">24 ms</span>
                                <p class="text-[10px] text-slate-400">Latensi</p>
                            </div>
                            <span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full text-[11px] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Normal
                            </span>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="p-4 flex items-center justify-between hover:bg-slate-50/50 transition">
                        <div class="flex items-center space-x-3.5">
                            <div class="text-slate-500 text-base w-6 text-center">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs">Database</h4>
                                <p class="text-[11px] text-slate-400">Primary Cluster Read/Write</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="text-right">
                                <span class="font-bold text-slate-800">8 ms</span>
                                <p class="text-[10px] text-slate-400">Latensi</p>
                            </div>
                            <span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full text-[11px] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Normal
                            </span>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="p-4 flex items-center justify-between hover:bg-slate-50/50 transition">
                        <div class="flex items-center space-x-3.5">
                            <div class="text-slate-500 text-base w-6 text-center">
                                <i class="fa-regular fa-folder-open"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs">Penyimpanan Berkas</h4>
                                <p class="text-[11px] text-slate-400">S3 Compatible Storage (Dokumen Siswa)</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="text-right">
                                <span class="font-bold text-slate-800">42 ms</span>
                                <p class="text-[10px] text-slate-400">Latensi</p>
                            </div>
                            <span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full text-[11px] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Normal
                            </span>
                        </div>
                    </div>

                    <!-- Item 5 (Warning Status) -->
                    <div class="p-4 flex items-center justify-between hover:bg-slate-50/50 transition">
                        <div class="flex items-center space-x-3.5">
                            <div class="text-slate-500 text-base w-6 text-center">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs">Layanan Email</h4>
                                <p class="text-[11px] text-amber-600 font-medium">Antrean pengiriman tertunda · SMTP Outbox</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="text-right">
                                <span class="font-bold text-amber-600">820 ms</span>
                                <p class="text-[10px] text-slate-400">Latensi</p>
                            </div>
                            <span class="bg-amber-50 text-amber-600 px-2.5 py-1 rounded-full text-[11px] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 bg-amber-500 rounded-full"></span> Lambat
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Total Akun Terdaftar -->
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-sm font-bold text-slate-800">Total Akun Terdaftar</h3>
                        <div class="flex items-baseline space-x-2 mt-2">
                            <span class="text-3xl font-black text-slate-900">1.295</span>
                            <span class="text-xs text-slate-400 font-medium">akun</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-1">Total pengguna aktif dalam sistem Polibatam Verify</p>
                    </div>
                    <span class="text-[11px] text-slate-400">Sinkronisasi DB Terakhir: Realtime</span>
                </div>

                <!-- Progress Bar breakdown by Role -->
                <div class="space-y-4 text-xs">
                    <!-- User Pendaftar -->
                    <div class="bg-slate-50/70 rounded-xl p-3 border border-slate-100">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <span class="bg-slate-200 text-slate-700 font-bold px-2 py-0.5 rounded text-[10px]">User_Pendaftar</span>
                                <span class="text-slate-500 text-[11px]">Calon mahasiswa reguler & mitra</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="font-extrabold text-slate-800">1.284 akun</span>
                                <span class="text-[11px] text-slate-400 font-mono w-10 text-right">99.1%</span>
                            </div>
                        </div>
                        <div class="w-full bg-slate-200/80 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-[#1e3a6d] h-1.5 rounded-full" style="width: 99.1%"></div>
                        </div>
                    </div>

                    <!-- Admin Akademik -->
                    <div class="bg-slate-50/70 rounded-xl p-3 border border-slate-100">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <span class="bg-slate-200 text-slate-700 font-bold px-2 py-0.5 rounded text-[10px]">Admin_Akademik</span>
                                <span class="text-slate-500 text-[11px]">Verifikator berkas & program studi</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="font-extrabold text-slate-800">6 akun</span>
                                <span class="text-[11px] text-slate-400 font-mono w-10 text-right">0.5%</span>
                            </div>
                        </div>
                        <div class="w-full bg-slate-200/80 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-[#1e3a6d] h-1.5 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>

                    <!-- Admin Keuangan -->
                    <div class="bg-slate-50/70 rounded-xl p-3 border border-slate-100">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <span class="bg-slate-200 text-slate-700 font-bold px-2 py-0.5 rounded text-[10px]">Admin_Keuangan</span>
                                <span class="text-slate-500 text-[11px]">Validasi pembayaran registrasi & UKT</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="font-extrabold text-slate-800">3 akun</span>
                                <span class="text-[11px] text-slate-400 font-mono w-10 text-right">0.2%</span>
                            </div>
                        </div>
                        <div class="w-full bg-slate-200/80 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-[#1e3a6d] h-1.5 rounded-full" style="width: 8%"></div>
                        </div>
                    </div>

                    <!-- Administrator -->
                    <div class="bg-slate-50/70 rounded-xl p-3 border border-slate-100">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <span class="bg-slate-200 text-slate-700 font-bold px-2 py-0.5 rounded text-[10px]">Administrator</span>
                                <span class="text-slate-500 text-[11px]">Akses teknis Super Admin sistem</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="font-extrabold text-slate-800">2 akun</span>
                                <span class="text-[11px] text-slate-400 font-mono w-10 text-right">0.2%</span>
                            </div>
                        </div>
                        <div class="w-full bg-slate-200/80 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-[#1e3a6d] h-1.5 rounded-full" style="width: 5%"></div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Footer Page -->
    <footer class="w-full bg-white border-t border-slate-100 py-4 px-8 flex justify-between items-center text-xs text-slate-400">
        <div>© 2026 Polibatam Verify. Hak cipta dilindungi.</div>
        <div>Politeknik Negeri Batam</div>
    </footer>

</body>
</html>
