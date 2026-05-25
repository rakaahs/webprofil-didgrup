@extends('layouts.app')

@section('title', 'PT DID Grup Indonesia | Rental Mobil Premium Surabaya')

@section('content')

<!-- Hero Section with Diagonal Splits -->
<section id="hero" class="relative bg-slate-900 text-white min-h-[90vh] flex items-center overflow-hidden pt-12 skew-divider">
    <!-- Crimson Diagonal Background Accent -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 z-0"></div>
    <div class="absolute top-0 right-0 w-2/3 h-full bg-red-600/10 -skew-x-12 origin-top-right z-0"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-red-700 via-red-600 to-transparent opacity-20 -skew-x-12 origin-top-right z-0"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-20 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center py-20">
        <!-- Hero Text Content -->
        <div class="lg:col-span-7 flex flex-col items-start">
            <span class="px-4 py-1.5 rounded-md bg-red-600 text-white text-xs font-extrabold tracking-wider uppercase mb-6 shadow-lg shadow-red-600/30">
                #GOWithDID
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6.5xl font-black uppercase tracking-tight text-white mb-6 leading-tight">
                Layanan Sewa <br>
                <span class="text-red-500 bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-red-600">Mobil Premium</span> <br>
                Surabaya.
            </h1>
            <p class="text-slate-300 text-base sm:text-lg max-w-xl mb-10 leading-relaxed font-light">
                Nikmati kenyamanan berkendara bersama PT DID Grup Indonesia. Kami menghadirkan unit mewah terbaru, prima, bersih, lengkap dengan driver berpengalaman.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                <a href="#katalog" class="bg-red-600 hover:bg-red-700 text-white text-center px-8 py-4 rounded-xl font-bold uppercase tracking-wider transition-all shadow-xl shadow-red-600/25">
                    Lihat Armada
                </a>
                <a href="https://wa.me/6285790730001" target="_blank" class="bg-slate-900/80 hover:bg-slate-800 text-white text-center px-8 py-4 rounded-xl font-bold uppercase tracking-wider border border-slate-700 transition-all">
                    Hubungi Admin
                </a>
            </div>
        </div>

        <!-- Transparent Car Placeholder -->
        <div class="lg:col-span-5 flex justify-center items-center relative h-96 lg:h-auto">
            <!-- Background Badge Shape -->
            <div class="absolute w-72 h-72 sm:w-80 sm:h-80 rounded-full bg-red-600/10 blur-3xl z-0"></div>
            <!-- Car Image -->
            <img src="{{ asset('images/ZENIX Q.png') }}" alt="Zenix Q Premium Car" class="relative z-10 w-[120%] max-w-none object-contain drop-shadow-2xl hover:scale-110 transition-transform duration-500 scale-125 xl:scale-150 ml-10">
        </div>
    </div>
</section>

<!-- Section "Profil Singkat" -->
<section id="profil" class="py-24 px-6 bg-white relative z-20 overflow-hidden">
    <!-- Background Accents -->
    <div class="absolute top-1/2 left-0 -translate-y-1/2 w-72 h-72 rounded-full bg-red-500/5 blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-slate-500/5 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Profil Text Content -->
            <div class="lg:col-span-6 flex flex-col items-start" data-aos="fade-right">
                <span class="text-xs font-bold text-red-600 uppercase tracking-widest block mb-3">Tentang Kami</span>
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 uppercase leading-tight mb-6">
                    Profil Singkat <br>
                    <span class="text-red-600">DID Grup</span>
                </h2>
                <div class="w-16 h-1 bg-red-600 mb-8"></div>
                
                <p class="text-slate-700 text-base md:text-lg mb-6 leading-relaxed font-semibold">
                    DID Grup Indonesia merupakan perusahaan transportasi yang berkomitmen menyediakan layanan sewa kendaraan dan pengemudi profesional bagi kebutuhan korporat di seluruh Indonesia.
                </p>
                
                <p class="text-slate-500 text-sm md:text-base mb-8 leading-relaxed">
                    Tingkatkan standar mobilitas perusahaan Anda bersama kami—aman, nyaman, dan selalu siap diandalkan kapan pun Anda butuhkan. Kami fokus pada kualitas layanan terbaik, perawatan armada berkala, dan ketepatan waktu.
                </p>

                <!-- Mini Stats / Badges -->
                <div class="grid grid-cols-3 gap-6 w-full pt-6 border-t border-slate-100">
                    <div>
                        <div class="text-2xl md:text-3xl font-black text-slate-900">10+</div>
                        <div class="text-xs text-slate-400 mt-1 font-medium">Unit Armada</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-3xl font-black text-slate-900">100%</div>
                        <div class="text-xs text-slate-400 mt-1 font-medium">Driver Professional</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-3xl font-black text-slate-900">Surabaya</div>
                        <div class="text-xs text-slate-400 mt-1 font-medium">Layanan Jawa Timur dan Sekitarnya</div>
                    </div>
                </div>
            </div>

            <!-- Profil Image (Garage/Armada Showcase Slider) -->
            <div class="lg:col-span-6" data-aos="fade-left">
                <div class="relative group">
                    <!-- Red decorative background box -->
                    <div class="absolute -inset-3 rounded-2xl bg-gradient-to-tr from-red-600 to-red-500 opacity-20 blur-lg group-hover:opacity-30 transition duration-500"></div>
                    
                    <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 shadow-2xl h-[350px] md:h-[450px]">
                        <!-- Image Overlay to make it less flat -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent z-10"></div>
                        
                        <!-- Slides Container -->
                        <div class="absolute inset-0 w-full h-full" id="garage-slider">
                            <img src="{{ asset('images/Dokumentasi Garasi  (1).jpeg') }}" alt="Garasi DID Grup 1" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100 z-0">
                            <img src="{{ asset('images/Dokumentasi Garasi  (2).jpeg') }}" alt="Garasi DID Grup 2" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0 z-0">
                            <img src="{{ asset('images/Dokumentasi Garasi  (3).jpeg') }}" alt="Garasi DID Grup 3" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0 z-0">
                            <img src="{{ asset('images/Dokumentasi Garasi  (4).jpeg') }}" alt="Garasi DID Grup 4" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0 z-0">
                        </div>
                        
                        <!-- Mini Badge on Image -->
                        <div class="absolute bottom-6 left-6 z-20 bg-slate-900/90 backdrop-blur-md text-white border border-slate-700/50 px-4 py-2.5 rounded-xl flex items-center gap-3">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-500 animate-pulse"></div>
                            <span class="text-xs font-bold uppercase tracking-wider">Garasi DID Grup Indonesia</span>
                        </div>

                        <!-- Slide Indicators / Dots -->
                        <div class="absolute bottom-6 right-6 z-20 flex gap-2">
                            <button onclick="setGarageSlide(0)" class="w-2.5 h-2.5 rounded-full bg-white transition-all duration-300" id="garage-dot-0"></button>
                            <button onclick="setGarageSlide(1)" class="w-2.5 h-2.5 rounded-full bg-white/50 transition-all duration-300" id="garage-dot-1"></button>
                            <button onclick="setGarageSlide(2)" class="w-2.5 h-2.5 rounded-full bg-white/50 transition-all duration-300" id="garage-dot-2"></button>
                            <button onclick="setGarageSlide(3)" class="w-2.5 h-2.5 rounded-full bg-white/50 transition-all duration-300" id="garage-dot-3"></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section "Keunggulan Kami" -->
<section id="keunggulan" class="py-24 px-6 bg-slate-50 relative z-20">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="text-xs font-bold text-red-600 uppercase tracking-widest block mb-3">Keunggulan Kami</span>
            <h2 class="text-3xl md:text-5.5xl font-black text-slate-900 uppercase">Kenapa Harus DID Grup?</h2>
            <div class="w-16 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>

        <!-- 4 Column Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Poin 1 -->
            <div class="bg-white border border-slate-100 rounded-2xl p-8 hover:border-red-600/30 hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 rounded-lg bg-red-50 flex items-center justify-center text-red-600 mb-6">
                    <i class="fa-solid fa-tags text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Harga Terjangkau</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Penawaran rate rental premium terbaik yang sangat kompetitif dengan kualitas armada dan layanan kelas satu.
                </p>
            </div>

            <!-- Poin 2 -->
            <div class="bg-white border border-slate-100 rounded-2xl p-8 hover:border-red-600/30 hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 rounded-lg bg-red-50 flex items-center justify-center text-red-600 mb-6">
                    <i class="fa-solid fa-bolt text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Proses Mudah</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Booking instan via WhatsApp. Persyaratan fleksibel dan tidak rumit untuk sewa korporasi maupun individu.
                </p>
            </div>

            <!-- Poin 3 -->
            <div class="bg-white border border-slate-100 rounded-2xl p-8 hover:border-red-600/30 hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 rounded-lg bg-red-50 flex items-center justify-center text-red-600 mb-6">
                    <i class="fa-solid fa-shield-halved text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Nyaman & Aman</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Setiap unit melalui pemeliharaan berkala, berasuransi lengkap, bersih, harum, serta siap jalan kapan pun dibutuhkan.
                </p>
            </div>

            <!-- Poin 4 -->
            <div class="bg-white border border-slate-100 rounded-2xl p-8 hover:border-red-600/30 hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 rounded-lg bg-red-50 flex items-center justify-center text-red-600 mb-6">
                    <i class="fa-solid fa-user-tie text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Driver Profesional</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Driver kami sangat berpengalaman, ramah, berpakaian rapi, menguasai rute jalan raya, serta terlatih mengutamakan keselamatan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section "Katalog & Pricelist" -->
<section id="katalog" class="py-24 px-6 bg-white relative z-20">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="text-xs font-bold text-red-600 uppercase tracking-widest block mb-3">Pricelist Armada</span>
            <h2 class="text-3xl md:text-5.5xl font-black text-slate-900 uppercase">Katalog Pilihan</h2>
            <div class="w-16 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $vehicles = [
                    [
                        'name' => 'New Alphard HEV',
                        'image' => 'Alphard.png',
                        'specs' => [
                            ['label' => 'Kapasitas', 'value' => '6 Kursi / Seats'],
                            ['label' => 'Bahan Bakar', 'value' => 'Hybrid, Bensin & Listrik'],
                            ['label' => 'Area', 'value' => 'Kota Surabaya & sekitarnya'],
                            ['label' => 'Layanan', 'value' => 'Include Driver / Sopir'],
                            ['label' => 'Batas Waktu', 'value' => 'Maks. s.d. Pukul 22.00 WIB']
                        ]
                    ],
                    [
                        'name' => 'Hiace Premio',
                        'image' => 'Hiace Premio.png',
                        'specs' => [
                            ['label' => 'Kapasitas', 'value' => '9 - 10 Kursi / Seats'],
                            ['label' => 'Bahan Bakar', 'value' => 'Bahan Bakar Solar'],
                            ['label' => 'Area', 'value' => 'Kota Surabaya & sekitarnya'],
                            ['label' => 'Layanan', 'value' => 'Include Driver / Sopir'],
                            ['label' => 'Batas Waktu', 'value' => 'Maks. s.d. Pukul 22.00 WIB']
                        ]
                    ],
                    [
                        'name' => 'Zenix Q / Venturer',
                        'image' => 'ZENIX Q.png',
                        'specs' => [
                            ['label' => 'Kapasitas', 'value' => '6 Kursi / Seats'],
                            ['label' => 'Bahan Bakar', 'value' => 'Hybrid, Bensin & Listrik'],
                            ['label' => 'Area', 'value' => 'Kota Surabaya & sekitarnya'],
                            ['label' => 'Layanan', 'value' => 'Include Driver / Sopir'],
                            ['label' => 'Batas Waktu', 'value' => 'Maks. s.d. Pukul 22.00 WIB']
                        ]
                    ],
                    [
                        'name' => 'Zenix Type G',
                        'image' => 'ZENIX G.png',
                        'specs' => [
                            ['label' => 'Kapasitas', 'value' => '6 Kursi / Seats'],
                            ['label' => 'Bahan Bakar', 'value' => 'Hybrid, Bensin & Listrik'],
                            ['label' => 'Area', 'value' => 'Kota Surabaya & sekitarnya'],
                            ['label' => 'Layanan', 'value' => 'Include Driver / Sopir'],
                            ['label' => 'Batas Waktu', 'value' => 'Maks. s.d. Pukul 22.00 WIB']
                        ]
                    ],
                    [
                        'name' => 'Innova Reborn',
                        'image' => 'Innova Reborn.png',
                        'specs' => [
                            ['label' => 'Kapasitas', 'value' => '7 Kursi / Seats'],
                            ['label' => 'Bahan Bakar', 'value' => 'Bahan Bakar Solar'],
                            ['label' => 'Area', 'value' => 'Kota Surabaya & sekitarnya'],
                            ['label' => 'Layanan', 'value' => 'Include Driver / Sopir'],
                            ['label' => 'Batas Waktu', 'value' => 'Maks. s.d. Pukul 22.00 WIB']
                        ]
                    ],
                    [
                        'name' => 'Hiace Premio Luxury',
                        'image' => 'HIACE PREMIO LUXURY.png',
                        'specs' => [
                            ['label' => 'Kapasitas', 'value' => '9 - 10 Kursi / Seats'],
                            ['label' => 'Bahan Bakar', 'value' => 'Bahan Bakar Solar'],
                            ['label' => 'Area', 'value' => 'Kota Surabaya & sekitarnya'],
                            ['label' => 'Layanan', 'value' => 'Include Driver / Sopir'],
                            ['label' => 'Batas Waktu', 'value' => 'Maks. s.d. Pukul 22.00 WIB']
                        ]
                    ],
                    [
                        'name' => 'Veloz Hybrid',
                        'image' => 'Veloz.png',
                        'specs' => [
                            ['label' => 'Kapasitas', 'value' => '7 Kursi / Seats'],
                            ['label' => 'Bahan Bakar', 'value' => 'Hybrid, Bensin & Listrik'],
                            ['label' => 'Area', 'value' => 'Kota Surabaya & sekitarnya'],
                            ['label' => 'Layanan', 'value' => 'Include Driver / Sopir'],
                            ['label' => 'Batas Waktu', 'value' => 'Maks. s.d. Pukul 22.00 WIB']
                        ]
                    ]
                ];
            @endphp

            @foreach($vehicles as $vehicle)
            <div class="bg-white rounded-2xl border border-slate-100 hover:border-slate-300 transition-all duration-300 flex flex-col group p-4 shadow-sm hover:shadow-lg">
                
                <!-- Image Container -->
                <div class="relative rounded-xl h-48 flex items-center justify-center mb-5 overflow-hidden border border-slate-100 bg-slate-50 group-hover:bg-slate-100 transition-colors duration-500">
                    <!-- Red Glow Effect Behind Car -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-32 h-32 rounded-full bg-red-500/20 blur-2xl group-hover:scale-150 group-hover:bg-red-500/35 transition-all duration-500 ease-out"></div>
                    </div>
                    
                    <!-- Background texture/gradient to make it not flat -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-slate-200/50 via-transparent to-slate-100/30 opacity-70 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                    
                    <button class="absolute top-3 right-3 text-slate-400 hover:text-red-600 transition-colors z-10">
                        <i class="fa-regular fa-heart text-lg"></i>
                    </button>
                    <!-- Car Image -->
                    <img src="{{ asset('images/' . $vehicle['image']) }}" alt="{{ $vehicle['name'] }}" class="w-full h-full object-contain p-4 group-hover:scale-115 transition-transform duration-500 relative z-10">
                </div>

                <!-- Title -->
                <h3 class="text-base font-extrabold text-slate-900 mb-5">{{ $vehicle['name'] }}</h3>

                <!-- Specs Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-3 mb-6 mt-auto">
                    @foreach($vehicle['specs'] as $spec)
                    @php
                        if ($spec['label'] == 'Batas Waktu') continue;
                        
                        $icon = 'fa-solid fa-circle-info';
                        if($spec['label'] == 'Kapasitas') $icon = 'fa-solid fa-users';
                        elseif($spec['label'] == 'Bahan Bakar') $icon = 'fa-solid fa-gas-pump';
                        elseif($spec['label'] == 'Area') $icon = 'fa-solid fa-location-dot';
                        elseif($spec['label'] == 'Layanan') $icon = 'fa-solid fa-user-tie';
                    @endphp
                    <div class="flex items-center gap-2.5">
                        <div class="w-7 h-7 rounded-lg bg-red-50 text-red-600 flex items-center justify-center shrink-0 shadow-sm border border-red-100/50">
                            <i class="{{ $icon }} text-[11px]"></i>
                        </div>
                        <span class="text-xs font-bold text-slate-700 leading-snug">{{ $spec['value'] }}</span>
                    </div>
                    @endforeach
                </div>

                <!-- Footer (Price / Action) -->
                <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                    <div class="text-slate-900 font-bold text-sm">
                        Hubungi Admin
                    </div>
                    <a href="https://wa.me/6285790730001?text=Halo%20Admin%20DID%20Grup%2C%20saya%20tertarik%20sewa%20unit%20{{ urlencode($vehicle['name']) }}" target="_blank" class="bg-slate-900 hover:bg-red-600 text-white flex items-center justify-center px-4 py-2.5 rounded-lg text-xs font-semibold transition-colors">
                        Pesan <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 px-6 bg-slate-950 text-white relative overflow-hidden border-t-4 border-red-600">
    <div class="absolute inset-0 bg-red-950/10 z-0"></div>
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-red-600/10 rounded-full blur-3xl z-0"></div>
    <div class="max-w-5xl mx-auto text-center relative z-10">
        <span class="text-xs font-bold text-red-500 uppercase tracking-widest">Siap Melayani Anda</span>
        <h2 class="text-3xl md:text-5.5xl font-black uppercase text-white mt-4 mb-6">Nikmati Perjalanan Mewah Anda Bersama Kami</h2>
        <p class="text-slate-400 max-w-2xl mx-auto mb-10 text-sm md:text-base leading-relaxed">
            Butuh antar unit di bandara Juanda? Hubungi Customer Service kami 24/7 untuk detail harga spesifik dan penawaran sewa mingguan/bulanan.
        </p>
        <a href="https://wa.me/6285790730001" target="_blank" class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-xl font-bold uppercase tracking-wider transition-all shadow-xl shadow-red-600/30 inline-block">
            <i class="fa-brands fa-whatsapp mr-2 text-lg"></i>Hubungi WhatsApp
        </a>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSlide = 0;
        const sliderContainer = document.getElementById('garage-slider');
        if (!sliderContainer) return;
        
        const slides = sliderContainer.querySelectorAll('img');
        const dots = [
            document.getElementById('garage-dot-0'),
            document.getElementById('garage-dot-1'),
            document.getElementById('garage-dot-2'),
            document.getElementById('garage-dot-3')
        ];

        function showSlide(index) {
            slides.forEach((slide, idx) => {
                if (idx === index) {
                    slide.classList.remove('opacity-0');
                    slide.classList.add('opacity-100');
                    if (dots[idx]) {
                        dots[idx].classList.remove('bg-white/50');
                        dots[idx].classList.add('bg-white', 'w-5');
                    }
                } else {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                    if (dots[idx]) {
                        dots[idx].classList.remove('bg-white', 'w-5');
                        dots[idx].classList.add('bg-white/50');
                    }
                }
            });
        }

        window.setGarageSlide = function(index) {
            currentSlide = index;
            showSlide(currentSlide);
        }

        // Initialize
        showSlide(0);

        // Auto slide every 4 seconds
        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 4000);
    });
</script>
@endsection
