<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PT DID Grup Indonesia | Sewa Mobil Premium Surabaya')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F9F9FB;
        }
        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Montserrat', sans-serif;
        }
        .crimson-gradient {
            background: linear-gradient(135deg, #DC2626 0%, #991B1B 100%);
        }
        /* Custom Diagonal Background Cuts and Utility Shapes */
        .skew-divider {
            position: relative;
            overflow: hidden;
        }
        .skew-divider::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: #F9F9FB;
            clip-path: polygon(0 100%, 100% 100%, 100% 0);
            z-index: 10;
        }
    </style>
</head>
<body class="text-slate-900 min-h-screen flex flex-col selection:bg-red-600 selection:text-white">

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="{{ asset('images/Logo DID.png') }}" alt="Logo" class="w-10 h-10 object-contain">
                </div>
                <div>
                    <span class="text-base font-extrabold tracking-tight text-slate-900 block leading-none uppercase">PT DID GRUP INDONESIA</span>
                    <span class="text-[10px] text-red-600 font-bold uppercase tracking-wider block mt-0.5">Premium Rental Surabaya</span>
                </div>
            </a>

            <!-- Quick Links -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#hero" class="text-sm font-semibold text-slate-700 hover:text-red-600 transition-colors">Home</a>
                <a href="#keunggulan" class="text-sm font-semibold text-slate-700 hover:text-red-600 transition-colors">Keunggulan</a>
                <a href="#katalog" class="text-sm font-semibold text-slate-700 hover:text-red-600 transition-colors">Armada</a>
                <a href="#kontak" class="text-sm font-semibold text-slate-700 hover:text-red-600 transition-colors">Hubungi Kami</a>
            </nav>

            <!-- CTA Header -->
            <div class="hidden md:flex items-center">
                <a href="https://wa.me/6285790730001" target="_blank" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2.5 rounded-lg text-sm font-bold uppercase tracking-wide transition-all shadow-lg shadow-red-600/10">
                    <i class="fa-brands fa-whatsapp mr-2 text-lg"></i>Reservasi Cepat
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-btn" class="md:hidden text-slate-800 hover:text-red-600 focus:outline-none" aria-label="Toggle Navigation Menu">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Drawer -->
    <div id="mobile-drawer" class="fixed inset-0 z-40 bg-white/95 backdrop-blur-lg transform translate-x-full transition-transform duration-300 flex flex-col justify-center items-center gap-8 md:hidden">
        <button id="mobile-close-btn" class="absolute top-6 right-6 text-slate-800 hover:text-red-600" aria-label="Close Menu">
            <i class="fa-solid fa-xmark text-3xl"></i>
        </button>
        <a href="#hero" class="text-2xl font-bold text-slate-900 hover:text-red-600 transition-colors">Home</a>
        <a href="#keunggulan" class="text-2xl font-bold text-slate-900 hover:text-red-600 transition-colors">Keunggulan</a>
        <a href="#katalog" class="text-2xl font-bold text-slate-900 hover:text-red-600 transition-colors">Armada</a>
        <a href="#kontak" class="text-2xl font-bold text-slate-900 hover:text-red-600 transition-colors">Hubungi Kami</a>
        <a href="https://wa.me/6285790730001" target="_blank" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg text-base font-bold uppercase tracking-wide transition-all mt-4">
            <i class="fa-brands fa-whatsapp mr-2 text-xl"></i>WhatsApp
        </a>
    </div>

    <!-- Main Dynamic Contents -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="kontak" class="bg-slate-950 text-slate-300 pt-20 pb-10 border-t-4 border-red-600">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-12">
            <!-- Col 1: Brand Info -->
            <div class="md:col-span-5 flex flex-col gap-4">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                    <div class="w-12 h-12 flex items-center justify-center">
                        <img src="{{ asset('images/Logo DID.png') }}" alt="Logo" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <span class="text-base font-extrabold tracking-tight text-white block leading-none uppercase">PT DID GRUP INDONESIA</span>
                        <span class="text-[10px] text-red-600 font-bold uppercase tracking-wider block mt-0.5">Premium Rental</span>
                    </div>
                </a>
                <p class="text-sm text-slate-400 leading-relaxed mt-2">
                    PT DID Grup Indonesia - Layanan Rental & Sewa Mobil Mewah terpercaya di Surabaya. Menghadirkan armada premium, driver profesional, dan paket lengkap include BBM untuk kenyamanan perjalanan Anda.
                </p>
                <div class="flex gap-4 mt-2">
                    <a href="https://instagram.com/didgrupindonesia" target="_blank" class="w-9 h-9 rounded-full bg-slate-900 hover:bg-red-600 hover:text-white flex items-center justify-center text-slate-400 transition-colors"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-slate-900 hover:bg-red-600 hover:text-white flex items-center justify-center text-slate-400 transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://wa.me/6285790730001" target="_blank" class="w-9 h-9 rounded-full bg-slate-900 hover:bg-red-600 hover:text-white flex items-center justify-center text-slate-400 transition-colors"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Col 2: Hubungi Kami -->
            <div class="md:col-span-4">
                <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-6 border-l-2 border-red-600 pl-3">Hubungi Kami</h4>
                <ul class="flex flex-col gap-4 text-sm text-slate-400">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-red-600 mt-1"></i>
                        <span><strong>Head Office:</strong><br>Jl. Gunung Anyar Emas BB No.6, Surabaya</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-red-600"></i>
                        <span>didgrupindonesia@gmail.com </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-red-600"></i>
                        <span>+62 857-9073-0001</span>
                    </li>
                </ul>
            </div>

            <!-- Col 3: QR Code -->
            <div class="md:col-span-3 flex flex-col items-center md:items-start">
                <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-6 border-l-2 border-red-600 pl-3">Scan QR Contact</h4>
                <div class="bg-white p-3 rounded-xl shadow-lg w-36 h-36 flex items-center justify-center border border-slate-800">
                    <!-- QR Code Placeholder -->
                    <div class="text-slate-800 text-center flex flex-col items-center">
                        <i class="fa-solid fa-qrcode text-6xl text-slate-900"></i>
                        <span class="text-[9px] font-bold text-slate-500 uppercase tracking-widest mt-1">Scan Me</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 mt-16 pt-8 border-t border-slate-900 text-center text-xs text-slate-500">
            &copy; {{ date('Y') }} PT DID Grup Indonesia. All rights reserved.
        </div>
    </footer>

    <!-- Floating WhatsApp CTA -->
    <a href="https://wa.me/6285790730001" target="_blank" class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-2xl transition-all duration-300 hover:scale-110" aria-label="Chat WhatsApp">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
    </a>

    <!-- Drawer Script -->
    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('mobile-close-btn');
        const drawer = document.getElementById('mobile-drawer');

        menuBtn.addEventListener('click', () => {
            drawer.classList.remove('translate-x-full');
        });

        closeBtn.addEventListener('click', () => {
            drawer.classList.add('translate-x-full');
        });

        // Close drawer when link clicked
        const drawerLinks = drawer.querySelectorAll('a');
        drawerLinks.forEach(link => {
            link.addEventListener('click', () => {
                drawer.classList.add('translate-x-full');
            });
        });
    </script>
</body>
</html>
