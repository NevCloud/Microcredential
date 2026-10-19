<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Peminatan — Polibatam Verify</title>

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
                    FA
                </div>
                <div class="text-left hidden sm:block">
                    <p class="text-xs font-bold text-slate-800 leading-none">Fahad Arifin</p>
                    <span class="text-[10px] font-semibold text-sky-600 bg-sky-50 px-1.5 py-0.5 rounded mt-1 inline-block">Admin akademik</span>
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
                    <span class="text-[10px] font-bold text-sky-600 tracking-wider uppercase block">PORTAL ADMIN</span>
                    <p class="text-xs text-slate-400 font-medium">Pendaftaran 2026</p>
                </div>

                <nav class="space-y-1.5">
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-compass text-base w-5"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-file-lines text-base w-5"></i>
                        <span>Data Pendaftaran</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-id-card text-base w-5"></i>
                        <span>Verifikasi Akademik</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-credit-card text-base w-5"></i>
                        <span>Verifikasi Keuangan</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-chart-bar text-base w-5"></i>
                        <span>Laporan</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-gear text-base w-5"></i>
                        <span>Pengaturan</span>
                    </a>

                    <!-- Submenu Active Item -->
                    <div class="pl-4 pt-1 space-y-1">
                        <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2 rounded-xl text-xs font-medium transition">
                            <span>kelola track</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 bg-[#1e3a6d] text-white px-3 py-2.5 rounded-xl text-xs font-semibold shadow-sm transition">
                            <span>Peminatan</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2 rounded-xl text-xs font-medium transition">
                            <span>FAQ</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2 rounded-xl text-xs font-medium transition">
                            <span>Landing Page</span>
                        </a>
                    </div>
                </nav>
            </div>

            <!-- Sidebar Info Box -->
            <div class="bg-sky-50/60 border border-sky-100/80 rounded-2xl p-4 text-xs mt-6">
                <div class="text-sky-600 text-lg mb-2">
                    <i class="fa-regular fa-message"></i>
                </div>
                <h5 class="font-bold text-slate-800 text-xs mb-1">Panduan admin</h5>
                <p class="text-slate-500 text-[11px] leading-relaxed mb-3">Kelola pengajuan dengan teliti dan simpan catatan verifikasi.</p>
                <a href="#" class="text-sky-600 font-bold text-[11px] hover:underline inline-flex items-center gap-1">
                    Buka panduan <i class="fa-solid fa-arrow-right text-[9px]"></i>
                </a>
            </div>
        </aside>

        <!-- Main Body Content -->
        <main class="flex-grow p-6 lg:p-8 overflow-y-auto space-y-6">

            <!-- Breadcrumb -->
            <div class="text-xs text-slate-400 mb-2">
                <span>Portal Admin</span>
                <span class="mx-1">›</span>
                <span>Pengaturan</span>
                <span class="mx-1">›</span>
                <span class="text-slate-700 font-medium">Peminatan</span>
            </div>

            <!-- Page Title & Action Header -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-900">Kelola Peminatan</h1>
                    <p class="text-xs text-slate-500 mt-1">Kelola peminatan dan kuota penerimaan.</p>
                </div>
                <button onclick="openPeminatanModal()" class="bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold px-4 py-2.5 rounded-xl text-xs flex items-center gap-2 shadow-sm transition">
                    <i class="fa-solid fa-plus text-xs"></i> Tambah Peminatan
                </button>
            </div>

            <!-- Section 1: Top Summary Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">TOTAL PEMINATAN</p>
                        <h3 id="statTotalPeminatan" class="text-2xl font-black text-slate-900 mt-1">6</h3>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-cubes"></i>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">TOTAL KUOTA TERSEDIA</p>
                        <h3 id="statTotalKuota" class="text-2xl font-black text-slate-900 mt-1">211</h3>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">TERVERIFIKASI MASUK</p>
                        <h3 id="statTerverifikasi" class="text-2xl font-black text-slate-900 mt-1">120</h3>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">OKUPANSI KESELURUHAN</p>
                        <h3 id="statOkupansi" class="text-2xl font-black text-slate-900 mt-1">56.8%</h3>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                </div>
            </div>

            <!-- Section 2: Filter & Search Bar -->
            <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="relative w-full md:w-80">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-xs">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" id="searchPeminatanInput" placeholder="Cari nama peminatan..." class="w-full pl-9 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 text-slate-800">
                </div>

                <div class="flex items-center space-x-3 w-full md:w-auto justify-end">
                    <select id="trackFilter" class="bg-slate-50 border border-slate-200 rounded-xl text-xs py-2 px-3 focus:outline-none focus:border-sky-500 text-slate-800">
                        <option value="">Track: Semua Track</option>
                    </select>

                    <select id="statusFilter" class="bg-slate-50 border border-slate-200 rounded-xl text-xs py-2 px-3 focus:outline-none focus:border-sky-500 text-slate-800">
                        <option value="">Status: Semua</option>
                        <option value="1">Aktif</option>
                        <option value="0">Nonaktif</option>
                    </select>

                    <button type="button" onclick="resetFilters()" class="text-xs font-semibold text-slate-600 hover:text-slate-800 p-2 rounded-xl bg-slate-50 border border-slate-200 transition" title="Reset Filter">
                        <i class="fa-solid fa-arrows-rotate text-[11px]"></i>
                    </button>
                </div>
            </div>

            <!-- Section 3: Data Table -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-100 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                                <th class="px-6 py-3.5">NAMA PEMINATAN</th>
                                <th class="px-6 py-3.5">TRACK</th>
                                <th class="px-6 py-3.5 text-center">KUOTA MINIMAL</th>
                                <th class="px-6 py-3.5 w-48">TERISI</th>
                                <th class="px-6 py-3.5 text-center">STATUS</th>
                                <th class="px-6 py-3.5 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody id="peminatanTableBody" class="divide-y divide-slate-100 text-xs">
                            <tr>
                                <td colspan="6" class="px-6 py-8 text-center text-slate-400">
                                    <i class="fa-solid fa-spinner fa-spin mr-2"></i> Memuat data peminatan...
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Table Pagination Footer -->
                <div class="p-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                    <div id="peminatanCountInfo">
                        Menampilkan data peminatan
                    </div>
                    <div class="flex items-center space-x-1">
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg text-slate-400 hover:bg-slate-50 cursor-not-allowed">‹ Sebelumnya</button>
                        <button class="px-3 py-1.5 bg-[#1e3a6d] text-white font-bold rounded-lg">1</button>
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg text-slate-700 hover:bg-slate-50">Berikutnya ›</button>
                    </div>
                </div>
            </div>

            <!-- Bottom Sync Alert Banner -->
            <div class="bg-sky-50/70 border border-sky-100 rounded-2xl p-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 text-xs">
                <div class="flex items-start space-x-3">
                    <i class="fa-regular fa-circle-info text-sky-600 text-base mt-0.5 flex-shrink-0"></i>
                    <div>
                        <h5 class="font-bold text-slate-800">Sinkronisasi Kuota Pendaftaran</h5>
                        <p class="text-slate-500 text-[11px] mt-0.5">Perubahan kuota atau penonaktifan peminatan akan berdampak instan pada formulir pilihan calon mahasiswa pada Jalur Penerimaan aktif.</p>
                    </div>
                </div>
                <button class="bg-white border border-slate-200 text-slate-700 font-bold px-4 py-2 rounded-xl shadow-sm hover:bg-slate-50 transition whitespace-nowrap text-xs">
                    Unduh Rekap Kuota (CSV)
                </button>
            </div>

        </main>
    </div>

    <!-- Footer Page -->
    <footer class="w-full bg-white border-t border-slate-100 py-4 px-8 flex justify-between items-center text-xs text-slate-400">
        <div>© 2026 Polibatam Verify. Hak cipta dilindungi.</div>
        <div>Politeknik Negeri Batam</div>
    </footer>


    <!-- ================= MODAL TAMBAH / EDIT PEMINATAN ================= -->
    <div id="peminatanModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white rounded-2xl max-w-lg w-full p-6 md:p-8 shadow-xl border border-slate-100 relative max-h-[90vh] overflow-y-auto">

            <!-- Close Modal Icon -->
            <button onclick="closePeminatanModal()" class="absolute top-6 right-6 text-slate-400 hover:text-slate-600 text-lg">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <!-- Modal Header -->
            <div class="mb-6">
                <h3 id="modalPeminatanTitle" class="text-xl font-extrabold text-slate-900">Tambah Peminatan Baru</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan program peminatan dan kuota penerimaan calon mahasiswa.</p>
            </div>

            <!-- Form ID: peminatanForm -->
            <form id="peminatanForm" class="space-y-4">
                <!-- Hidden Input ID Peminatan -->
                <input type="hidden" id="peminatanId" name="peminatanId">

                <!-- Track Pendaftaran Dropdown -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Track Pendaftaran <span class="text-rose-500">*</span></label>
                    <select id="id_track" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" required>
                        <option value="">Pilih track pendaftaran...</option>
                    </select>
                </div>

                <!-- Nama Peminatan -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Nama Peminatan <span class="text-rose-500">*</span></label>
                    <input type="text" id="nama_peminatan" placeholder="Contoh: Rekayasa Keamanan Siber" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" required>
                </div>

                <!-- Kuota Minimal Penerimaan (DIUBAH DARI 'kuota' MENJADI 'kuota_minimal') -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Kuota Minimal Penerimaan <span class="text-rose-500">*</span></label>
                    <input type="number" id="kuota_minimal" placeholder="Contoh: 30" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" required min="1">
                </div>

                <!-- Biaya Formulir & Biaya Pendaftaran -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Biaya Formulir (Rp)</label>
                        <input type="number" id="biaya_formulir" placeholder="Contoh: 150000" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" min="0">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Biaya Pendaftaran / Penyelenggaraan (Rp)</label>
                        <input type="number" id="biaya_penyelenggaraan" placeholder="Contoh: 2500000" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" min="0">
                    </div>
                </div>

                <!-- Status Peminatan Toggle Switch -->
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <div>
                        <label class="block text-xs font-bold text-slate-700">Status Peminatan</label>
                        <p class="text-[11px] text-slate-400 mt-0.5">Aktifkan agar peminatan ini dapat dipilih calon pendaftar</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="is_active" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#1e3a6d]"></div>
                        </label>
                        <span id="peminatanStatusBadge" class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">Aktif</span>
                    </div>
                </div>

                <!-- Modal Action Buttons -->
                <div class="flex items-center justify-end space-x-3 pt-6 border-t border-slate-100">
                    <button type="button" onclick="closePeminatanModal()" class="px-4 py-2.5 border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold rounded-xl text-xs transition">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2.5 bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold rounded-xl text-xs shadow-sm transition">
                        Simpan Peminatan
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Helper JS untuk Modal & UI Switch -->
    <script>
        function openPeminatanModal() {
            const form = document.getElementById('peminatanForm');
            if(form) form.reset();
            document.getElementById('peminatanId').value = '';
            document.getElementById('modalPeminatanTitle').innerText = 'Tambah Peminatan Baru';
            document.getElementById('is_active').checked = true;
            updateModalStatusLabel(true);
            document.getElementById('peminatanModal').classList.remove('hidden');
        }

        function closePeminatanModal() {
            document.getElementById('peminatanModal').classList.add('hidden');
        }

        document.getElementById('is_active').addEventListener('change', function() {
            updateModalStatusLabel(this.checked);
        });

        function updateModalStatusLabel(isActive) {
            const label = document.getElementById('peminatanStatusBadge');
            if (isActive) {
                label.innerText = 'Aktif';
                label.className = 'text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded';
            } else {
                label.innerText = 'Nonaktif';
                label.className = 'text-xs font-bold text-slate-500 bg-slate-100 px-2 py-0.5 rounded';
            }
        }

        function resetFilters() {
            document.getElementById('searchPeminatanInput').value = '';
            document.getElementById('trackFilter').value = '';
            document.getElementById('statusFilter').value = '';
        }
    </script>


    <!-- Script REST API JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const publicApiUrl = '/api/v1/peminatan';
            const publicTrackUrl = '/api/v1/tracks';
            const adminApiUrl = '/api/v1/admin/peminatan';

            fetchTracksForDropdown();
            fetchPeminatan();

            async function fetchTracksForDropdown() {
                try {
                    const response = await fetch(publicTrackUrl, {
                        method: 'GET',
                        headers: { 'Accept': 'application/json' }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        const tracks = result.data;
                        const modalSelect = document.getElementById('id_track');
                        const filterSelect = document.getElementById('trackFilter');

                        if (modalSelect) {
                            modalSelect.innerHTML = '<option value="">Pilih track pendaftaran...</option>';
                            tracks.forEach(t => {
                                const tId = t.id_track || t.id;
                                modalSelect.innerHTML += `<option value="${tId}">${t.nama_track}</option>`;
                            });
                        }

                        if (filterSelect) {
                            filterSelect.innerHTML = '<option value="">Track: Semua Track</option>';
                            tracks.forEach(t => {
                                const tId = t.id_track || t.id;
                                filterSelect.innerHTML += `<option value="${tId}">${t.nama_track}</option>`;
                            });
                        }
                    }
                } catch (error) {
                    console.error('Error fetching tracks dropdown:', error);
                }
            }

            async function fetchPeminatan() {
                try {
                    const response = await fetch(publicApiUrl, {
                        method: 'GET',
                        headers: { 'Accept': 'application/json' }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        renderTable(result.data);
                    } else {
                        console.error('Gagal memuat data peminatan:', result.message);
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            }

            function renderTable(items) {
                const tableBody = document.getElementById('peminatanTableBody');
                if (!tableBody) return;

                tableBody.innerHTML = '';

                if (!items || items.length === 0) {
                    tableBody.innerHTML = `<tr><td colspan="6" class="px-6 py-6 text-center text-slate-400">Tidak ada data peminatan.</td></tr>`;
                    return;
                }

                items.forEach((item) => {
                    const peminatanId = item.id_peminatan || item.id;
                    const namaPeminatan = item.nama_peminatan || item.peminatan;
                    const trackName = item.track?.nama_track || item.nama_track || 'Jalur Reguler';

                    const kuota = parseInt(item.kuota_minimal || item.kuota || item.kapasitas) || 30;
                    const terisi = parseInt(item.terisi || item.jumlah_pendaftar || 0);
                    const percent = Math.min(Math.round((terisi / kuota) * 100), 100);

                    const isActive = item.is_active == 1 || item.is_active === true;
                    const statusBadge = isActive
                        ? `<span class="bg-emerald-50 text-emerald-600 font-bold px-2.5 py-1 rounded-full text-[11px] inline-flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Aktif</span>`
                        : `<span class="bg-slate-100 text-slate-500 font-medium px-2.5 py-1 rounded-full text-[11px] inline-flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-slate-400 rounded-full"></span> Nonaktif</span>`;

                    let trackBadgeStyle = 'bg-sky-50 text-sky-700 border-sky-100';
                    if (trackName.includes('Prestasi')) trackBadgeStyle = 'bg-indigo-50 text-indigo-700 border-indigo-100';
                    if (trackName.includes('KIP')) trackBadgeStyle = 'bg-amber-50 text-amber-700 border-amber-100';
                    if (trackName.includes('Mandiri')) trackBadgeStyle = 'bg-purple-50 text-purple-700 border-purple-100';

                    tableBody.innerHTML += `
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="px-6 py-4 font-extrabold text-slate-800 leading-snug">
                                ${namaPeminatan}
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-semibold border ${trackBadgeStyle}">
                                    ${trackName}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center font-bold text-slate-800">
                                ${kuota}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-between text-[11px] font-bold text-slate-700 mb-1">
                                    <span>${terisi} / ${kuota} ${percent >= 100 ? '<span class="text-xs text-rose-500 font-bold ml-1">(Penuh)</span>' : ''}</span>
                                    <span class="text-slate-400 font-mono">${percent}%</span>
                                </div>
                                <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden">
                                    <div class="bg-[#1e3a6d] h-1.5 rounded-full" style="width: ${percent}%"></div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                ${statusBadge}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center space-x-2 text-slate-400">
                                    <button onclick="editPeminatan(${peminatanId})" class="hover:text-slate-700 transition" title="Edit Peminatan">
                                        <i class="fa-regular fa-pen-to-square text-sm"></i>
                                    </button>
                                    <button onclick="deletePeminatan(${peminatanId})" class="hover:text-rose-600 transition" title="Hapus Peminatan">
                                        <i class="fa-regular fa-trash-can text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    `;
                });
            }

            const peminatanForm = document.getElementById('peminatanForm');
            if (peminatanForm) {
                peminatanForm.addEventListener('submit', async function (e) {
                    e.preventDefault();

                    const peminatanId = document.getElementById('peminatanId').value;
                    const id_track = document.getElementById('id_track').value;
                    const nama_peminatan = document.getElementById('nama_peminatan').value;
                    const kuota_minimal = document.getElementById('kuota_minimal').value;
                    const biaya_formulir = document.getElementById('biaya_formulir').value;
                    const biaya_penyelenggaraan = document.getElementById('biaya_penyelenggaraan').value;
                    const is_active = document.getElementById('is_active').checked ? 1 : 0;

                    const method = peminatanId ? 'PUT' : 'POST';
                    const url = peminatanId ? `${adminApiUrl}/${peminatanId}` : adminApiUrl;

                    const payload = {
                        id_track,
                        nama_peminatan,
                        kuota_minimal: parseInt(kuota_minimal),
                        biaya_formulir: biaya_formulir ? parseFloat(biaya_formulir) : 0,
                        biaya_penyelenggaraan: biaya_penyelenggaraan ? parseFloat(biaya_penyelenggaraan) : 0,
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
                            alert(result.message || 'Data peminatan berhasil disimpan.');
                            peminatanForm.reset();
                            document.getElementById('peminatanId').value = '';
                            closePeminatanModal();
                            fetchPeminatan();
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

            window.editPeminatan = async function (id) {
                try {
                    const response = await fetch(`${adminApiUrl}/${id}`, {
                        method: 'GET',
                        headers: { 'Accept': 'application/json' }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        const item = result.data;
                        const targetId = item.id_peminatan || item.id;

                        document.getElementById('peminatanId').value = targetId;
                        document.getElementById('id_track').value = item.id_track || '';
                        document.getElementById('nama_peminatan').value = item.nama_peminatan || item.peminatan || '';
                        document.getElementById('kuota_minimal').value = item.kuota_minimal || item.kuota || item.kapasitas || '';
                        document.getElementById('biaya_formulir').value = item.biaya_formulir || '';
                        document.getElementById('biaya_penyelenggaraan').value = item.biaya_penyelenggaraan || '';

                        const isActive = item.is_active == 1 || item.is_active === true;
                        document.getElementById('is_active').checked = isActive;
                        updateModalStatusLabel(isActive);

                        document.getElementById('modalPeminatanTitle').innerText = 'Edit Peminatan';
                        document.getElementById('peminatanModal').classList.remove('hidden');
                    } else {
                        alert(result.message || 'Data peminatan tidak ditemukan.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Gagal mengambil detail data peminatan.');
                }
            };

            window.deletePeminatan = async function (id) {
                if (!confirm('Apakah Anda yakin ingin menghapus data peminatan ini?')) return;

                try {
                    const response = await fetch(`${adminApiUrl}/${id}`, {
                        method: 'DELETE',
                        headers: { 'Accept': 'application/json' }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        alert(result.message || 'Data peminatan berhasil dihapus.');
                        fetchPeminatan();
                    } else {
                        alert(result.message || 'Gagal menghapus peminatan.');
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
