<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name') . ' - Top Up Game Aman & Terpercaya')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="mesh-bg"></div>
    <div id="snow-container"></div>
    <div id="lightning-flash"></div>
    <!-- Top Sub Menu -->
    <div class="top-sub-menu d-none d-md-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <a href="#"><i class="fas fa-coins"></i> Topup</a>
                <a href="#"><i class="fas fa-search-dollar"></i> Cek Transaksi</a>
                <a href="#"><i class="fas fa-chart-line"></i> Leaderboard</a>
                <a href="#"><i class="fas fa-calculator"></i> Kalkulator</a>
            </div>
            <div class="d-flex">
                <a href="#"><i class="fas fa-sign-in-alt"></i> Masuk</a>
                <a href="#"><i class="fas fa-user-plus"></i> Daftar</a>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="fas fa-circle-notch me-2" style="color: var(--accent-gold); font-size: 1.8rem;"></i>
                <span>{{ config('app.name') }}</span>
            </a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto w-50">
                    <div class="search-wrapper d-flex align-items-center">
                        <i class="fas fa-search me-2"></i>
                        <input type="text" placeholder="Cari Game atau Voucher">
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown me-3">
                    <button class="btn btn-dark btn-sm dropdown-toggle border-0" style="background: #333;" type="button">
                        <img src="https://flagcdn.com/w20/id.png" alt="ID" class="me-1" style="width: 18px;"> ID / IDR
                    </button>
                </div>
                <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <div class="footer-logo mb-4">
                        <i class="fas fa-circle-notch" style="color: var(--accent-gold);"></i> {{ config('app.name') }}
                    </div>
                    <p class="text-muted pe-lg-5" style="line-height: 1.7; font-size: 0.95rem;">
                        {{ config('app.name') }} adalah tempat top up games yang aman, murah dan terpercaya. Proses cepat 1-3 Detik. Open 24 jam. Payment terlengkap. Jika ada kendala silahkan klik logo CS pada kanan bawah di website ini.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="social-circle"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="social-circle"><i class="fas fa-envelope"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12 mb-4">
                    <h5>Peta Situs</h5>
                    <div class="footer-links">
                        <a href="#">Beranda</a>
                        <a href="#">Cek Transaksi</a>
                        <a href="#">Hubungi Kami</a>
                        <a href="#">Ulasan</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12 mb-4">
                    <h5>Dukungan</h5>
                    <div class="footer-links">
                        <a href="#">Whatsapp</a>
                        <a href="#">Instagram</a>
                        <a href="#">Email</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mb-4">
                    <h5>Legalitas</h5>
                    <div class="footer-links">
                        <a href="#">Kebijakan Pribadi</a>
                        <a href="#">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
            <div class="border-top border-secondary pt-4 mt-4 text-center">
                <p class="text-muted small">@ {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Scroll Reveal Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '12px 0';
                navbar.style.background = 'rgba(10, 10, 11, 0.95)';
            } else {
                navbar.style.padding = '18px 0';
                navbar.style.background = 'rgba(10, 10, 11, 0.85)';
            }
        });

        // Snow Generation
        function createSnowflake() {
            const snow = document.getElementById('snow-container');
            if(!snow) return;
            const flake = document.createElement('div');
            flake.classList.add('snowflake');
            
            const size = Math.random() * 3 + 2;
            flake.style.width = size + 'px';
            flake.style.height = size + 'px';
            flake.style.left = Math.random() * 100 + 'vw';
            flake.style.opacity = Math.random() * 0.5 + 0.3;
            flake.style.animationDuration = Math.random() * 3 + 4 + 's';
            
            snow.appendChild(flake);
            
            setTimeout(() => flake.remove(), 7000);
        }
        setInterval(createSnowflake, 150);

        // Lightning Flash Logic
        function triggerLightning() {
            const flash = document.getElementById('lightning-flash');
            if(!flash) return;
            
            // Random delay between 5 to 15 seconds
            const delay = Math.random() * 10000 + 5000;
            
            setTimeout(() => {
                flash.style.animation = 'lightning 0.6s ease-out';
                setTimeout(() => {
                    flash.style.animation = '';
                    triggerLightning();
                }, 600);
            }, delay);
        }
        triggerLightning();
    </script>
</body>
</html>
