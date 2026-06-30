<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') — aurum MOTORS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Hanken+Grotesk:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-dim": "#131316",
                        "surface-container-low": "#1b1b1e",
                        "surface-container-mid": "#1f1f22",
                        "surface-container-high": "#2a2a2d",
                        "surface-container-highest": "#353438",
                        "on-surface": "#e4e1e6",
                        "on-surface-var": "#c6c6ca",
                        "outline": "#909194",
                        "outline-variant": "#46464a",
                        "primary": "#e4e2e3",
                        "metallic-start": "#e23644",
                        "metallic-end": "#92001c",
                    },
                    fontFamily: {
                        "display": ["Sora"],
                        "body": ["Hanken Grotesk"],
                        "mono": ["JetBrains Mono"],
                    },
                },
            },
        };
    </script>

    <style>
        body { 
            background-color: #131316; 
            color: #e4e1e6; 
            font-family: 'Hanken Grotesk', sans-serif;
            overflow-x: hidden;
        }
        
        /* Glassmorphism */
        .glass-panel {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .admin-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .admin-card:hover {
            border-color: rgba(226, 54, 68, 0.3);
            box-shadow: 0 4px 20px rgba(226, 54, 68, 0.1);
        }

        /* Buttons */
        .btn-metallic {
            background: linear-gradient(135deg, #e23644 0%, #92001c 100%);
            color: white;
            border-radius: 8px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(226, 54, 68, 0.3);
        }

        .btn-metallic:hover {
            box-shadow: 0 8px 25px rgba(226, 54, 68, 0.5);
            transform: translateY(-1px);
        }

        .btn-ghost {
            background: transparent;
            border: 1px solid #46464a;
            color: #c6c6ca;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .btn-ghost:hover {
            background: rgba(255,255,255,0.05);
            border-color: #909194;
            color: #e4e1e6;
        }

        .btn-edit {
            background: rgba(255,255,255,0.05);
            color: #c6c6ca;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.2s;
            text-decoration: none;
        }

        .btn-edit:hover {
            background: rgba(255,255,255,0.1);
            color: #fff;
        }

        .btn-danger {
            background: rgba(226,54,68,0.1);
            color: #e23644;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-danger:hover {
            background: rgba(226,54,68,0.2);
        }

        /* Badges */
        .badge-available {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .badge-sold {
            background: rgba(226,54,68,0.1);
            color: #e23644;
            border: 1px solid rgba(226,54,68,0.2);
        }

        .badge-read {
            background: rgba(255,255,255,0.05);
            color: #909194;
        }

        .badge-unread {
            background: rgba(226,54,68,0.1);
            color: #e23644;
            border: 1px solid rgba(226,54,68,0.2);
        }

        /* Table */
        .admin-table th {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #909194;
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .admin-table td {
            padding: 16px;
            border-bottom: 1px solid rgba(255,255,255,0.03);
            font-size: 14px;
            vertical-align: middle;
        }

        .admin-table tr:hover {
            background: rgba(255,255,255,0.02);
        }

        /* Form Elements */
        .admin-label {
            display: block;
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #909194;
            margin-bottom: 6px;
        }

        .admin-input {
            width: 100%;
            background: #1b1b1e;
            border: 1px solid #46464a;
            border-radius: 8px;
            color: #e4e1e6;
            padding: 10px 14px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .admin-input:focus {
            outline: none;
            border-color: #e23644;
            box-shadow: 0 0 0 2px rgba(226,54,68,0.2);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination nav {
            display: flex;
            gap: 4px;
        }

        .pagination span, .pagination a {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-family: 'JetBrains Mono', monospace;
            background: rgba(255,255,255,0.05);
            color: #c6c6ca;
            border: 1px solid transparent;
            text-decoration: none;
        }

        .pagination span[aria-current="page"] {
            background: linear-gradient(135deg, #e23644 0%, #92001c 100%);
            color: white;
        }

        .pagination a:hover {
            background: rgba(255,255,255,0.1);
        }

        /* Sidebar */
        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s;
            margin-bottom: 4px;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,0.05);
            color: #e4e1e6;
        }

        .sidebar-link.active {
            background: rgba(226, 54, 68, 0.1);
            color: #e23644;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #131316;
        }

        ::-webkit-scrollbar-thumb {
            background: #2a2a2d;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #353438;
        }
    </style>
</head>
<body class="min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-surface-container-low border-r border-outline-variant/20 flex flex-col fixed h-full z-50 left-0 top-0">
            <!-- Logo -->
            <div class="p-6 border-b border-outline-variant/20">
                <a href="{{ route('admin.dashboard') }}" class="font-display text-2xl font-bold tracking-tighter">
                    aurum <span class="text-metallic-start">ADMIN</span>
                </a>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 overflow-y-auto">
                <!-- Dashboard -->
                <a href="{{ route('admin.dashboard') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : 'text-on-surface-var' }}">
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    <span class="font-medium text-sm">Dashboard</span>
                </a>

                <!-- Katalog Section -->
                <div class="mt-6 mb-2 px-4">
                    <div class="font-mono text-[10px] text-outline uppercase tracking-widest">Katalog</div>
                </div>
                
                <a href="{{ route('admin.brands.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.brands.*') ? 'active' : 'text-on-surface-var' }}">
                    <span class="material-symbols-outlined text-[20px]">branding_watermark</span>
                    <span class="font-medium text-sm">Brands</span>
                </a>

                <a href="{{ route('admin.cars.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.cars.*') ? 'active' : 'text-on-surface-var' }}">
                    <span class="material-symbols-outlined text-[20px]">directions_car</span>
                    <span class="font-medium text-sm">Cars</span>
                </a>

                <!-- Konten Section -->
                <div class="mt-6 mb-2 px-4">
                    <div class="font-mono text-[10px] text-outline uppercase tracking-widest">Konten</div>
                </div>

                <a href="{{ route('admin.categories.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.categories.*') ? 'active' : 'text-on-surface-var' }}">
                    <span class="material-symbols-outlined text-[20px]">category</span>
                    <span class="font-medium text-sm">Categories</span>
                </a>

                <a href="{{ route('admin.articles.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.articles.*') ? 'active' : 'text-on-surface-var' }}">
                    <span class="material-symbols-outlined text-[20px]">article</span>
                    <span class="font-medium text-sm">Articles</span>
                </a>

                <a href="{{ route('admin.pages.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.pages.*') ? 'active' : 'text-on-surface-var' }}">
                    <span class="material-symbols-outlined text-[20px]">description</span>
                    <span class="font-medium text-sm">Pages</span>
                </a>

                <!-- CRM Section -->
                <div class="mt-6 mb-2 px-4">
                    <div class="font-mono text-[10px] text-outline uppercase tracking-widest">CRM</div>
                </div>

                <a href="{{ route('admin.messages.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.messages.*') ? 'active' : 'text-on-surface-var' }}">
                    <span class="material-symbols-outlined text-[20px]">mail</span>
                    <span class="font-medium text-sm">Messages</span>
                    @if(\App\Models\Message::where('is_read', false)->count() > 0)
                        <span class="ml-auto bg-metallic-start text-white text-[10px] font-bold px-2 py-0.5 rounded-full">
                            {{ \App\Models\Message::where('is_read', false)->count() }}
                        </span>
                    @endif
                </a>
            </nav>

            <!-- User Profile & Logout -->
            <div class="p-4 border-t border-outline-variant/20">
                <div class="flex items-center gap-3 mb-3 px-2">
                    <div class="w-8 h-8 rounded-full bg-metallic-start flex items-center justify-center text-white font-bold text-xs">
                        {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="text-sm font-medium text-primary truncate">{{ auth()->user()->name }}</div>
                        <div class="text-xs text-outline truncate">{{ auth()->user()->email }}</div>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="sidebar-link w-full text-on-surface-var hover:text-primary">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                        <span class="font-medium text-sm">Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <!-- Topbar -->
            <header class="h-16 border-b border-outline-variant/20 bg-surface-dim/80 backdrop-blur-md sticky top-0 z-40 px-8 flex items-center justify-between">
                <h1 class="font-display font-semibold text-xl text-primary">@yield('page-title', 'Dashboard')</h1>
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" target="_blank" class="text-sm text-on-surface-var hover:text-primary transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                        <span>Lihat Website</span>
                    </a>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-8">
                <!-- Flash Messages -->
                @if(session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-500/10 border border-green-500/30 text-green-400 text-sm flex items-center justify-between animate-fade-in">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-green-400 hover:text-green-300 text-xl">&times;</button>
                </div>
                @endif

                @if(session('error'))
                <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-400 text-sm flex items-center justify-between animate-fade-in">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined">error</span>
                        <span>{{ session('error') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-red-400 hover:text-red-300 text-xl">&times;</button>
                </div>
                @endif

                @if($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-400 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/80 backdrop-blur-sm">
        <div class="admin-card p-6 max-w-md w-full mx-4">
            <h3 class="font-display font-bold text-lg text-primary mb-2">Konfirmasi Hapus</h3>
            <p id="deleteMessage" class="text-sm text-on-surface-var mb-6">Apakah Anda yakin ingin menghapus item ini?</p>
            <div class="flex justify-end gap-3">
                <button onclick="closeDeleteModal()" class="btn-ghost px-5 py-2.5 rounded-lg text-sm font-medium text-on-surface-var">Batal</button>
                <form id="deleteForm" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger px-5 py-2.5 rounded-lg text-sm font-bold">Ya, Hapus</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(url, message) {
            const modal = document.getElementById('deleteModal');
            const form = document.getElementById('deleteForm');
            const msg = document.getElementById('deleteMessage');
            form.action = url;
            msg.textContent = message;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Close modal on outside click
        document.getElementById('deleteModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDeleteModal();
            }
        });
    </script>
</body>
</html>