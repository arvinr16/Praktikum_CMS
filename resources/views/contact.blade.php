@extends('layouts.front')
@section('content')
<main class="relative pt-32 min-h-screen">
      <!-- Hero Section -->
      <section
        class="px-margin-desktop max-w-container-max mx-auto mb-section-gap relative z-10"
      >
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter items-end">
          <div>
            <span
              class="font-label-sm text-label-sm text-metallic-start mb-4 block tracking-[0.2em] uppercase"
              >Connect With Excellence</span
            >
            <h1
              class="font-display-lg text-display-lg text-primary mb-6 uppercase"
            >
              Reach Our Concierge
            </h1>
            <p
              class="font-body-lg text-body-lg text-on-surface-variant max-w-xl"
            >
              Experience the zenith of automotive luxury. Whether you seek a
              private viewing or technical consultation, our team is at your
              disposal.
            </p>
          </div>
          <div class="flex justify-start lg:justify-end pb-4">
            <a
              class="flex items-center gap-3 px-8 py-4 bg-surface-container-high border border-outline-variant hover:border-metallic-start transition-all duration-300 group"
              href="https://wa.me/62215550123"
            >
              <span
                class="material-symbols-outlined text-metallic-start"
                data-icon="chat"
                >chat</span
              >
              <span
                class="font-label-sm text-label-sm font-bold uppercase tracking-widest group-hover:text-primary"
                >Chat on WhatsApp</span
              >
            </a>
          </div>
        </div>
      </section>
      <!-- Contact & Form Section -->
      <section
        class="px-margin-desktop max-w-container-max mx-auto mb-section-gap relative z-10"
      >
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
          <!-- Contact Info Cards -->
          <div class="lg:col-span-4 space-y-6">
            <div class="glass-panel p-8 tilt-card">
              <div class="flex items-start gap-4 mb-6 relative z-20">
                <div class="p-3 bg-surface-container-highest rounded-lg">
                  <span
                    class="material-symbols-outlined text-metallic-start"
                    data-icon="schedule"
                    >schedule</span
                  >
                </div>
                <div>
                  <h3 class="font-headline-md text-[20px] text-primary mb-2">
                    Operating Hours
                  </h3>
                  <p class="font-body-md text-on-surface-variant">
                    Mon — Fri: 09:00 - 20:00
                  </p>
                  <p class="font-body-md text-on-surface-variant">
                    Sat — Sun: 10:00 - 18:00
                  </p>
                </div>
              </div>
              <div class="flex items-start gap-4 mb-6 relative z-20">
                <div class="p-3 bg-surface-container-highest rounded-lg">
                  <span
                    class="material-symbols-outlined text-metallic-start"
                    data-icon="mail"
                    >mail</span
                  >
                </div>
                <div>
                  <h3 class="font-headline-md text-[20px] text-primary mb-2">
                    Email Inquiries
                  </h3>
                  <p class="font-body-md text-on-surface-variant">
                    concierge@aurum-motors.id
                  </p>
                  <p class="font-body-md text-on-surface-variant">
                    sales@aurum-motors.id
                  </p>
                </div>
              </div>
              <div class="flex items-start gap-4 relative z-20">
                <div class="p-3 bg-surface-container-highest rounded-lg">
                  <span
                    class="material-symbols-outlined text-metallic-start"
                    data-icon="call"
                    >call</span
                  >
                </div>
                <div>
                  <h3 class="font-headline-md text-[20px] text-primary mb-2">
                    General Line
                  </h3>
                  <p class="font-body-md text-on-surface-variant">
                    +62 21 555 0123
                  </p>
                </div>
              </div>
            </div>
            <div
              class="relative overflow-hidden group h-[300px] border border-outline-variant/30 tilt-card"
            >
              <img
                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                data-alt="A macro close-up shot of a high-end luxury vehicle emblem"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnSfmrkX0-im819FWPGkqr6lo2lPwek-tw4IHkgr4J_Nl6Awe42wxTFSj264dOjuBOnNBphojZs49obUNwv2LDOuHdM0q6sq3GfeLIpQF2H-2YoZLvbtPzgY8ABPMIFq5XCzmhoElAHz9YktivKTNCRozWNOuTQz-jEx4MOPDmV39lcS6R9Qj3cAiRMAC6S2cp-TWvbUp_1aIrUCe8jQ1zTOOmYX0S0i5ejB7lJZEkKV04bwoEqlnUFZbvpWszPJ3m_Z-KZg5qLoLt"
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent z-20"
              ></div>
              <div class="absolute bottom-6 left-6 z-30">
                <span
                  class="font-label-sm text-label-sm text-primary uppercase tracking-[0.3em]"
                  >Excellence Defined</span
                >
              </div>
            </div>
          </div>
          <!-- Form -->
          <div class="lg:col-span-8">
            <div class="glass-panel p-10 tilt-card">
              <div class="relative z-20">
                <h2
                  class="font-headline-md text-headline-md text-primary mb-8 uppercase"
                >
                  Secure a Private Viewing
                </h2>
                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div class="space-y-2">
                    <label
                      class="font-label-sm text-label-sm uppercase text-outline"
                      >Full Name</label
                    >
                    <input
                      class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-0 text-on-surface px-4 py-3 transition-colors duration-300"
                      placeholder="Johnathan Doe"
                      type="text"
                    />
                  </div>
                  <div class="space-y-2">
                    <label
                      class="font-label-sm text-label-sm uppercase text-outline"
                      >Email Address</label
                    >
                    <input
                      class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-0 text-on-surface px-4 py-3 transition-colors duration-300"
                      placeholder="john@domain.com"
                      type="email"
                    />
                  </div>
                  <div class="space-y-2">
                    <label
                      class="font-label-sm text-label-sm uppercase text-outline"
                      >Interested Brand</label
                    >
                    <select
                      class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-0 text-on-surface px-4 py-3 transition-colors duration-300"
                    >
                      <option>Honda</option>
                      <option>Toyota</option>
                      <option>Daihatsu</option>
                      <option>Mitsubishi</option>
                    </select>
                  </div>
                  <div class="space-y-2">
                    <label
                      class="font-label-sm text-label-sm uppercase text-outline"
                      >Showroom Location</label
                    >
                    <select
                      class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-0 text-on-surface px-4 py-3 transition-colors duration-300"
                    >
                      <option>Jakarta (Sudirman)</option>
                      <option>Surabaya (Basuki Rahmat)</option>
                    </select>
                  </div>
                  <div class="md:col-span-2 space-y-2">
                    <label
                      class="font-label-sm text-label-sm uppercase text-outline"
                      >Message / Specification Requirements</label
                    >
                    <textarea
                      class="w-full bg-surface-container-low border border-outline-variant focus:border-primary focus:ring-0 text-on-surface px-4 py-3 transition-colors duration-300"
                      placeholder="Detail your specific vehicle requirements..."
                      rows="4"
                    ></textarea>
                  </div>
                  <div class="md:col-span-2 pt-4">
                    <button
                      class="metallic-button w-full md:w-auto px-12 py-4 font-label-sm text-label-sm font-bold uppercase tracking-widest"
                      type="submit"
                    >
                      Send Inquiry Request
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Showroom Locations -->
      <section class="bg-surface-container-lowest py-section-gap relative">
        <div
          class="px-margin-desktop max-w-container-max mx-auto relative z-10"
        >
          <div
            class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6"
          >
            <div>
              <span
                class="font-label-sm text-label-sm text-metallic-start mb-4 block tracking-[0.2em] uppercase"
                >Global Presence</span
              >
              <h2
                class="font-headline-xl text-headline-xl text-primary uppercase"
              >
                Visit Our Showrooms
              </h2>
            </div>
            <p class="font-body-md text-on-surface-variant max-w-sm">
              Experience our fleet in person at our state-of-the-art facilities
              designed for the elite enthusiast.
            </p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
            <!-- Jakarta Showroom -->
            <div class="group">
              <div
                class="relative h-[450px] overflow-hidden mb-8 border border-outline-variant/20 tilt-card"
              >
                <div
                  class="absolute inset-0 bg-surface-container-highest/20 z-10"
                ></div>
                <img
                  class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000"
                  data-alt="Jakarta flagship showroom location map"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuAR_swloepVLZ0wbkel8AQYXqCLXdyAblp6Y6yrIoBf-KvL24p-GJDVGyLgJEUuvy1HM3tQRLxdmT-qXFwi0PUqWsibamY-Pd4rCn5RnwovxRe6j-UVXk8umbsawT2ynYKhTR8Fyi2ay7w3gSsydczvcoCBvkHYMvNVibMMqXpn3uFloWzfL9-4RlhL1G5bfSTp6bwAg9gBITTPHNNxY97PIUoA2SP9NoW70NuA-ywOidSIp0g6hjDZg60jJLfNymJt93bw_230q0B0"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-background to-transparent pointer-events-none z-20"
                ></div>
                <div class="absolute bottom-10 left-10 z-30">
                  <div class="bg-metallic-start px-4 py-1 inline-block mb-4">
                    <span
                      class="font-label-sm text-[10px] text-white font-bold uppercase tracking-[0.3em]"
                      >Flagship</span
                    >
                  </div>
                  <h3
                    class="font-headline-md text-headline-md text-primary mb-2"
                  >
                    JAKARTA SUDIRMAN
                  </h3>
                  <p
                    class="font-body-md text-on-surface-variant flex items-center gap-2"
                  >
                    <span
                      class="material-symbols-outlined text-sm"
                      data-icon="location_on"
                      >location_on</span
                    >
                    Jl. Sudirman No. 12, SCBD, Jakarta Selatan
                  </p>
                </div>
              </div>
              <div class="flex gap-4">
                <button
                  class="flex-1 py-4 border border-outline-variant font-label-sm text-label-sm uppercase tracking-widest hover:bg-surface-container-high transition-colors"
                >
                  Directions
                </button>
                <button
                  class="flex-1 py-4 border border-outline-variant font-label-sm text-label-sm uppercase tracking-widest hover:bg-surface-container-high transition-colors"
                >
                  Call Concierge
                </button>
              </div>
            </div>
            <!-- Surabaya Showroom -->
            <div class="group">
              <div
                class="relative h-[450px] overflow-hidden mb-8 border border-outline-variant/20 tilt-card"
              >
                <div
                  class="absolute inset-0 bg-surface-container-highest/20 z-10"
                ></div>
                <img
                  class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000"
                  data-alt="Surabaya Basuki showroom location map"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuAa3UgZs8nFIvGrflGwClCzn1Hr2C--jIV5xEVceUo0Ft0_-754cC3hbsI6s1aazDNO7OhmIF9XnbQilntAfWYo5BqwqDYtCBG_2saTYkPpr0Mw-_9VOGrpRWJ0FPEpz501VxOv17TNkFAR2E6NXmWvjJvPnvDSvA7AHH4bcljwMkRegVB2PbxTv-t3bUyzXO6_Cqi5St-tyVYjetijD7t06COP0DwOu0ceQC_59z6v2x4jZdhkb1k8xrMlO9Z9Nc0Wq8BTTitiUj21"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-background to-transparent pointer-events-none z-20"
                ></div>
                <div class="absolute bottom-10 left-10 z-30">
                  <div
                    class="bg-surface-container-highest px-4 py-1 inline-block mb-4"
                  >
                    <span
                      class="font-label-sm text-[10px] text-primary font-bold uppercase tracking-[0.3em]"
                      >East Java</span
                    >
                  </div>
                  <h3
                    class="font-headline-md text-headline-md text-primary mb-2"
                  >
                    SURABAYA BASUKI
                  </h3>
                  <p
                    class="font-body-md text-on-surface-variant flex items-center gap-2"
                  >
                    <span
                      class="material-symbols-outlined text-sm"
                      data-icon="location_on"
                      >location_on</span
                    >
                    Jl. Basuki Rahmat No. 45, Genteng, Surabaya
                  </p>
                </div>
              </div>
              <div class="flex gap-4">
                <button
                  class="flex-1 py-4 border border-outline-variant font-label-sm text-label-sm uppercase tracking-widest hover:bg-surface-container-high transition-colors"
                >
                  Directions
                </button>
                <button
                  class="flex-1 py-4 border border-outline-variant font-label-sm text-label-sm uppercase tracking-widest hover:bg-surface-container-high transition-colors"
                >
                  Call Concierge
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Newsletter Section -->
      <section class="py-section-gap px-margin-desktop relative z-10">
        <div class="max-w-[800px] mx-auto text-center">
          <h2
            class="font-headline-md text-headline-md text-primary mb-6 uppercase"
          >
            Remain At The Forefront
          </h2>
          <p class="font-body-lg text-on-surface-variant mb-10">
            Sign up for exclusive access to limited-run vehicle releases and
            private event invitations.
          </p>
          <div class="flex flex-col md:flex-row gap-4">
            <input
              class="flex-1 bg-surface-container-low border rounded-full border-outline-variant px-6 py-4 focus:ring-0 focus:border-primary"
              placeholder="Enter your email"
              type="email"
            />
            <button
              class="metallic-button px-10 py-4 font-label-sm text-label-sm uppercase hover:bg-[#e23644] hover:rounded-full hover:transition-all font-bold tracking-widest"
            >
              Subscribe
            </button>
          </div>
        </div>
      </section>
    </main>
@endsection