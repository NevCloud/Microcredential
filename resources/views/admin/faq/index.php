<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola FAQ — Polibatam Verify</title>

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
        <div class="flex items-center space-x-2">
            <div class="flex items-center text-sky-600 font-bold text-xl tracking-tight">
                <svg class="w-8 h-8 mr-1 text-sky-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
                <span class="text-slate-800">polibatam</span>
                <span class="text-sky-500 font-normal ml-1">Verify</span>
            </div>
        </div>

        <nav class="hidden md:flex items-center space-x-8 text-xs font-semibold text-slate-500">
            <a href="#" class="hover:text-slate-800 transition">Beranda</a>
            <a href="#" class="hover:text-slate-800 transition">Jalur Pendaftaran</a>
            <a href="#" class="hover:text-slate-800 transition">FAQ</a>
            <a href="#" class="hover:text-slate-800 transition">Kontak</a>
        </nav>

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
        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-white border-r border-slate-100 p-6 hidden lg:flex flex-col justify-between flex-shrink-0 shadow-sm/5">
            <div class="space-y-6">
                <!-- Brand / Portal Title -->
                <div class="px-2">
                    <span class="text-[10px] font-extrabold text-sky-600 tracking-wider uppercase block">PORTAL ADMIN</span>
                    <p class="text-xs text-slate-400 font-medium mt-0.5">Pendaftaran Mahasiswa 2026</p>
                </div>

                <!-- Main Navigation Links -->
                <nav class="space-y-1.5">
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-compass text-base w-5 text-slate-400"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-file-lines text-base w-5 text-slate-400"></i>
                        <span>Data Pendaftaran</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-id-card text-base w-5 text-slate-400"></i>
                        <span>Verifikasi Akademik</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-credit-card text-base w-5 text-slate-400"></i>
                        <span>Verifikasi Keuangan</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50/80 hover:text-slate-900 px-3.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-200">
                        <i class="fa-regular fa-chart-bar text-base w-5 text-slate-400"></i>
                        <span>Laporan</span>
                    </a>

                    <!-- Menu Manajemen Data dengan Submenu Terbuka -->
                    <div class="pt-1">
                        <a href="#" class="flex items-center justify-between text-slate-800 bg-slate-50/80 px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all duration-200">
                            <div class="flex items-center space-x-3">
                                <!-- Ikon diperbaiki menggunakan fa-solid fa-database agar pasti muncul -->
                                <i class="fa-solid fa-database text-base w-5 text-sky-600"></i>
                                <span>Manajemen Data</span>
                            </div>
                            <i class="fa-solid fa-chevron-down text-[10px] text-slate-400"></i>
                        </a>

                        <!-- Submenu Items dengan Aksen Garis Kiri -->
                        <div class="pl-3.5 pt-2 space-y-1 border-l-2 border-sky-100 ml-4 mt-1">
                            <a href="#" class="flex items-center space-x-3 bg-[#1e3a6d] text-white px-3 py-2 rounded-lg text-xs font-semibold shadow-sm transition-all duration-200">
                                <span>Kelola Track</span>
                            </a>
                            <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 px-3 py-2 rounded-lg text-xs font-medium transition-all duration-200">
                                <span>Peminatan/Prodi</span>
                            </a>
                            <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 px-3 py-2 rounded-lg text-xs font-medium transition-all duration-200">
                                <span>FAQ</span>
                            </a>
                            <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 px-3 py-2 rounded-lg text-xs font-medium transition-all duration-200">
                                <span>Landing Page</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Enhanced Sidebar Info Box (Panduan Admin) -->
            <div class="bg-gradient-to-br from-sky-50/80 to-indigo-50/30 border border-sky-100 rounded-2xl p-4 text-xs mt-6 relative overflow-hidden group">
                <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-sky-200/30 rounded-full blur-xl group-hover:bg-sky-300/40 transition-all"></div>

                <div class="text-sky-600 text-base mb-2 flex items-center justify-between">
                    <i class="fa-regular fa-circle-question text-sky-500"></i>
                    <span class="text-[9px] bg-white/80 text-sky-700 font-bold px-1.5 py-0.5 rounded-full border border-sky-100">Bantuan</span>
                </div>
                <h5 class="font-bold text-slate-800 text-xs mb-1">Panduan Admin</h5>
                <p class="text-slate-500 text-[11px] leading-relaxed mb-3">Kelola pengajuan dengan teliti dan pastikan sinkronisasi data kuota sudah sesuai.</p>
                <a href="#" class="text-sky-600 font-bold text-[11px] hover:text-sky-700 hover:underline inline-flex items-center gap-1.5 transition-all">
                    <span>Buka dokumentasi</span>
                    <i class="fa-solid fa-arrow-right text-[9px] transition-transform group-hover:translate-x-0.5"></i>
                </a>
            </div>
        </aside>

        <!-- Main Body Content (Grid Layout: Kiri Tabel FAQ, Kanan Form Edit/Tambah FAQ) -->
        <main class="flex-grow p-6 lg:p-8 overflow-y-auto">

            <!-- Breadcrumb -->
            <div class="text-xs text-slate-400 mb-2">
                <span>Portal Admin</span>
                <span class="mx-1">›</span>
                <span>Manajemen Data</span>
                <span class="mx-1">›</span>
                <span class="text-slate-700 font-medium">FAQ</span>
            </div>

            <!-- Page Title & Action Header -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-900">Kelola FAQ</h1>
                    <p class="text-xs text-slate-500 mt-1">Atur urutan tampilan pertanyaan dan isi jawabannya.</p>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="/faq" target="_blank" class="border border-slate-200 hover:bg-slate-50 text-slate-700 font-semibold px-4 py-2.5 rounded-xl text-xs flex items-center gap-2 shadow-sm transition">
                        <i class="fa-regular fa-eye text-xs"></i> Pratinjau Publik
                    </a>
                    <button onclick="resetFormToCreate()" class="bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold px-4 py-2.5 rounded-xl text-xs flex items-center gap-2 shadow-sm transition">
                        <i class="fa-solid fa-plus text-xs"></i> Tambah FAQ
                    </button>
                </div>
            </div>

            <!-- Grid Konten Utama: Kolom Kiri (Tabel) & Kolom Kanan (Form Card) -->
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-8 items-start">

                <!-- KOLOM KIRI: Tabel FAQ (Span 7) -->
                <div class="xl:col-span-7 space-y-4">

                    <!-- Notifikasi Urutan Otomatis -->
                    <div class="bg-sky-50/80 border border-sky-100 rounded-2xl p-3.5 flex items-center justify-between text-xs text-sky-900">
                        <div class="flex items-center space-x-2.5">
                            <i class="fa-solid fa-grip-vertical text-sky-500"></i>
                            <span>Seret baris untuk mengubah urutan tampil di halaman FAQ publik.</span>
                        </div>
                        <span class="bg-sky-100 text-sky-700 px-2.5 py-1 rounded-full font-semibold text-[11px] inline-flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 bg-sky-500 rounded-full animate-pulse"></span> Urutan tersimpan otomatis
                        </span>
                    </div>

                    <!-- Tabel FAQ -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-slate-50/70 border-b border-slate-100 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                                        <th class="px-4 py-3.5 text-center w-12">NO</th>
                                        <th class="px-4 py-3.5">PERTANYAAN</th>
                                        <th class="px-4 py-3.5">KATEGORI</th>
                                        <th class="px-4 py-3.5 text-center">TAMPIL</th>
                                        <th class="px-4 py-3.5 text-center">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody id="faqTableBody" class="divide-y divide-slate-100 text-xs">
                                    <tr>
                                        <td colspan="5" class="px-6 py-8 text-center text-slate-400">
                                            <i class="fa-solid fa-spinner fa-spin mr-2"></i> Memuat data FAQ...
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Footer Tabel -->
                        <div class="p-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                            <div>
                                Menampilkan <span id="faqCountInfo" class="font-bold text-slate-800">0</span> pertanyaan FAQ aktif
                            </div>
                            <div class="flex items-center space-x-1 text-emerald-600 font-medium">
                                <i class="fa-regular fa-circle-check"></i>
                                <span>Perubahan posisi akan langsung terlihat oleh pendaftar</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: Form Edit / Tambah FAQ (Span 5) -->
                <div class="xl:col-span-5 bg-white rounded-2xl border border-slate-100 shadow-sm p-6 sticky top-20">

                    <!-- Header Form Card -->
                    <div class="flex justify-between items-start pb-4 border-b border-slate-100 mb-5">
                        <div>
                            <div class="flex items-center space-x-2">
                                <h3 id="formCardTitle" class="text-base font-extrabold text-slate-900">Edit FAQ</h3>
                                <span id="faqIdBadge" class="bg-slate-100 text-slate-600 font-mono px-2 py-0.5 rounded text-[10px] font-bold">ID #FAQ-000</span>
                            </div>
                            <p id="formCardSubtitle" class="text-xs text-slate-400 mt-0.5">Memperbarui FAQ terpilih.</p>
                        </div>
                        <button type="button" onclick="resetFormToCreate()" class="text-slate-400 hover:text-slate-600 text-xs font-semibold">
                            Reset Form
                        </button>
                    </div>

                    <!-- Form ID: faqForm -->
                    <form id="faqForm" class="space-y-4">
                        <!-- Hidden Input ID FAQ -->
                        <input type="hidden" id="faqId" name="faqId">

                        <!-- Pertanyaan -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Pertanyaan <span class="text-rose-500">*</span></label>
                            <input type="text" id="pertanyaan" placeholder="Contoh: Berkas apa yang harus saya unggah?" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" required>
                        </div>

                        <!-- Kategori (Opsional / Tambahan sesuai UI Referensi) -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Kategori <span class="text-rose-500">*</span></label>
                            <select id="kategori" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800">
                                <option value="Persyaratan">Persyaratan</option>
                                <option value="Berkas">Berkas</option>
                                <option value="Pembayaran">Pembayaran</option>
                                <option value="Verifikasi">Verifikasi</option>
                                <option value="Jadwal">Jadwal</option>
                            </select>
                        </div>

                        <!-- Urutan Tampil -->
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Urutan Nomor Tampil</label>
                            <input type="number" id="urutan" placeholder="1" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800">
                        </div>

                        <!-- Jawaban -->
                        <div>
                            <div class="flex justify-between items-center mb-1.5">
                                <label class="block text-xs font-bold text-slate-700">Jawaban <span class="text-rose-500">*</span></label>
                                <span class="text-[10px] text-slate-400">Mendukung format list & link</span>
                            </div>
                            <textarea id="jawaban" rows="6" placeholder="Tuliskan jawaban lengkap di sini..." class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800 leading-relaxed" required></textarea>
                            <div class="flex justify-between items-center mt-1 text-[11px] text-slate-400">
                                <span class="text-emerald-600 font-medium"><i class="fa-regular fa-circle-check"></i> Tersimpan</span>
                                <span>1.000 karakter</span>
                            </div>
                        </div>

                        <!-- Toggle Status Aktif / Tampilkan di Halaman FAQ -->
                        <div class="bg-slate-50 border border-slate-100 rounded-2xl p-4 flex items-center justify-between mt-2">
                            <div>
                                <h5 class="font-bold text-slate-800 text-xs">Tampilkan di halaman FAQ</h5>
                                <p class="text-[11px] text-slate-400 mt-0.5">Pertanyaan dapat dibaca langsung oleh calon mahasiswa</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span id="activeStatusBadgeText" class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">Aktif</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" id="is_active" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#1e3a6d]"></div>
                                </label>
                            </div>
                        </div>

                        <!-- Action Buttons Form -->
                        <div class="flex items-center justify-end space-x-3 pt-4 border-t border-slate-100">
                            <button type="button" onclick="resetFormToCreate()" class="px-4 py-2.5 border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold rounded-xl text-xs transition">
                                Batal
                            </button>
                            <button type="submit" class="px-5 py-2.5 bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold rounded-xl text-xs shadow-sm transition">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </main>
    </div>

    <!-- Footer Page -->
    <footer class="w-full bg-white border-t border-slate-100 py-4 px-8 flex justify-between items-center text-xs text-slate-400">
        <div>© 2026 Polibatam Verify. Hak cipta dilindungi.</div>
        <div>Politeknik Negeri Batam</div>
    </footer>


    <!-- ================= SCRIPT JAVASCRIPT & REST API ================= -->
    <script>
        // Fungsi helper untuk toggle status aktif di form
        document.getElementById('is_active').addEventListener('change', function() {
            const badge = document.getElementById('activeStatusBadgeText');
            if (this.checked) {
                badge.innerText = 'Aktif';
                badge.className = 'text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded';
            } else {
                badge.innerText = 'Nonaktif';
                badge.className = 'text-xs font-bold text-slate-500 bg-slate-100 px-2 py-0.5 rounded';
            }
        });

        function resetFormToCreate() {
            document.getElementById('faqForm').reset();
            document.getElementById('faqId').value = '';
            document.getElementById('formCardTitle').innerText = 'Tambah FAQ Baru';
            document.getElementById('formCardSubtitle').innerText = 'Tambahkan pertanyaan dan jawaban baru ke sistem.';
            document.getElementById('faqIdBadge').innerText = 'ID #NEW';
            document.getElementById('is_active').checked = true;
            document.getElementById('activeStatusBadgeText').innerText = 'Aktif';
            document.getElementById('activeStatusBadgeText').className = 'text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded';
        }

        document.addEventListener("DOMContentLoaded", function() {
            // R R (Read) menggunakan endpoint PUBLIK sesuai ketentuan ('/api/v1/faq')
            const publicApiUrl = '/api/v1/faq';
            // CUD (Create, Update, Delete) menggunakan endpoint ADMIN ('/api/v1/admin/faq')
            const adminApiUrl = '/api/v1/admin/faq';

            // 1. Load Data FAQ saat halaman dimuat (Index)
            fetchFaq();

            async function fetchFaq() {
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
                        console.error('Gagal memuat data FAQ:', result.message);
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            }

            // Render data ke dalam tabel HTML
            function renderTable(faqs) {
                const tableBody = document.getElementById('faqTableBody');
                const countInfo = document.getElementById('faqCountInfo');
                if (!tableBody) return;

                tableBody.innerHTML = '';

                if (!faqs || faqs.length === 0) {
                    tableBody.innerHTML = `<tr><td colspan="5" class="px-6 py-6 text-center text-slate-400">Tidak ada data FAQ tersedia.</td></tr>`;
                    if (countInfo) countInfo.innerText = '0';
                    return;
                }

                if (countInfo) countInfo.innerText = faqs.length;

                faqs.forEach((faq, index) => {
                    // Pastikan pengambilan ID akurat (mendukung id_faq atau id)
                    const faqId = faq.id_faq || faq.id;
                    const urutanNum = faq.urutan ?? (index + 1);
                    const isActive = faq.is_active == 1 || faq.is_active === true;

                    const toggleBg = isActive ? 'bg-[#1e3a6d]' : 'bg-slate-300';
                    const toggleTranslate = isActive ? 'translate-x-4' : 'translate-x-0';
                    const badgeText = isActive ? 'Aktif' : 'Nonaktif';
                    const badgeStyle = isActive ?
                        'bg-emerald-50 text-emerald-600 font-semibold' :
                        'bg-slate-100 text-slate-500 font-medium';

                    const kategoriBadge = faq.kategori ? `<span class="bg-sky-50 text-sky-700 px-2.5 py-1 rounded-md text-[11px] font-semibold border border-sky-100">${faq.kategori}</span>` : `<span class="text-slate-400">-</span>`;

                    tableBody.innerHTML += `
                        <tr class="hover:bg-slate-50/80 transition cursor-pointer" onclick="editFaq(${faqId})">
                            <td class="px-4 py-3.5 text-center font-mono font-bold text-slate-500">
                                <i class="fa-solid fa-grip-vertical text-slate-300 mr-1.5 text-[10px]"></i>${urutanNum}
                            </td>
                            <td class="px-4 py-3.5 font-bold text-slate-800 leading-snug">
                                ${faq.pertanyaan}
                            </td>
                            <td class="px-4 py-3.5">
                                ${kategoriBadge}
                            </td>
                            <td class="px-4 py-3.5 text-center">
                                <div class="inline-flex items-center space-x-2">
                                    <div class="w-8 h-4 ${toggleBg} rounded-full p-0.5 flex items-center transition-colors">
                                        <div class="w-3 h-3 bg-white rounded-full shadow-sm transform ${toggleTranslate} transition-transform"></div>
                                    </div>
                                    <span class="px-2 py-0.5 text-[11px] rounded-md ${badgeStyle}">
                                        ${badgeText}
                                    </span>
                                </div>
                            </td>
                            <td class="px-4 py-3.5 text-center" onclick="event.stopPropagation()">
                                <div class="flex items-center justify-center space-x-2">
                                    <button onclick="editFaq(${faqId})" class="p-1.5 hover:bg-slate-100 rounded-lg text-amber-600 transition" title="Edit FAQ">
                                        <i class="fa-regular fa-pen-to-square text-sm"></i>
                                    </button>
                                    <button onclick="deleteFaq(${faqId})" class="p-1.5 hover:bg-slate-100 rounded-lg text-rose-600 transition" title="Hapus FAQ">
                                        <i class="fa-regular fa-trash-can text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    `;
                });
            }

            // 2. Simpan FAQ Baru / Update (Store / Update menggunakan Admin API)
            const faqForm = document.getElementById('faqForm');
            if (faqForm) {
                faqForm.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    const faqId = document.getElementById('faqId').value;
                    const pertanyaan = document.getElementById('pertanyaan').value;
                    const jawaban = document.getElementById('jawaban').value;
                    const urutan = document.getElementById('urutan').value;
                    const kategori = document.getElementById('kategori').value;
                    const is_active = document.getElementById('is_active').checked ? 1 : 0;

                    const method = faqId ? 'PUT' : 'POST';
                    const url = faqId ? `${adminApiUrl}/${faqId}` : adminApiUrl;

                    const payload = {
                        pertanyaan,
                        jawaban,
                        kategori,
                        urutan: urutan ? parseInt(urutan) : 0,
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
                            alert(result.message || 'Berhasil menyimpan data FAQ.');
                            resetFormToCreate();
                            fetchFaq(); // Refresh tabel
                        } else {
                            let errMsg = result.message || 'Validasi gagal.';
                            if (result.errors) {
                                errMsg += '\n' + Object.values(result.errors).flat().join('\n');
                            }
                            alert(errMsg);
                        }
                    } catch (error) {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan koneksi ke server.');
                    }
                });
            }

            // 3. Ambil Detail untuk Edit (Show) - Menggunakan rute admin untuk detail
            window.editFaq = async function(id) {
                try {
                    const response = await fetch(`${adminApiUrl}/${id}`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        const faq = result.data;
                        const faqIdVal = faq.id_faq || faq.id;

                        document.getElementById('faqId').value = faqIdVal;
                        document.getElementById('pertanyaan').value = faq.pertanyaan;
                        document.getElementById('jawaban').value = faq.jawaban;
                        document.getElementById('urutan').value = faq.urutan ?? '';

                        if (faq.kategori) {
                            document.getElementById('kategori').value = faq.kategori;
                        }

                        const isActive = faq.is_active == 1 || faq.is_active === true;
                        document.getElementById('is_active').checked = isActive;

                        const badge = document.getElementById('activeStatusBadgeText');
                        if (isActive) {
                            badge.innerText = 'Aktif';
                            badge.className = 'text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded';
                        } else {
                            badge.innerText = 'Nonaktif';
                            badge.className = 'text-xs font-bold text-slate-500 bg-slate-100 px-2 py-0.5 rounded';
                        }

                        document.getElementById('formCardTitle').innerText = 'Edit FAQ';
                        document.getElementById('formCardSubtitle').innerText = `Memperbarui FAQ #${faqIdVal}`;
                        document.getElementById('faqIdBadge').innerText = `ID #${faqIdVal}`;

                        // Scroll ke form di kanan pada tampilan mobile/tablet
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    } else {
                        alert('Data FAQ tidak ditemukan.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Gagal mengambil data detail FAQ.');
                }
            };

            // 4. Hapus FAQ (Destroy) - Menggunakan Admin API
            window.deleteFaq = async function(id) {
                if (!confirm('Apakah Anda yakin ingin menghapus data FAQ ini dari halaman publik?')) return;

                try {
                    const response = await fetch(`${adminApiUrl}/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        alert(result.message || 'FAQ berhasil dihapus.');
                        fetchFaq(); // Refresh tabel
                    } else {
                        alert(result.message || 'Gagal menghapus FAQ.');
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
