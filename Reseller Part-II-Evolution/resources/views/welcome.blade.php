@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Hero Slider -->
    <div id="heroCarousel" class="carousel slide mb-5 reveal" data-bs-ride="carousel">
        <div class="carousel-inner shadow-lg">
            <div class="carousel-item active">
                <div class="p-5 text-center" style="background: linear-gradient(90deg, #1c1c1c 0%, #3a2b10 100%); min-height: 300px; border-radius: 15px; position: relative; overflow: hidden;">
                    <div class="row align-items-center">
                        <div class="col-md-5 animate-up animate-delay-1">
                            <div class="hero-img-wrapper shadow-lg border border-warning rounded-4 overflow-hidden">
                                <img src="{{ asset('images/games/roblox.png') }}" class="img-fluid" alt="Roblox">
                            </div>
                        </div>
                        <div class="col-md-7 text-start ps-lg-5 animate-up animate-delay-2">
                            <h5 class="text-white opacity-75 mb-1">GUNAKAN KODE PROMO:</h5>
                            <h1 class="display-3 fw-900 text-uppercase mb-2 text-gradient" style="font-weight: 800;">PROMOROBLOX</h1>
                            <h2 class="fw-bold mb-3">DISKON 5.000</h2>
                            <p class="text-white-50">Event spesial setiap jam 12.00 WIB • Stok Terbatas!</p>
                            <button class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill shadow glow-button">TOP UP SEKARANG!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="p-5 text-center d-flex align-items-center justify-content-center" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/games/mlbb.png') }}') center/cover; min-height: 300px; border-radius: 15px; position: relative;">
                    <div class="position-relative animate-up">
                        <h1 class="display-4 fw-800 text-uppercase text-white">MEMBER CUMA 10 RB</h1>
                        <p class="lead text-warning fw-bold">PROMOSI TERBATAS AKHIR TAHUN</p>
                        <button class="btn btn-outline-light px-5 py-2 rounded-pill">CEK SEKARANG</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- POPULER SEKARANG -->
    <div class="mb-5 reveal">
        <h5 class="fw-bold mb-1"><i class="fas fa-fire-alt text-danger me-2"></i>POPULER SEKARANG!</h5>
        <p class="text-muted small mb-4">Produk paling banyak dicari hari ini.</p>
        
        <div class="row g-3">
            @php
                $populars = [
                    ['name' => 'Mobile Legends', 'brand' => 'Moonton', 'img' => asset('images/games/mlbb.png')],
                    ['name' => 'Paket Irit MLBB', 'brand' => 'Moonton', 'img' => asset('images/games/mlbb.png')],
                    ['name' => 'PUBG Mobile', 'brand' => 'Tencent Games', 'img' => asset('images/games/pubg.png')],
                    ['name' => 'Free Fire', 'brand' => 'Garena', 'img' => asset('images/games/freefire.png')],
                    ['name' => 'Joki Rank Eceran', 'brand' => 'DHA Store', 'img' => asset('images/games/mlbb.png')],
                    ['name' => 'Magic Chess', 'brand' => 'Moonton', 'img' => asset('images/games/magic_chess.png')],
                    ['name' => 'ROBLOX', 'brand' => 'Roblox Corp', 'img' => asset('images/games/roblox.png')],
                ];
            @endphp
            @foreach($populars as $index => $item)
            <div class="col-lg-3 col-md-4 col-sm-6 animate-up animate-delay-{{ ($index % 3) + 1 }}">
                <div class="populer-card">
                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                    <div>
                        <div class="small fw-bold text-white text-truncate" style="max-width: 150px;">{{ $item['name'] }}</div>
                        <div class="text-muted" style="font-size: 0.75rem;">{{ $item['brand'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- MAIN GRID -->
    <div class="mb-5 reveal">
        <div class="d-flex justify-content-start overflow-auto game-tabs mb-4 pb-2" style="white-space: nowrap;">
            <button class="nav-link active shadow-sm">Top Up Games</button>
            <button class="nav-link">Joki MLBB</button>
            <button class="nav-link">Joki HOK</button>
            <button class="nav-link">Top Up via LINK</button>
            <button class="nav-link">Pulsa & Data</button>
            <button class="nav-link">Voucher</button>
            <button class="nav-link">Entertainment</button>
            <button class="nav-link">Tagihan</button>
        </div>

        <div class="row g-4">
            @foreach($games as $index => $game)
            <div class="col-lg-2 col-md-3 col-6 animate-up animate-delay-{{ ($index % 3) + 1 }}">
                <div class="game-card shadow">
                    <div class="snow-top"></div>
                    <a href="#" class="text-decoration-none">
                        <img src="{{ asset($game->image_url) }}" class="w-100" style="object-fit: cover; aspect-ratio: 5/7;" alt="{{ $game->name }}" onerror="this.src='https://via.placeholder.com/200x280/1a1a1a/fff?text={{ urlencode($game->name) }}'">
                        <div class="p-3 text-center bg-dark bg-opacity-50">
                            <div class="small fw-bold text-truncate text-white">{{ $game->name }}</div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
