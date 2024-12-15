@extends('layout')

@section('container')
<div class="max-w-xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center mb-6">Edit Kritik dan Saran</h2>

    <form action="{{ url('/kritik/'.$kritik->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('nama', $kritik->nama) }}" required>
            @error('nama')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('email', $kritik->email) }}" required>
            @error('email')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
            <textarea id="pesan" name="pesan" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" rows="4" required>{{ old('pesan', $kritik->pesan) }}</textarea>
            @error('pesan')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Perbarui Kritik
        </button>
    </form>
</div>
@endsection