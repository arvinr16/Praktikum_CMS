@extends('layouts.front')
@section('content')
<div class="test">
    <img
        src="images/logoWebSI.webp"
        class="nav-img-logo"
        alt="Logo Web Prodi" />
    <a
        href="#"
        class="fw-bold text-decoration-none text-nav"
        style="
            background: linear-gradient(16deg, #6199e2, #933dcd);
            background-clip: text;
            -webkit-text-fill-color: transparent;
          ">
        Sistem Informasi</a>
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item">
                <a class="nav-link" href="kurikulum.html">Kurikulum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dosen.html">Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dokumen.html">Dokumen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontak.html">Kontak</a>
            </li>
        </ul>
        <i id="themeIcon" class="theme-icon">🌙</i>
        <div class="form-check form-switch d-flex align-items-center gap-2">
            <input
                class="form-check-input"
                type="checkbox"
                role="switch"
                id="themeToggle" />
        </div>
    </div>
</div>
@endsection