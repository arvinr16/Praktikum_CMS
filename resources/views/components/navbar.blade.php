<!-- Navigation Bar -->
<nav
    class="fixed top-0 w-full z-[100] h-20 flex items-center border-b border-white/5"
    id="main-nav">
    <div
        class="max-w-container-max mx-auto w-full px-5 md:px-margin-desktop flex justify-between items-center"
        id="nav-inner">
        <a href="{{ url('/') }}" class="font-headline text-lg md:text-xl font-bold tracking-tighter whitespace-nowrap">
            Elegance MOTORS
        </a>
        <div class="hidden md:flex gap-8 items-center">
            <a
                class="{{ request()->routeIs('home') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : 'font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors' }}"
                href="{{ route('home') }}">Home</a>
            <a
                class="{{ request()->routeIs('pages.show') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : 'font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors' }}"
                href="{{ route('pages.show', 'about-us') }}">About</a>
            <a
                class="{{ request()->routeIs('cars.*') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : 'font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors' }}"
                href="{{ route('cars.index') }}">Cars</a>
            <a
                class="{{ request()->routeIs('articles.*') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : 'font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors' }}"
                href="{{ route('articles.index') }}">Articles</a>
            <a
                class="{{ request()->routeIs('contact.*') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : 'font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors' }}"
                href="{{ route('contact.index') }}">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            @guest
            {{-- Belum login - tampilkan tombol Login --}}
            <a
                href="{{ route('login') }}"
                class="hidden md:block bg-white text-surface px-6 py-2 rounded-full text-xs font-bold uppercase tracking-wider hover:bg-[#e23644] hover:text-white transition-all">
                Login
            </a>
            @else
            {{-- Sudah login --}}
            @if(auth()->user()->is_admin)
            {{-- Admin - tampilkan link ke dashboard admin --}}
            <div class="hidden md:flex items-center gap-3">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 px-4 py-2 rounded-full bg-metallic-start/10 border border-metallic-start/30 hover:bg-metallic-start/20 transition-all">
                    <span class="material-symbols-outlined text-[16px] text-metallic-start">admin_panel_settings</span>
                    <span class="text-xs font-medium text-primary">Dashboard Admin</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-outline hover:text-primary transition-colors p-2">
                        <span class="material-symbols-outlined text-[18px]">logout</span>
                    </button>
                </form>
            </div>
            @else
            {{-- User biasa - tampilkan nama dengan icon --}}
            <div class="hidden md:flex items-center gap-2 px-4 py-2 rounded-full bg-surface-container-high border border-outline-variant/20">
                <span class="material-symbols-outlined text-[16px] text-metallic-start">person</span>
                <span class="text-xs font-medium text-primary">{{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="ml-2">
                    @csrf
                    <button type="submit" class="text-outline hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-[16px]">logout</span>
                    </button>
                </form>
            </div>
            @endif
            @endguest

            <button
                class="md:hidden flex flex-col gap-1.5 p-2"
                id="hamburger-btn">
                <span class="w-6 h-0.5 bg-on-surface"></span>
                <span class="w-6 h-0.5 bg-on-surface"></span>
                <span class="w-4 h-0.5 bg-on-surface self-end"></span>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div
    class="fixed inset-0 z-[150] bg-surface/90 flex flex-col p-8"
    id="mobile-menu-overlay">
    <div class="flex justify-between items-center mb-12">
        <div class="font-headline text-xl font-bold tracking-tighter">
            Elegance MOTORS
        </div>
        <button class="p-2" id="close-menu-btn">
            <span class="material-symbols-outlined text-3xl">close</span>
        </button>
    </div>
    <div class="flex flex-col gap-8" id="mobile-menu-content">
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ route('home') }}">Home</a>
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ route('pages.show', 'about-us') }}">About</a>
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ route('cars.index') }}">Cars</a>
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ route('articles.index') }}">Articles</a>
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ route('contact.index') }}">Contact</a>

        @guest
        <a
            href="{{ route('login') }}"
            class="mt-8 bg-white text-surface py-4 rounded-xl text-lg font-bold uppercase tracking-widest text-center">
            Login
        </a>
        @else
        @if(auth()->user()->is_admin)
        {{-- Admin mobile menu --}}
        <a href="{{ route('admin.dashboard') }}" class="mt-8 bg-metallic-start text-white py-4 rounded-xl text-lg font-bold uppercase tracking-widest text-center flex items-center justify-center gap-2">
            <span class="material-symbols-outlined">admin_panel_settings</span>
            Dashboard Admin
        </a>
        @else
        {{-- User biasa mobile menu --}}
        <div class="mt-8 flex items-center justify-center gap-3 py-4 rounded-xl bg-surface-container-high border border-outline-variant/20">
            <span class="material-symbols-outlined text-metallic-start">person</span>
            <span class="text-lg font-bold text-primary">{{ auth()->user()->name }}</span>
        </div>
        @endif
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="w-full bg-surface-container-high text-white py-4 rounded-xl text-lg font-bold uppercase tracking-widest text-center">
                Logout
            </button>
        </form>
        @endguest
    </div>
</div>