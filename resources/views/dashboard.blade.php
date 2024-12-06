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
            <h1>Selamat Datang di PSB FRZ Boarding School</h1>
            <p class="lead">Platform Pendaftaran Santri Baru  FRZ Boarding School yang Modern dan Mudah Digunakan</p>
            <a href="/daftar" class="btn btn-light btn-lg mt-3">Daftar Sekarang</a>
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

            <!-- Section: Kontak -->
            <section class="py-5">
                <div class="container">
                    <h2 class="text-center mb-4">Hubungi Kami</h2>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <form action="/contact" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control bg-dark" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control bg-dark" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea name="message" class="form-control bg-dark" id="message" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary bg-dark">Kirim</button>
                            </form>
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
