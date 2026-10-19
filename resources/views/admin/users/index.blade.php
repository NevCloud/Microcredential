<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User & Hak Akses — Polibatam Verify</title>

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
        <aside class="w-64 bg-white border-r border-slate-100 p-6 hidden lg:flex flex-col justify-between">
            <div class="space-y-6">
                <div>
                    <span class="text-[10px] font-bold text-sky-600 tracking-wider uppercase block">PORTAL SUPER ADMIN</span>
                    <p class="text-xs text-slate-400 font-medium">Pendaftaran 2026</p>
                </div>

                <nav class="space-y-1.5">
                    <a href="/admin/dashboard" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-compass text-base w-5"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="/admin/users-management" class="flex items-center space-x-3 bg-[#1e3a6d] text-white px-3 py-2.5 rounded-xl text-xs font-semibold shadow-sm transition">
                        <i class="fa-solid fa-users text-base w-5"></i>
                        <span>Kelola User</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-regular fa-clock-rotate-left text-base w-5"></i>
                        <span>Audit Log</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 px-3 py-2.5 rounded-xl text-xs font-semibold transition">
                        <i class="fa-solid fa-[#1e3a6d] fa-arrows-rotate text-base w-5 text-slate-500"></i>
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
        <main class="flex-grow p-6 lg:p-8 overflow-y-auto">

            <!-- Breadcrumb -->
            <div class="text-xs text-slate-400 mb-2">
                <span>Portal Super Admin</span>
                <span class="mx-1">›</span>
                <span class="text-slate-700 font-medium">Kelola User</span>
            </div>

            <!-- Page Title & Action Header -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-900">Kelola User & Hak Akses</h1>
                    <p class="text-xs text-slate-500 mt-1">Kelola akun pengguna, peran, dan status akses sistem.</p>
                </div>
                <button onclick="openModal()" class="bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold px-4 py-2.5 rounded-xl text-xs flex items-center gap-2 shadow-sm transition">
                    <i class="fa-solid fa-plus text-xs"></i> Buat Akun Petugas
                </button>
            </div>

            <!-- Filter & Search Section -->
            <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm mb-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                    <!-- Search Input -->
                    <div class="relative w-full sm:w-64">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400 text-xs">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input type="text" placeholder="Cari nama atau email..." class="w-full pl-9 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 text-slate-800">
                    </div>

                    <!-- Filter Peran -->
                    <div class="flex items-center gap-2 text-xs text-slate-500 w-full sm:w-auto">
                        <span class="font-medium whitespace-nowrap">Peran:</span>
                        <select class="bg-slate-50 border border-slate-200 rounded-xl text-xs py-2 px-3 focus:outline-none focus:border-sky-500 text-slate-800">
                            <option value="">Semua</option>
                            <option value="administrator">Administrator</option>
                            <option value="admin_akademik">Admin_Akademik</option>
                            <option value="admin_keuangan">Admin_Keuangan</option>
                            <option value="user_pendaftar">User_Pendaftar</option>
                        </select>
                    </div>

                    <!-- Filter Status -->
                    <div class="flex items-center gap-2 text-xs text-slate-500 w-full sm:w-auto">
                        <span class="font-medium whitespace-nowrap">Status:</span>
                        <select class="bg-slate-50 border border-slate-200 rounded-xl text-xs py-2 px-3 focus:outline-none focus:border-sky-500 text-slate-800">
                            <option value="">Semua</option>
                            <option value="aktif">Aktif</option>
                            <option value="suspended">Suspended</option>
                            <option value="blocked">Blocked</option>
                        </select>
                    </div>
                </div>

                <div class="text-xs text-slate-500 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200/60 font-medium">
                    Total: <span class="font-bold text-slate-800">1.295 Akun</span>
                </div>
            </div>

            <!-- User Data Table -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden mb-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-100 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                                <th class="px-6 py-3.5">PENGGUNA</th>
                                <th class="px-6 py-3.5">PERAN</th>
                                <th class="px-6 py-3.5">STATUS</th>
                                <th class="px-6 py-3.5">LOGIN TERAKHIR</th>
                                <th class="px-6 py-3.5 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <!-- ID userTableBody Digunakan oleh Script JS Anda -->
                        <tbody id="userTableBody" class="divide-y divide-slate-100 text-xs">
                            <!-- JS fetchUsers() akan merender <tr> data di sini -->
                            <tr>
                                <td colspan="5" class="px-6 py-8 text-center text-slate-400">
                                    <i class="fa-solid fa-spinner fa-spin mr-2"></i> Memuat data pengguna...
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Table Pagination Footer -->
                <div class="p-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                    <div>
                        Menampilkan <span class="font-bold text-slate-800">1–7</span> dari <span class="font-bold text-slate-800">1.295</span> akun
                    </div>
                    <div class="flex items-center space-x-1">
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg text-slate-400 hover:bg-slate-50 cursor-not-allowed">← Sebelumnya</button>
                        <button class="px-3 py-1.5 bg-[#1e3a6d] text-white font-bold rounded-lg">1</button>
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg hover:bg-slate-50">2</button>
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg hover:bg-slate-50">3</button>
                        <span class="px-2">...</span>
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg hover:bg-slate-50">185</button>
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg text-slate-700 hover:bg-slate-50 font-medium">Berikutnya →</button>
                    </div>
                </div>
            </div>

            <!-- Info Audit Log Alert -->
            <div class="flex items-center space-x-2 text-xs text-slate-500">
                <i class="fa-regular fa-circle-info text-sky-500"></i>
                <span>Perubahan peran dan status akun dicatat secara otomatis ke <a href="#" class="text-sky-600 font-bold hover:underline">Audit Log</a> institusi.</span>
            </div>

        </main>
    </div>

    <!-- Footer Page -->
    <footer class="w-full bg-white border-t border-slate-100 py-4 px-8 flex justify-between items-center text-xs text-slate-400">
        <div>© 2026 Polibatam Verify. Hak cipta dilindungi.</div>
        <div>Politeknik Negeri Batam</div>
    </footer>


    <!-- ================= MODAL BUAT / EDIT USER ================= -->
    <div id="userModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white rounded-2xl max-w-lg w-full p-6 md:p-8 shadow-xl border border-slate-100 relative max-h-[90vh] overflow-y-auto">

            <!-- Close Modal Icon -->
            <button onclick="closeModal()" class="absolute top-6 right-6 text-slate-400 hover:text-slate-600 text-lg">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <!-- Modal Header -->
            <div class="mb-6">
                <h3 id="modalTitle" class="text-xl font-extrabold text-slate-900">Buat Akun Petugas</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan petugas baru dan tentukan hak akses ke sistem Polibatam Verify.</p>
            </div>

            <!-- Form ID: userForm (Sesuai JS Anda) -->
            <form id="userForm" class="space-y-4">
                <!-- Hidden Input untuk ID User (Dipakai saat Update/Edit) -->
                <input type="hidden" id="userId" name="userId">

                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Nama Lengkap</label>
                    <input type="text" id="name" placeholder="Contoh: Muhammad Rizky, S.T." class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" required>
                </div>

                <!-- Email Institusi / Akun -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Email Institusi / Akun</label>
                    <input type="email" id="email" placeholder="nama@polibatam.ac.id" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" required>
                </div>

                <!-- Nomor WhatsApp -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Nomor WhatsApp</label>
                    <input type="text" id="no_wa" placeholder="08xxxxxxxxxx" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800">
                </div>

                <!-- Peran / Hak Akses -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Peran / Hak Akses</label>
                    <select id="role" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" required>
                        <option value="admin_akademik">Admin_Akademik</option>
                        <option value="admin_keuangan">Admin_Keuangan</option>
                        <option value="administrator">Administrator</option>
                        <option value="user_pendaftar">User_Pendaftar</option>
                        <option value="super_admin">Super_Admin</option>
                    </select>
                </div>

                <!-- Status Akun -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Status Akun</label>
                    <select id="status_akun" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800" required>
                        <option value="aktif">Aktif</option>
                        <option value="suspended">Suspended</option>
                        <option value="blocked">Blocked</option>
                    </select>
                </div>

                <!-- Password Sementara -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Password Sementara</label>
                    <div class="relative">
                        <input type="password" id="password" placeholder="Masukkan password (opsional saat edit)" class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 transition text-slate-800 pr-10">
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-slate-600 text-xs">
                            <i id="toggleModalPasswordIcon" class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Alert Notice Box -->
                <div class="bg-sky-50 border border-sky-100 rounded-xl p-3.5 text-xs text-sky-800 flex items-start gap-2.5 mt-3">
                    <i class="fa-regular fa-circle-info text-sky-500 text-sm mt-0.5 flex-shrink-0"></i>
                    <p class="leading-relaxed text-[11px]">
                        Pengguna wajib mengganti password saat login pertama. Event <strong class="font-bold text-sky-950">USER_CREATED</strong> akan dicatat.
                    </p>
                </div>

                <!-- Modal Action Buttons -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t border-slate-100">
                    <button type="button" onclick="closeModal()" class="px-4 py-2.5 border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold rounded-xl text-xs transition">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2.5 bg-[#1e3a6d] hover:bg-[#182e57] text-white font-semibold rounded-xl text-xs shadow-sm transition">
                        Buat Akun
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script Pengendali Modal & UI Interaktif -->
    <script>
        function openModal() {
            document.getElementById('userForm').reset();
            document.getElementById('userId').value = '';
            document.getElementById('modalTitle').innerText = 'Buat Akun Petugas';
            document.getElementById('userModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('userModal').classList.add('hidden');
        }

        function togglePasswordVisibility() {
            const pwdInput = document.getElementById('password');
            const icon = document.getElementById('toggleModalPasswordIcon');
            if (pwdInput.type === 'password') {
                pwdInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                pwdInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

    <!-- Tempelkan Script REST API Anda di Sini (Sesuai Permintaan) -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const apiUrl = '/api/v1/admin/users';

            // 1. Load Data User saat halaman dimuat (Index)
            fetchUsers();

            async function fetchUsers() {
                try {
                    const response = await fetch(apiUrl, {
                        method: 'GET',
                        headers: { 'Accept': 'application/json' }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        renderTable(result.data);
                    } else {
                        console.error('Gagal memuat data:', result.message);
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            }

            // Render data ke dalam tabel HTML
            function renderTable(users) {
                const tableBody = document.getElementById('userTableBody');
                if (!tableBody) return;

                tableBody.innerHTML = '';

                if (users.length === 0) {
                    tableBody.innerHTML = `<tr><td colspan="5" class="px-6 py-6 text-center text-slate-400">Tidak ada data pengguna.</td></tr>`;
                    return;
                }

                users.forEach((user) => {
                    // Badge Peran
                    let roleBadge = `<span class="bg-sky-50 text-sky-700 px-2.5 py-1 rounded-md text-[11px] font-semibold border border-sky-100">${user.role}</span>`;
                    if (user.role === 'administrator' || user.role === 'super_admin') {
                        roleBadge = `<span class="bg-slate-800 text-white px-2.5 py-1 rounded-md text-[11px] font-semibold">${user.role}</span>`;
                    }

                    // Badge Status
                    let statusBadge = `<span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full text-[11px] font-semibold inline-flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Aktif</span>`;
                    if (user.status_akun === 'suspended') {
                        statusBadge = `<span class="bg-amber-50 text-amber-600 px-2.5 py-1 rounded-full text-[11px] font-semibold inline-flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-amber-500 rounded-full"></span> Suspended</span>`;
                    } else if (user.status_akun === 'blocked') {
                        statusBadge = `<span class="bg-rose-50 text-rose-600 px-2.5 py-1 rounded-full text-[11px] font-semibold inline-flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-rose-500 rounded-full"></span> Blocked</span>`;
                    }

                    // Inisial Avatar User
                    const initials = user.name ? user.name.split(' ').map(n => n[0]).slice(0, 2).join('').toUpperCase() : 'US';

                    tableBody.innerHTML += `
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="px-6 py-3.5">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-slate-800 text-white font-bold text-xs flex items-center justify-center">
                                        ${initials}
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-800 leading-tight">${user.name}</p>
                                        <p class="text-[11px] text-slate-400 mt-0.5">${user.email}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3.5">${roleBadge}</td>
                            <td class="px-6 py-3.5">${statusBadge}</td>
                            <td class="px-6 py-3.5 text-slate-500 text-[11px]">6 Okt 2026, 14.10 WIB</td>
                            <td class="px-6 py-3.5 text-center">
                                <div class="flex items-center justify-center space-x-1">
                                    <button onclick="editUser(${user.id_users})" class="p-1.5 hover:bg-slate-100 rounded-lg text-amber-600 transition" title="Edit User">
                                        <i class="fa-regular fa-pen-to-square text-sm"></i>
                                    </button>
                                    <button onclick="deleteUser(${user.id_users})" class="p-1.5 hover:bg-slate-100 rounded-lg text-rose-600 transition" title="Hapus User">
                                        <i class="fa-regular fa-trash-can text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    `;
                });
            }

            // 2. Simpan User Baru / Update
            const userForm = document.getElementById('userForm');
            if (userForm) {
                userForm.addEventListener('submit', async function (e) {
                    e.preventDefault();

                    const userId = document.getElementById('userId').value;
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const password = document.getElementById('password').value;
                    const no_wa = document.getElementById('no_wa').value;
                    const role = document.getElementById('role').value;
                    const status_akun = document.getElementById('status_akun').value;

                    const method = userId ? 'PUT' : 'POST';
                    const url = userId ? `${apiUrl}/${userId}` : apiUrl;

                    const payload = { name, email, no_wa, role, status_akun };
                    if (password) payload.password = password;

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
                            userForm.reset();
                            document.getElementById('userId').value = '';
                            closeModal();
                            fetchUsers(); // Refresh tabel
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

            // 3. Ambil Detail untuk Edit (Show)
            window.editUser = async function (id) {
                try {
                    const response = await fetch(`${apiUrl}/${id}`, {
                        method: 'GET',
                        headers: { 'Accept': 'application/json' }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        const user = result.data;
                        document.getElementById('userId').value = user.id_users;
                        document.getElementById('name').value = user.name;
                        document.getElementById('email').value = user.email;
                        document.getElementById('no_wa').value = user.no_wa || '';
                        document.getElementById('role').value = user.role;
                        document.getElementById('status_akun').value = user.status_akun;
                        document.getElementById('password').value = '';

                        document.getElementById('modalTitle').innerText = 'Edit Akun Pengguna';
                        document.getElementById('userModal').classList.remove('hidden');
                    } else {
                        alert('Data pengguna tidak ditemukan.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            };

            // 4. Hapus User (Destroy)
            window.deleteUser = async function (id) {
                if (!confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) return;

                try {
                    const response = await fetch(`${apiUrl}/${id}`, {
                        method: 'DELETE',
                        headers: { 'Accept': 'application/json' }
                    });
                    const result = await response.json();

                    if (response.ok && result.success) {
                        alert(result.message);
                        fetchUsers(); // Refresh tabel
                    } else {
                        alert(result.message || 'Gagal menghapus pengguna.');
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
