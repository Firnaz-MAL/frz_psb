<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran - FRZ Boarding School</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg max-w-md w-full px-8 py-6">
        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/60x60" alt="Logo" class="mx-auto mb-2">
            <h1 class="text-2xl font-bold text-blue-500">Daftar Akun</h1>
        </div>
        <!-- Deskripsi -->
        <p class="text-gray-600 text-center text-sm mb-6">
            Silahkan isi data di bawah ini untuk membuat akun di <br>
            <span class="text-blue-500 font-semibold">Aplikasi PSB Online FRZ Boarding School</span>
        </p>
        <!-- Form -->
        <form action="{{ route('isiformulir.store') }}" method="POST">
            @csrf
            <!-- Data Santri -->
            <h2 class="text-sm font-semibold text-gray-500 mb-4 border-b pb-2">Data Santri</h2>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Calon Santri</label>
                <input type="text" id="nama" name="nama" placeholder="Tulis nama lengkap calon santri"
                    class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <div class="flex items-center space-x-4 mt-2">
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki" class="text-blue-500 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-600">Laki-Laki</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="text-blue-500 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-600">Perempuan</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label for="sumber" class="block text-sm font-medium text-gray-700">Darimana Anda Tahu Tentang FRZ?</label>
                <select id="sumber" name="sumber"
                    class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="">--Pilih--</option>
                    <option value="Google">Google</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Facebook">Facebook</option>
                    <option value="YouTube">YouTube</option>
                    <option value="Teman">Teman</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="cabang" class="block text-sm font-medium text-gray-700">Pilihan Cabang</label>
                <select id="cabang" name="cabang"
                    class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="">--Pilih--</option>
                    <option value="Surabaya Ikhwan">FRZ Surabaya Ikhwan</option>
                    <option value="Surabaya Akhwat">FRZ Surabaya Akhwat</option>
                    <option value="Pamijahan">FRZ Pamijahan</option>
                    <option value="Jonggol Ikhwan">FRZ Jonggol Ikhwan</option>
                    <option value="Jonggol Akhwat">FRZ Jonggol Akhwat</option>
                    <option value="Solo">FRZ Solo</option>           
                    <option value="Mesir Ikhwan">FRZ Mesir Ikhwan</option>
                    <option value="Messir Akhwat">FRZ Messir Akhwat</option>
                    <option value="Sentul">FRZ Sentul</option>
                    <option value="Mecca">FRZ Mecca</option>
                    <option value="Medina">FRZ Medina</option>
                    <option value="Riyadh">FRZ Riyadh</option>           
                </select>
            </div>
            <div class="mb-4">
                <label for="program" class="block text-sm font-medium text-gray-700">Pilihan Program</label>
                <select id="program" name="program"
                    class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="">--Pilih--</option>
                    <option value="SMP">SMP IT</option>
                    <option value="SMK Programmer">SMK Programmer</option>
                    <option value="SMK Designer">SMK Designer</option>
                    <option value="SMK Designer">SMK Network Enginer</option>
                </select>
            </div>

            <!-- Data Login -->
            <h2 class="text-sm font-semibold text-gray-500 mb-4 border-b pb-2">Data Login</h2>
            <div class="mb-4">
                <label for="whatsapp" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-100 text-gray-600 sm:text-sm"></span>
                    <input type="email" id="email" name="email" placeholder="Contoh: frz@gmail.com"
                        class="flex-1 min-w-0 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-r-md focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password/PIN</label>
                <input type="password" id="password" name="password" placeholder="Buat Password untuk Login"
                    class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <!-- Buttons -->
            <div class="flex justify-between">
                <button type="button" class="bg-gray-400 hover:bg-gray-500 text-white text-sm px-4 py-2 rounded shadow">
                    Kembali
                </button>
                <br>
                <button type="submit" 
                class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded shadow">
                Daftar Sekarang
            </button>
            </div>
        </form>
    </div>
</body>
</html>
