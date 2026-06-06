<!doctype html>

<html class="dark" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Elegance MOTORS INDONESIA | Engineering Excellence</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&amp;family=Hanken+Grotesk:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --metallic-gradient: linear-gradient(135deg, #e23644 0%, #92001c 100%);
      --mouse-x: 50%;
      --mouse-y: 50%;
    }

    body {
      background-color: #131316;
      color: #e4e1e6;
      overflow-x: hidden;
    }

    /* 1. Animated Grid Background */
    .bg-grid-animate {
      background-size: 50px 50px;
      background-image:
        linear-gradient(to right,
          rgba(255, 255, 255, 0.05) 1px,
          transparent 1px),
        linear-gradient(to bottom,
          rgba(255, 255, 255, 0.05) 1px,
          transparent 1px);
      mask-image: radial-gradient(circle at center, black, transparent 80%);
      animation: grid-move 20s linear infinite;
    }

    @keyframes grid-move {
      0% {
        background-position: 0 0;
      }

      100% {
        background-position: 500px 500px;
      }
    }

    /* 2. Global Mouse Glow Effect */
    .mouse-glow {
      position: fixed;
      inset: 0;
      z-index: 1;
      pointer-events: none;
      background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y),
          rgba(226, 54, 68, 0.1),
          transparent 40%);
    }

    /* 3. Refined Tilt Card with Internal Glow */
    .tilt-card {
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.15s ease-out;
      overflow: hidden;
    }

    .tilt-card::before {
      content: "";
      position: absolute;
      inset: 0;
      z-index: 2;
      pointer-events: none;
      background: radial-gradient(400px circle at var(--card-mouse-x, 50%) var(--card-mouse-y, 50%),
          rgba(255, 255, 255, 0.1),
          transparent 40%);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .tilt-card:hover::before {
      opacity: 1;
    }

    .glass-panel {
      backdrop-filter: blur(20px);
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .metallic-cta {
      background: var(--metallic-gradient);
      box-shadow: 0 4px 15px rgba(226, 54, 68, 0.3);
      transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .metallic-cta:hover {
      box-shadow: 0 8px 25px rgba(226, 54, 68, 0.5);
      transform: translateY(-2px);
    }
  </style>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "surface-dim": "#131316",
            background: "#131316",
            "on-secondary": "#27323a",
            "surface-tint": "#c8c6c7",
            "glow-silver": "rgba(200, 198, 199, 0.2)",
            "outline-variant": "#46464a",
            "surface-container-low": "#1b1b1e",
            "on-primary": "#303031",
            "on-primary-container": "#535253",
            "on-tertiary-fixed-variant": "#6d3737",
            "on-error-container": "#ffdad6",
            "secondary-fixed-dim": "#bdc8d3",
            "surface-container-highest": "#353438",
            "surface-container-lowest": "#0e0e11",
            primary: "#e4e2e3",
            "on-tertiary": "#512122",
            "surface-container-high": "#2a2a2d",
            "tertiary-fixed-dim": "#ffb3b1",
            "surface-variant": "#353438",
            "inverse-on-surface": "#303033",
            "on-background": "#e4e1e6",
            "tertiary-container": "#ffb3b1",
            "on-surface": "#e4e1e6",
            surface: "#131316",
            tertiary: "#ffdad8",
            "primary-fixed-dim": "#c8c6c7",
            "secondary-container": "#3d4851",
            error: "#ffb4ab",
            "tertiary-fixed": "#ffdad8",
            "on-secondary-container": "#abb6c1",
            "surface-container": "#1f1f22",
            "metallic-start": "#e23644",
            "on-error": "#690005",
            "on-secondary-fixed": "#121d25",
            "on-tertiary-fixed": "#370d0e",
            outline: "#909194",
            "inverse-primary": "#5f5e5f",
            "on-tertiary-container": "#7b4242",
            "on-primary-fixed": "#1b1b1c",
            "on-primary-fixed-variant": "#474748",
            "on-surface-variant": "#c6c6ca",
            "metallic-end": "#92001c",
            "surface-bright": "#39393c",
            "primary-container": "#c8c6c7",
            "primary-fixed": "#e4e2e3",
            "secondary-fixed": "#d9e4ef",
            "inverse-surface": "#e4e1e6",
            "error-container": "#93000a",
            secondary: "#bdc8d3",
            "on-secondary-fixed-variant": "#3d4851",
          },
          borderRadius: {
            DEFAULT: "0.125rem",
            lg: "0.25rem",
            xl: "0.5rem",
            full: "0.75rem",
          },
          spacing: {
            "container-max": "1440px",
            "unit-base": "8px",
            gutter: "32px",
            "section-gap": "120px",
            "margin-desktop": "80px",
            "margin-mobile": "20px",
          },
          fontFamily: {
            "headline-xl-mobile": ["Sora"],
            "body-md": ["Hanken Grotesk"],
            "headline-xl": ["Sora"],
            "headline-md": ["Sora"],
            "display-lg": ["Sora"],
            "label-sm": ["JetBrains Mono"],
            "body-lg": ["Hanken Grotesk"],
          },
          fontSize: {
            "headline-xl-mobile": [
              "32px",
              {
                lineHeight: "1.2",
                fontWeight: "700"
              },
            ],
            "body-md": ["16px", {
              lineHeight: "1.6",
              fontWeight: "400"
            }],
            "headline-xl": ["48px", {
              lineHeight: "1.2",
              fontWeight: "700"
            }],
            "headline-md": ["32px", {
              lineHeight: "1.3",
              fontWeight: "600"
            }],
            "display-lg": [
              "72px",
              {
                lineHeight: "1.1",
                letterSpacing: "-0.02em",
                fontWeight: "800",
              },
            ],
            "label-sm": [
              "12px",
              {
                lineHeight: "1.0",
                letterSpacing: "0.05em",
                fontWeight: "500",
              },
            ],
            "body-lg": ["18px", {
              lineHeight: "1.6",
              fontWeight: "400"
            }],
          },
        },
      },
    };
  </script>
</head>

<body class="bg-surface-dim selection:bg-metallic-start selection:text-white">
  <div class="mouse-glow" id="mouse-glow"></div>
  <div class="fixed inset-0 bg-grid-animate pointer-events-none z-0"></div>
  <!-- Navigation Shell -->
  <nav
    class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 shadow-sm">
    <div
      class="flex justify-between items-center px-margin-desktop h-20 max-w-container-max mx-auto">
      <div
        class="font-headline-md text-headline-md font-bold tracking-tighter text-primary dark:text-primary">
        Elegance MOTORS INDONESIA
      </div>
      <div class="hidden md:flex items-center gap-8">
        <a
          class="font-body-md text-body-md text-primary dark:text-primary border-b-2 border-metallic-start pb-1 font-bold"
          href="#">Home</a>
        <a
          class="font-body-md text-body-md text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors duration-300"
          href="#">About</a>
        <a
          class="font-body-md text-body-md text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors duration-300"
          href="#">Cars</a>
        <a
          class="font-body-md text-body-md text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors duration-300"
          href="#">Articles</a>
        <a
          class="font-body-md text-body-md text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors duration-300"
          href="#">Contact</a>
      </div>
      <div class="flex items-center">
        <button
          class="metallic-cta px-8 py-2 font-label-sm text-label-sm uppercase tracking-widest text-on-surface font-bold">
          Inquiry
        </button>
      </div>
    </div>
  </nav>
  @yield('content')
  <footer
    class="w-full py-section-gap bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/20">
    <div
      class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop max-w-container-max mx-auto">
      <div class="col-span-1 md:col-span-1">
        <div
          class="font-headline-md text-headline-md font-bold text-primary mb-6">
          Elegance MOTORS
        </div>
        <p class="font-body-md text-body-md text-on-surface-variant">
          The leading destination for premium automotive excellence in
          Indonesia. Craftsmanship, technology, and trust.
        </p>
      </div>
      <div class="flex flex-col gap-4">
        <h4
          class="font-label-sm text-label-sm font-bold text-primary uppercase mb-2">
          Showrooms
        </h4>
        <a
          class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
          href="#">Jakarta Showroom: Jl. Sudirman No. 12</a>
        <a
          class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
          href="#">Surabaya Showroom: Jl. Basuki Rahmat No. 45</a>
      </div>
      <div class="flex flex-col gap-4">
        <h4
          class="font-label-sm text-label-sm font-bold text-primary uppercase mb-2">
          Concierge
        </h4>
        <a
          class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
          href="#">Contact: +62 21 555 0123</a>
        <a
          class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
          href="#">Email: concierge@Elegance-motors.id</a>
      </div>
      <div class="flex flex-col gap-4">
        <h4
          class="font-label-sm text-label-sm font-bold text-primary uppercase mb-2">
          Legal
        </h4>
        <a
          class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
          href="#">Terms of Service</a>
        <a
          class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors"
          href="#">Privacy Policy</a>
        <div
          class="mt-4 font-body-md text-body-md text-on-surface-variant opacity-60">
          © 2024 Elegance MOTORS INDONESIA. ALL RIGHTS RESERVED.
        </div>
      </div>
    </div>
  </footer>
  <script>
    // 4. Mouse Position Tracking
    document.addEventListener("mousemove", (e) => {
      // Global mouse position
      document.documentElement.style.setProperty(
        "--mouse-x",
        `${e.clientX}px`,
      );
      document.documentElement.style.setProperty(
        "--mouse-y",
        `${e.clientY}px`,
      );

      // Per-card mouse position for internal glow
      const cards = document.querySelectorAll(".tilt-card");
      cards.forEach((card) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        card.style.setProperty("--card-mouse-x", `${x}px`);
        card.style.setProperty("--card-mouse-y", `${y}px`);

        // 3D Tilt Effect
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = (y - centerY) / 50;
        const rotateY = (centerX - x) / 50;

        if (x > 0 && x < rect.width && y > 0 && y < rect.height) {
          card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.01, 1.01, 1.01)`;
        } else {
          card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
        }
      });
    });

    // Ensure tilt resets on leave (extra safety)
    const cards = document.querySelectorAll(".tilt-card");
    cards.forEach((card) => {
      card.addEventListener("mouseleave", () => {
        card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
      });
    });

    // Navigation Highlight on Scroll
    window.addEventListener("scroll", () => {
      const nav = document.querySelector("nav");
      if (window.scrollY > 50) {
        nav.classList.add("shadow-xl");
        nav.classList.remove("bg-surface/80");
        nav.classList.add("bg-surface-dim/95");
      } else {
        nav.classList.remove("shadow-xl");
        nav.classList.add("bg-surface/80");
        nav.classList.remove("bg-surface-dim/95");
      }
    });
  </script>
</body>

</html>