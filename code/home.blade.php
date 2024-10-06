@extends('layouts.main')

@section('container')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #2C3E50; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="img/logo.png" alt="Logo" class="animate__animated animate__fadeIn animate__delay-1s" style="max-height: 50px; transform: scale(1.1); margin-right: 10px;">
                <span class="navbar-brand text-white">SPK Kontrasepsi</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- <!-- Navbar Links and Buttons -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Masuk and Daftar Buttons -->
                    <li class="nav-item">
                        <a href="/login" class="btn masuk-btn me-2">
                            <i class="bi bi-box-arrow-in-right"></i> Masuk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/registration" class="btn daftar-btn">
                            <i class="bi bi-person-plus"></i> Daftar
                        </a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-white d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('img/bg-hero.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; margin-top: 20px;">
        <div class="container hero-content text-center">
            <h1 class="hero-title" style="font-size: 48px; font-weight: 700;">Sistem Pendukung Keputusan</h1>
            <p class="hero-subtitle mt-3" style="font-size: 24px;">Pemilihan Alat Kontrasepsi Pasca Melahirkan</p>
            <button id="mulaiSekarang" class="btn btn-cta mt-4" style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 20px; font-size: 18px; font-weight: 500;">Mulai Sekarang</button>
        </div>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content stylish-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="accountModalLabel">Sudah Punya Akun?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Pilih salah satu opsi berikut:</p>
                </div>
                <div class="modal-footer">
                    <a href="/login" class="btn masuk-btn">Masuk</a>
                    <a href="/registration" class="btn daftar-btn">Daftar</a>
                </div>
            </div>
        </div>
    </div>

<!-- Features Section -->
    <section class="features-section" id="features" style="background-color: #F4F6F7; margin-bottom: 50px;">
        <div class="container">
            <h2 class="text-center mb-4 mt-5" style="font-size: 36px; color: #2C3E50;">Fitur Utama Kami</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4 rounded shadow-lg" style="background-color: #FFFFFF; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="feature-icon mb-3" style="font-size: 48px; color: #27AE60;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="feature-title" style="font-size: 24px; color: #2C3E50;">Keamanan Terjamin</h3>
                        <p class="feature-description" style="font-size: 16px; color: #7F8C8D;">Sistem kami menggunakan teknologi enkripsi terbaru untuk melindungi data Anda.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4 rounded shadow-lg" style="background-color: #FFFFFF; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="feature-icon mb-3" style="font-size: 48px; color: #27AE60;">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h3 class="feature-title" style="font-size: 24px; color: #2C3E50;">Analisis Akurat</h3>
                        <p class="feature-description" style="font-size: 16px; color: #7F8C8D;">Algoritma canggih kami memberikan rekomendasi yang tepat sesuai kebutuhan Anda.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4 rounded shadow-lg" style="background-color: #FFFFFF; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="feature-icon mb-3" style="font-size: 48px; color: #27AE60;">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3 class="feature-title" style="font-size: 24px; color: #2C3E50;">Konsultasi Ahli</h3>
                        <p class="feature-description" style="font-size: 16px; color: #7F8C8D;">Tim ahli kami siap membantu Anda dengan konsultasi personal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimoni-section" id="testimoni" style="background-color: #F4F6F7; margin-bottom: 50px;">
        <div class="container">
            <h2 class="text-center mb-4 mt-5" style="font-size: 36px; color: #2C3E50;">Apa yang dikatakan oleh pengguna kami?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimoni-card bg-white shadow p-4 rounded">
                        <p style="font-size: 18px; color: #333;">"Sistem ini sangat membantu saya dalam memilih alat kontrasepsi yang tepat."</p>
                        <h3 class="text-primary mt-3" style="font-size: 24px; color: #27AE60;">Rina, 25 tahun</h3>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimoni-card bg-white shadow p-4 rounded">
                        <p style="font-size: 18px; color: #333;">"Sistem ini sangat mudah digunakan dan memberikan rekomendasi yang akurat."</p>
                        <h3 class="text-primary mt-3" style="font-size: 24px; color: #27AE60;">Dina, 30 tahun</h3>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimoni-card bg-white shadow p-4 rounded">
                        <p style="font-size: 18px; color: #333;">"Sistem ini sangat membantu saya dalam mengambil keputusan yang tepat."</p>
                        <h3 class="text-primary mt-3" style="font-size: 24px; color: #27AE60;">Lina, 28 tahun</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <section id="contact">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <h5>Hubungi Kami</h5>
                        <p>Email: info@spk-kontrasepsi.com</p>
                        <p>Telepon: +62 812-3456-7890</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5>Tentang Kami</h5>
                        <p>Kami menyediakan sistem pendukung keputusan yang membantu pemilihan alat kontrasepsi pasca melahirkan secara tepat dan akurat.</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5>Ikuti Kami</h5>
                        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
                <hr class="bg-light my-4">
                <p class="mb-0 text-center">&copy; 2024 SPK Kontrasepsi. All rights reserved.</p>
            </div>
        </section>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();

        // Smooth scrolling for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Show modal when "Mulai Sekarang" button is clicked
        document.getElementById('mulaiSekarang').addEventListener('click', function () {
            var accountModal = new bootstrap.Modal(document.getElementById('accountModal'));
            accountModal.show();
        });
    </script>
</div>
@endsection

<!-- Additional CSS -->
<style>
    .btn-cta {
        font-size: 18px;
        padding: 12px 30px;
        border-radius: 50px;
        background-color: #27AE60;
        color: white;
        transition: all 0.3s ease;
    }

    .btn-cta:hover {
        background-color: #1E8449;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .navbar .nav-link:hover {
        color: #1E8449 !important;
    }

    .testimoni-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimoni-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #000;
        border-radius: 50%;
    }

    html {
        scroll-behavior: smooth;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);
    }

    .feature-icon {
        background-color: #ECF0F1;
        border-radius: 50%;
        padding: 20px;
        display: inline-block;
    }

    .feature-title {
        margin-top: 15px;
        font-weight: bold;
    }

    .feature-description {
        color: #7F8C8D;
    }

    /* Mengubah warna ikon navbar-toggler menjadi putih */
    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.5) !important;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
        background-size: contain !important;
    }

</style>
