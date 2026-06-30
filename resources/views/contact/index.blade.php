@extends('layouts.front')
@section('title', 'Contact — Elegance MOTORS')
@section('content')
<main class="relative z-10 pt-32 pb-section-gap">
  <section class="px-margin-desktop max-w-container-max mx-auto mb-16 text-center">
    <span class="font-label-sm text-label-sm text-metallic-start tracking-[0.2em] uppercase">Get In Touch</span>
    <h1 class="font-display-lg text-display-lg text-primary mt-4 mb-6">
      Elegance <span class="text-metallic-start">Concierge</span>
    </h1>
    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
      Spesialis kami siap menyusun paket akuisisi yang dipersonalisasi
      untuk Anda — mulai dari pembiayaan eksklusif hingga test drive pribadi.
    </p>
  </section>

  <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="flex flex-col lg:flex-row gap-section-gap items-start">
      <div class="lg:w-1/2">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-10">
          <div>
            <h4 class="text-primary font-bold mb-2">Jakarta Showroom</h4>
            <p class="text-on-surface-variant">Jl. Sudirman No. 12<br />Pusat Bisnis Utama</p>
          </div>
          <div>
            <h4 class="text-primary font-bold mb-2">Surabaya Showroom</h4>
            <p class="text-on-surface-variant">Jl. Basuki Rahmat No. 45</p>
          </div>
          <div>
            <h4 class="text-primary font-bold mb-2">Direct Contact</h4>
            <p class="text-on-surface-variant">+62 21 555 0123<br />concierge@Elegance-motors.id</p>
          </div>
          <div>
            <h4 class="text-primary font-bold mb-2">Jam Operasional</h4>
            <p class="text-on-surface-variant">Senin&ndash;Sabtu<br />09.00 &ndash; 18.00 WIB</p>
          </div>
        </div>
      </div>

      <div class="lg:w-1/2 w-full">
        <form method="POST" action="{{ route('contact.store') }}" class="glass-card p-10 rounded-2xl shadow-2xl relative tilt-card">
          @csrf
          <div class="space-y-6">

            @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/30 text-green-400 rounded-lg p-4 text-sm">
              {{ session('success') }}
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="space-y-2">
                <label class="font-label-sm text-label-sm text-outline uppercase">Nama Lengkap</label>
                <input
                  name="name" value="{{ old('name') }}"
                  class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-primary py-3 px-4 transition-all @error('name') border-red-500 @enderror"
                  placeholder="Paijo Dalmoyo"
                  type="text" />
                @error('name')<p class="text-red-400 text-xs">{{ $message }}</p>@enderror
              </div>
              <div class="space-y-2">
                <label class="font-label-sm text-label-sm text-outline uppercase">WhatsApp Number</label>
                <input
                  name="phone" value="{{ old('phone') }}"
                  class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-primary py-3 px-4 transition-all @error('phone') border-red-500 @enderror"
                  placeholder="+62 8xx-xxxx-xxxx"
                  type="tel" />
                @error('phone')<p class="text-red-400 text-xs">{{ $message }}</p>@enderror
              </div>
            </div>

            <div class="space-y-2">
              <label class="font-label-sm text-label-sm text-outline uppercase">Email</label>
              <input
                name="email" value="{{ old('email') }}"
                class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-primary py-3 px-4 transition-all @error('email') border-red-500 @enderror"
                placeholder="example@email.com"
                type="email" />
              @error('email')<p class="text-red-400 text-xs">{{ $message }}</p>@enderror
            </div>

            <div class="space-y-2">
              <label class="font-label-sm text-label-sm text-outline uppercase">Pesan</label>
              <textarea
                name="message"
                class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded-lg text-primary py-3 px-4 transition-all @error('message') border-red-500 @enderror"
                placeholder="Beritahu atau ceritakan keperluan Anda disini..."
                rows="5">{{ old('message') }}</textarea>
              @error('message')<p class="text-red-400 text-xs">{{ $message }}</p>@enderror
            </div>

            <button class="metallic-button w-full py-5 rounded-lg text-white font-bold tracking-widest uppercase" type="submit">
              Send Inquiry
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
@endsection