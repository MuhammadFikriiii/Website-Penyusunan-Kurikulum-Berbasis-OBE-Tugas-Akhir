<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kurikulum OBE')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        }
    </script>
</head>
<body class="bg-white min-h-screen flex">

    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-gray-800 text-white p-5 space-y-6 fixed top-0 left-0 h-full transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-40">
        <!-- Header -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold">Dashboard Admin</h2>
            <button class="md:hidden" onclick="toggleSidebar()">✖</button>
        </div>

        <!-- Search bar -->
        <div>
            <input type="text" placeholder="Search..." class="w-full p-2 rounded bg-gray-700 placeholder-gray-400 text-white focus:outline-none">
        </div>

        <!-- Navigation -->
        <ul class="space-y-1">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>🏠</span>
                    <span class="ml-2">Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>👥</span>
                    <span class="ml-2">Users</span></a>
            </li>
            <li>
                <a href="{{ route('admin.jurusan.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                <span>🏫</span>
                <span class="ml-2">Jurusan</span></a>
            </li>
            <li>
                <a href="{{ route('admin.prodi.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>🎓</span>
                    <span class="ml-2">Prodi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.profillulusan.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>📄</span>
                    <span class="ml-2">Profil Lulusan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.capaianprofillulusan.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>✅</span>
                    <span class="ml-2">Capaian Profil Lulusan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pemetaancplpl.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>📌</span>
                    <span class="ml-2">Pemetaan CPL-PL</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.bahankajian.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>📚</span>
                    <span class="ml-2">Bahan Kajian</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pemetaancplbk.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>📍</span>
                    <span class="ml-2">Pemetaan CPL - BK</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.matakuliah.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>📘</span>
                    <span class="ml-2">Mata Kuliah</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pemetaancplmk.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>📈</span>
                    <span class="ml-2">Pemetaan CPL - MK</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pemetaanbkmk.index') }}" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>🗂️</span>
                    <span class="ml-2">Pemetaan BK - MK</span>
                </a>
            </li>
            <li>
                <a href="/" class="flex items-center p-3 hover:bg-gray-700 rounded">
                    <span>👥</span>
                    <span class="ml-2">Logout</span></a>
            </li>
        </ul>
    </aside>

    <!-- Konetn utama -->
    <div class="flex-1 md:ml-64 p-6">
        <!-- Toggle Button (Mobile) -->
        <div class="md:hidden mb-4">
            <button onclick="toggleSidebar()" class="bg-gray-800 text-white px-4 py-2 rounded">☰ Menu</button>
        </div>
        @yield('content')
    </div>

</body>
</html>
