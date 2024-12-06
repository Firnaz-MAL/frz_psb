<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRZ BS PSB</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan link ke file CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    
</head>
<body>
    @include('components.navbar')
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Selamat Datang di Akun FRZ Boarding School</h1>
            <p class="lead">Platform Informasi kedatangan dan peralatan untuk Santri Baru  FRZ Boarding School yang Modern dan Mudah Digunakan</p>
        </div>
    </header>



    {{-- <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">PPDB</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">IDN IT Camp</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>IDN Boarding School</h1>
            <p>Sekolahnya Jagoan IT, Pinter Ngaji</p>
        </main>
        <footer>
            <a href="#" class="whatsapp-button">WhatsApp</a>
        </footer>
    </div> --}}




    <main>
        <div class="container my-5">
            <!-- Pesan Sukses -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Section: Berita Terbaru -->
            <section class="my-5">
                <h2 class="text-center mb-4">Berita Terbaru</h2>
                <div class="row">
                    <!-- Contoh berita statis (nanti diganti dinamis dari database) -->
                    <div class="col-md-4">
                        <div class="card bg-dark">
                            <img src="https://images.ctfassets.net/p0qf7j048i0q/E3C718B6580F40C3B5C7D8D1E86B4A6E/f3dbff6e10f35df96a79d58b6039b954/i499343530.jpg?w=1200&q=75&h=630&fm=jpg" class="card-img-top" alt="Berita 1">
                            <div class="card-body">
                                <h5 class="card-title">Judul Berita 1</h5>
                                <p class="card-text">Ini adalah deskripsi singkat dari berita pertama...</p>
                                <a href="/news/1" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-dark">
                            <img src="https://images.ctfassets.net/p0qf7j048i0q/E3C718B6580F40C3B5C7D8D1E86B4A6E/f3dbff6e10f35df96a79d58b6039b954/i499343530.jpg?w=1200&q=75&h=630&fm=jpg" class="card-img-top" alt="Berita 2">
                            <div class="card-body">
                                <h5 class="card-title">Judul Berita 2</h5>
                                <p class="card-text">Ini adalah deskripsi singkat dari berita kedua...</p>
                                <a href="/news/2" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-dark">
                            <img src="https://images.ctfassets.net/p0qf7j048i0q/E3C718B6580F40C3B5C7D8D1E86B4A6E/f3dbff6e10f35df96a79d58b6039b954/i499343530.jpg?w=1200&q=75&h=630&fm=jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ini adalah deskripsi singkat dari berita ketiga...</p>
                                <a href="/news/3" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Tentang Kami -->
            <section class="bg-dark py-5">
                <div class="container">
                    <h2 class="text-center mb-4">Tentang PSB School</h2>
                    <p class="text-center">PSB School adalah platform online yang mempermudah pendaftaran santri baru. Dengan sistem yang modern dan transparan, kami berkomitmen memberikan pengalaman terbaik untuk calon santri dan orang tua.</p>
                </div>
            </section>

        <!-- Contact Section -->
        <section id="contact" class=" bg-tertiary-color features">
            <div class="container py-5">
                <h1 data-aos="fade-up" class="text-center mb-4">Contact Us</h1>
                <p data-aos="fade-up" class="text-center" style="margin-bottom: 40px">
                    Is there a problem finding places for your next trip? Need a guide for your first trip or a consultation about traveling? Just contact us.
                </p>
                <div class="row text-center g-4">
                    <!-- Call -->
                    <div data-aos="zoom-in-up" class="col-md-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Call</h5>
                                <p class="card-text">022.321.165.19</p>
                                <a href="tel:02232116519" class="btn btn-primary w-100">Call Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- WhatsApp -->
                    <div data-aos="zoom-in-up" class="col-md-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-success">WhatsApp</h5>
                                <p class="card-text">022.321.165.19</p>
                                <a href="https://web.whatsapp.com" class="btn btn-success w-100">Chat Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Video Call -->
                    <div data-aos="zoom-in-up" class="col-md-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-info">Video Call</h5>
                                <p class="card-text">022.321.165.19</p>
                                <a href="https://web.whatsapp.com" class="btn btn-info w-100">Video Call Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Message -->
                    <div data-aos="zoom-in-up" class="col-md-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-secondary">Message</h5>
                                <p class="card-text">022.321.165.19</p>
                                <a href="https://mail.google.com" class="btn btn-secondary w-100">Message Now</a>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        
        </section>

        </div>
    </main>

    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2024 PSB School. All Rights Reserved.</p>
    </footer>

    <script src="{{ asset('js/navbar.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
