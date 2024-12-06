@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-3xl">
    <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 p-6 rounded-lg shadow-xl text-white">
        <h2 class="text-3xl font-bold mb-4">Edit Profil</h2>
        <p class="text-sm mb-6">Sesuaikan informasi profil Anda di bawah ini.</p>
    </div>

    @if(session('success'))
    <div class="my-4 p-4 text-green-900 bg-green-200 rounded-lg">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg space-y-6 mt-6">
        @csrf
        @method('PUT')

        <div class="space-y-2">
            <label for="name" class="block text-lg font-medium text-gray-700">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('nama', $user->nama) }}" 
                class="w-full px-4 py-2 rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" 
                class="w-full px-4 py-2 rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="cabang" class="block text-lg font-medium text-gray-700">Cabang</label>
            <input type="text" id="cabang" name="cabang" value="{{ old('cabang', $user->cabang) }}" 
                class="w-full px-4 py-2 rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="program" class="block text-lg font-medium text-gray-700">Program</label>
            <input type="text" id="program" name="program" value="{{ old('program', $user->program) }}" 
                class="w-full px-4 py-2 rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="text-right">
            <button type="submit" 
                class="inline-flex items-center px-6 py-3 text-sm font-bold text-white bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 rounded-lg shadow-lg hover:from-green-500 hover:via-blue-600 hover:to-purple-600 focus:outline-none">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
