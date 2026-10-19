<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Track Pendaftaran — Polibatam Verify</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://jsdelivr.net">
    <!-- Google Fonts (Plus Jakarta Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col justify-between text-slate-800">

    <!-- Top Navigation / Header -->
    <header
        class="w-full bg-white border-b border-slate-100 py-3.5 px-8 flex justify-between items-center sticky top-0 z-20">
        <!-- Logo Polibatam Verify -->
        <div class="flex items-center space-x-2">
            <div class="flex items-center text-sky-600 font-bold text-xl tracking-tight">
                <svg class="w-8 h-8 mr-1 text-sky-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
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
                <div
                    class="w-9 h-9 rounded-full bg-[#1e3a6d] text-white flex items-center justify-center font-bold text-xs">
                    FA
                </div>
                <div class="text-left hidden sm:block">
                    <p class="text-xs font-bold text-slate-800 leading-none">Fahad Arifin</p>
                    <span
                        class="text-[10px] font-semibold text-sky-600 bg-sky-50 px-1.5 py-0.5 rounded mt-1 inline-block">Admin
                        akademik</span>
                </div>
            </div>
            <a href="/logout"
                class="ml-2 border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold px-3.5 py-1.5 rounded-lg transition">
                Logout
            </a>
        </div>
    </header>

    <!-- Main Content Area with Sidebar -->
    <div class="flex-grow flex max-w-full">

        <!-- Sidebar Navigation -->
        <!-- Sidebar Navigation -->
        <aside
            class="w-64 bg-white border-r border-slate-100 p-6 hidden lg:flex flex-col justify-between flex-shrink-0 shadow-sm/5">
            <div class="space-y-6">
                <!-- Brand / Portal Title -->
                <div class="px-2">
                    <span class="text-[10px] font-extrabold text-sky-600 tracking-wider uppercase block">PORTAL
                        ADMIN</span>
                    <p class="text-xs text-slate-400 font-medium mt-0.5">Pendaftaran Mahasiswa 2026</p>
                </div>

                <!-- Main Navigation Links -->
                <nav class="space-y-1.5">
                    <a href="/admin/dashboard"
                        class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-compass text-base w-5 text-slate-400"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-file-lines text-base w-5 text-slate-400"></i>
                        <span>Data Pendaftaran</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-id-card text-base w-5 text-slate-400"></i>
                        <span>Verifikasi Akademik</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-credit-card text-base w-5 text-slate-400"></i>
                        <span>Verifikasi Keuangan</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-chart-bar text-base w-5 text-slate-400"></i>
                        <span>Laporan</span>
                    </a>

                    <!-- Menu Manajemen Data dengan Submenu Terbuka -->
                    <div class="pt-1">
                        <a href="#"
                            class="flex items-center justify-between text-slate-800 bg-slate-50/80 px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all duration-200">
                            <div class="flex items-center space-x-3">
                                <i class="fa-regular fa-gear text-base w-5 text-sky-600"></i>
                                <span>Manajemen Data</span>
                            </div>
                            <i class="fa-solid fa-chevron-down text-[10px] text-slate-400"></i>
                        </a>

                        <!-- Submenu Items dengan Aksen Garis Kiri -->
                        <div class="pl-3.5 pt-2 space-y-1 border-l-2 border-sky-100 ml-4 mt-1">
                            <a href="#"
                                class="flex items-center space-x-3 bg-[#1e3a6d] text-white px-3 py-2 rounded-lg text-xs font-semibold shadow-sm transition-all duration-200">
                                <span>Kelola Track</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 px-3 py-2 rounded-lg text-xs font-medium transition-all duration-200">
                                <span>Peminatan/Prodi</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 px-3 py-2 rounded-lg text-xs font-medium transition-all duration-200">
                                <span>FAQ</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 px-3 py-2 rounded-lg text-xs font-medium transition-all duration-200">
                                <span>Landing Page</span>
                            </a>
                        </div>
                    </div>

                    <a href="#"
                        class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa fa-history text-base w-5 text-slate-400"></i>
                        <span>Audit Log</span>
                    </a>
                </nav>
            </div>

            <!-- Enhanced Sidebar Info Box (Panduan Admin) -->
            <div
                class="bg-gradient-to-br from-sky-50/80 to-indigo-50/30 border border-sky-100 rounded-2xl p-4 text-xs mt-6 relative overflow-hidden group">
                <!-- Background decorative circle -->
                <div
                    class="absolute -right-4 -bottom-4 w-16 h-16 bg-sky-200/30 rounded-full blur-xl group-hover:bg-sky-300/40 transition-all">
                </div>

                <div class="text-sky-600 text-base mb-2 flex items-center justify-between">
                    <i class="fa-regular fa-circle-question text-sky-500"></i>
                    <span
                        class="text-[9px] bg-white/80 text-sky-700 font-bold px-1.5 py-0.5 rounded-full border border-sky-100">Bantuan</span>
                </div>
                <h5 class="font-bold text-slate-800 text-xs mb-1">Panduan Admin</h5>
                <p class="text-slate-500 text-[11px] leading-relaxed mb-3">Kelola pengajuan dengan teliti dan pastikan
                    sinkronisasi data kuota sudah sesuai.</p>
                <a href="#"
                    class="text-sky-600 font-bold text-[11px] hover:text-sky-700 hover:underline inline-flex items-center gap-1.5 transition-all">
                    <span>Buka dokumentasi</span>
                    <i class="fa-solid fa-arrow-right text-[9px] transition-transform group-hover:translate-x-0.5"></i>
                </a>
            </div>
        </aside>
        <!-- Main Body Content -->
        <main class="flex-grow p-6 lg:p-8 overflow-y-auto">

            <!-- Breadcrumb -->
            <div class="text-xs text-slate-400 mb-2">
                <span>Portal Admin</span>
                <span class="mx-1">›</span>
                <span>Manajemen Data</span>
                <span class="mx-1">›</span>
                <span class="text-slate-700 font-medium">Kelola Track</span>
            </div>

            <!-- Page Title & Action Header -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-900">Kelola Track Pendaftaran</h1>
                    <p class="text-xs text-slate-500 mt-1">Atur jalur pendaftaran beserta periode dan status aktifnya.
                    </p>
                </div>
                <button onclick="openTrackModal()"
                    class="bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold px-4 py-2.5 rounded-xl text-xs flex items-center gap-2 shadow-sm transition">
                    <i class="fa-solid fa-plus text-xs"></i> Tambah Track
                </button>
            </div>

            <!-- Filter & Search Section -->
            <div
                class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm mb-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="relative w-full md:w-80">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-xs">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" id="searchTrackInput" placeholder="Cari nama track..."
                        class="w-full pl-9 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 text-slate-800">
                </div>

                <div class="flex items-center space-x-4 w-full md:w-auto justify-end">
                    <div class="flex items-center space-x-2 text-xs text-slate-500">
                        <select id="statusFilter"
                            class="bg-slate-50 border border-slate-200 rounded-xl text-xs py-2 px-3 focus:outline-none focus:border-sky-500 text-slate-800">
                            <option value="">Semua Status</option>
                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>
                        </select>
                    </div>
                    <button type="button" onclick="resetFilter()"
                        class="text-xs font-semibold text-slate-600 hover:text-slate-800 flex items-center gap-1.5 px-3 py-2 rounded-xl bg-slate-50 border border-slate-200 transition">
                        <i class="fa-solid fa-arrows-rotate text-[11px]"></i> Reset
                    </button>
                </div>
            </div>

            <!-- Track Data Table -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden mb-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr
                                class="bg-slate-50/70 border-b border-slate-100 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                                <th class="px-6 py-3.5">NAMA TRACK</th>
                                <th class="px-6 py-3.5">DESKRIPSI</th>
                                <th class="px-6 py-3.5">TANGGAL MULAI</th>
                                <th class="px-6 py-3.5">TANGGAL SELESAI</th>
                                <th class="px-6 py-3.5 text-center">STATUS</th>
                                <th class="px-6 py-3.5 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody id="trackTableBody" class="divide-y divide-slate-100 text-xs">
                            <tr>
                                <td colspan="6" class="px-6 py-8 text-center text-slate-400">
                                    <i class="fa-solid fa-spinner fa-spin mr-2"></i> Memuat data track pendaftaran...
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Table Pagination Footer -->
                <div
                    class="p-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                    <div id="paginationInfo">
                        Menampilkan <span class="font-bold text-slate-800">1–5</span> dari <span
                            class="font-bold text-slate-800">5</span> track pendaftaran
                    </div>
                    <div class="flex items-center space-x-1">
                        <button
                            class="px-3 py-1.5 border border-slate-200 rounded-lg text-slate-400 hover:bg-slate-50 cursor-not-allowed">‹
                            Previous</button>
                        <button class="px-3 py-1.5 bg-[#1e3a6d] text-white font-bold rounded-lg">1</button>
                        <button
                            class="px-3 py-1.5 border border-slate-200 rounded-lg text-slate-700 hover:bg-slate-50">Next
                            ›</button>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Footer Page -->
    <footer
        class="w-full bg-white border-t border-slate-100 py-4 px-8 flex justify-between items-center text-xs text-slate-400">
        <div>© 2026 Polibatam Verify. Hak cipta dilindungi.</div>
        <div>Politeknik Negeri Batam</div>
    </footer>


    <!-- ================= MODAL TAMBAH / EDIT TRACK ================= -->
    <div id="trackModal"
        class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div
            class="bg-white rounded-2xl max-w-lg w-full p-6 md:p-8 shadow-xl border border-slate-100 relative max-h-[90vh] overflow-y-auto">

            <!-- Close Modal Icon -->
            <button onclick="closeTrackModal()"
                class="absolute top-6 right-6 text-slate-400 hover:text-slate-600 text-lg">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <!-- Modal Header -->
            <div class="mb-6">
                <h3 id="modalTrackTitle" class="text-xl font-extrabold text-slate-900">Edit Track Pendaftaran</h3>
                <p class="text-xs text-slate-400 mt-1">Perbarui informasi dan periode pendaftaran track.</p>
            </div>

            <form id="trackForm" class="space-y-4">
                <input type="hidden" id="trackId" name="trackId">

                <!-- Nama Track -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Nama Track</label>
                    <input type="text" id="nama_track" placeholder="Contoh: Jalur Prestasi"
                        class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800"
                        required>
                </div>

                <!-- Deskripsi Track -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Deskripsi</label>
                    <textarea id="deskripsi" rows="3" placeholder="Tuliskan deskripsi ringkas jalur pendaftaran ini..."
                        class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800 leading-relaxed"></textarea>
                </div>

                <!-- Periode Tanggal Mulai & Selesai -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Tanggal Mulai</label>
                        <input type="date" id="tgl_mulai"
                            class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 text-slate-800">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Tanggal Selesai</label>
                        <input type="date" id="tgl_selesai"
                            class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 text-slate-800">
                    </div>
                </div>

                <!-- Toggle Switch Status Track -->
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <div>
                        <label class="block text-xs font-bold text-slate-700">Status Track</label>
                        <p class="text-[11px] text-slate-400 mt-0.5">Aktifkan agar pendaftar dapat memilih jalur ini
                        </p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="is_active" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#1e3a6d]">
                            </div>
                        </label>
                        <span id="activeStatusLabel"
                            class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">Aktif</span>
                    </div>
                </div>

                <!-- Modal Action Buttons -->
                <div class="flex items-center justify-end space-x-3 pt-6 border-t border-slate-100">
                    <button type="button" onclick="closeTrackModal()"
                        class="px-4 py-2.5 border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold rounded-xl text-xs transition">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-5 py-2.5 bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold rounded-xl text-xs shadow-sm transition">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Helper JS untuk Modal & UI Interaktif -->
    <script>
        function openTrackModal() {
            document.getElementById('trackForm').reset();
            document.getElementById('trackId').value = '';
            document.getElementById('modalTrackTitle').innerText = 'Tambah Track Pendaftaran';
            document.getElementById('is_active').checked = true;
            updateStatusLabel(true);
            document.getElementById('trackModal').classList.remove('hidden');
        }

        function closeTrackModal() {
            document.getElementById('trackModal').classList.add('hidden');
        }

        document.getElementById('is_active').addEventListener('change', function() {
            updateStatusLabel(this.checked);
        });

        function updateStatusLabel(isActive) {
            const label = document.getElementById('activeStatusLabel');
            if (isActive) {
                label.innerText = 'Aktif';
                label.className = 'text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded';
            } else {
                label.innerText = 'Nonaktif';
                label.className = 'text-xs font-bold text-slate-500 bg-slate-100 px-2 py-0.5 rounded';
            }
        }

        function resetFilter() {
            document.getElementById('searchTrackInput').value = '';
            document.getElementById('statusFilter').value = '';
        }
    </script>

    <!-- Script REST API yang Disesuaikan (Read, Edit Detail, CUD menggunakan Admin/Public yang tepat) -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // URL Public untuk READ Index
            const publicApiUrl = '/api/v1/tracks';
            // URL Admin untuk Show Detail, Store, Update, dan Delete
            const adminApiUrl = '/api/v1/admin/tracks';

            // 1. Load Data Track saat halaman dimuat (Public API - GET /api/v1/tracks)
            fetchTracks();

            async function fetchTracks() {
                try {
                    const response = await fetch(publicApiUrl, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        renderTable(result.data);
                    } else {
                        console.error('Gagal memuat data track:', result.message);
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            }

            // Render data ke dalam tabel HTML
            function renderTable(tracks) {
                const tableBody = document.getElementById('trackTableBody');
                if (!tableBody) return;

                tableBody.innerHTML = '';

                if (!tracks || tracks.length === 0) {
                    tableBody.innerHTML =
                        `<tr><td colspan="6" class="px-6 py-6 text-center text-slate-400">Tidak ada data track pendaftaran.</td></tr>`;
                    return;
                }

                tracks.forEach((track) => {
                    const isActive = track.is_active == 1 || track.is_active === true;

                    const toggleBg = isActive ? 'bg-[#1e3a6d]' : 'bg-slate-300';
                    const toggleTranslate = isActive ? 'translate-x-4' : 'translate-x-0';
                    const badgeText = isActive ? 'Aktif' : 'Nonaktif';
                    const badgeStyle = isActive ?
                        'bg-emerald-50 text-emerald-600 font-semibold' :
                        'bg-slate-100 text-slate-500 font-medium';

                    const tglMulai = track.tgl_mulai || '1 Okt 2026';
                    const tglSelesai = track.tgl_selesai || '30 Nov 2026';
                    // Pastikan id menggunakan primary key yang sesuai (id_track atau id)
                    const trackId = track.id_track || track.id;

                    tableBody.innerHTML += `
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="px-6 py-4 font-bold text-slate-800 leading-snug">
                                ${track.nama_track}
                            </td>
                            <td class="px-6 py-4 text-slate-500 max-w-xs truncate" title="${track.deskripsi || '-'}">
                                ${track.deskripsi || '-'}
                            </td>
                            <td class="px-6 py-4 text-slate-700 font-medium">
                                ${tglMulai}
                            </td>
                            <td class="px-6 py-4 text-slate-700 font-medium">
                                ${tglSelesai}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="inline-flex items-center space-x-2">
                                    <div class="w-8 h-4 ${toggleBg} rounded-full p-0.5 flex items-center transition-colors">
                                        <div class="w-3 h-3 bg-white rounded-full shadow-sm transform ${toggleTranslate} transition-transform"></div>
                                    </div>
                                    <span class="px-2 py-0.5 text-[11px] rounded-md ${badgeStyle}">
                                        ${badgeText}
                                    </span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center space-x-2 text-slate-400">
                                    <button onclick="editTrack(${trackId})" class="hover:text-slate-700 transition" title="Edit Track">
                                        <i class="fa-regular fa-pen-to-square text-sm"></i>
                                    </button>
                                    <button onclick="deleteTrack(${trackId})" class="hover:text-rose-600 transition" title="Hapus Track">
                                        <i class="fa-regular fa-trash-can text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    `;
                });
            }

            // 2. Simpan Track Baru / Update (Admin API)
            const trackForm = document.getElementById('trackForm');
            if (trackForm) {
                trackForm.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    const trackId = document.getElementById('trackId').value;
                    const nama_track = document.getElementById('nama_track').value;
                    const deskripsi = document.getElementById('deskripsi').value;
                    const is_active = document.getElementById('is_active').checked ? 1 : 0;

                    const method = trackId ? 'PUT' : 'POST';
                    const url = trackId ? `${adminApiUrl}/${trackId}` : adminApiUrl;

                    const payload = {
                        nama_track,
                        deskripsi,
                        is_active
                    };

                    try {
                        const response = await fetch(url, {
                            method: method,
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify(payload)
                        });

                        const result = await response.json();

                        if (response.ok && result.success) {
                            alert(result.message);
                            trackForm.reset();
                            document.getElementById('trackId').value = '';
                            closeTrackModal();
                            fetchTracks();
                        } else {
                            let errMsg = result.message || 'Validasi gagal.';
                            if (result.errors) {
                                errMsg += '\n' + Object.values(result.errors).flat().join('\n');
                            }
                            alert(errMsg);
                        }
                    } catch (error) {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan koneksi.');
                    }
                });
            }

            // 3. Ambil Detail untuk Edit (Diubah menggunakan Admin API agar aman dari pembatasan akses/route show)
            window.editTrack = async function(id) {
                try {
                    const response = await fetch(`${adminApiUrl}/${id}`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        const track = result.data;
                        document.getElementById('trackId').value = track.id_track || track.id;
                        document.getElementById('nama_track').value = track.nama_track;
                        document.getElementById('deskripsi').value = track.deskripsi || '';

                        const isActive = track.is_active == 1 || track.is_active === true;
                        document.getElementById('is_active').checked = isActive;
                        updateStatusLabel(isActive);

                        document.getElementById('modalTrackTitle').innerText = 'Edit Track Pendaftaran';
                        document.getElementById('trackModal').classList.remove('hidden');
                    } else {
                        alert(result.message || 'Data track pelatihan tidak ditemukan.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Gagal mengambil data detail track.');
                }
            };

            // 4. Hapus Track (Admin API)
            window.deleteTrack = async function(id) {
                if (!confirm('Apakah Anda yakin ingin menghapus track pelatihan ini?')) return;

                try {
                    const response = await fetch(`${adminApiUrl}/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        alert(result.message);
                        fetchTracks();
                    } else {
                        alert(result.message || 'Gagal menghapus track.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan koneksi.');
                }
            };
        });
    </script>
</body>

</html>
