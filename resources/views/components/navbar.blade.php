<!-- Navigation Bar -->
<nav
    class="fixed top-0 w-full z-[100] h-20 flex items-center border-b border-white/5"
    id="main-nav">
    <div
        class="max-w-container-max mx-auto w-full px-5 md:px-margin-desktop flex justify-between items-center"
        id="nav-inner">
        <div
            class="font-headline text-lg md:text-xl font-bold tracking-tighter whitespace-nowrap">
            Elegance MOTORS
        </div>
        <div class="hidden md:flex gap-8 items-center">
            <a
                class="{{ request()->routeIs('index') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : '' }}"
                href="{{ url('/') }}">Home</a>
            <a
                class="{{ request()->routeIs('pages') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : '' }}"
                href="{{ url('pages') }}">About</a>
            <a
                class="{{ request()->routeIs('cars') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : '' }}"
                href="{{ url('cars') }}">Cars</a>
            <a
                class="{{ request()->routeIs('articles') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : '' }}"
                href="{{ url('articles') }}">Articles</a>
            <a
                class="{{ request()->routeIs('contact') ? 'font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold' : '' }}"
                href="{{ url('contact') }}">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            <button
                class="hidden md:block bg-white text-surface px-6 py-2 rounded-full text-xs font-bold uppercase tracking-wider hover:bg-[#e23644] hover:text-white transition-all">
                Inquiry
            </button>
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
        <div
            class="font-headline text-xl font-bold tracking-tighter">
            Elegance MOTORS
        </div>
        <button class="p-2" id="close-menu-btn">
            <span class="material-symbols-outlined text-3xl">close</span>
        </button>
    </div>
    <div class="flex flex-col gap-8" id="mobile-menu-content">
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ url('/') }}">Home</a>
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ url('pages') }}">About</a>
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ url('cars') }}">Cars</a>
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ url('articles') }}">Articles</a>
        <a
            class="text-4xl font-headline font-bold uppercase hover:text-primary transition-colors"
            href="{{ url('contact') }}">Contact</a>
        <button
            class="mt-8 bg-white text-surface py-4 rounded-xl text-lg font-bold uppercase tracking-widest">
            Make Inquiry
        </button>
    </div>
</div>