@extends('layout')

@section('container')
<div class="max-w-xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center mb-6">Berikan Kritik dan Saran Anda</h2>

    @if (session('success'))
        <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-800 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Kritik dan Saran -->
    <form action="{{ url('/kritik') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
            <textarea id="pesan" name="pesan" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" rows="4" required>{{ old('pesan') }}</textarea>
            @error('pesan')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Kirim Kritik dan Pesan
        </button>
    </form>

    <h3 class="mt-8 text-xl font-semibold">Daftar Kritik dan Saran</h3>
    <div class="mt-4">
        @foreach($kritiks as $kritik)
            <div class="bg-gray-50 p-4 mt-4 rounded-md shadow-sm">
                <p><strong>{{ $kritik->nama }}</strong> ({{ $kritik->email }})</p>
                <p>{{ $kritik->pesan }}</p>
                
                <div class="mt-2 flex justify-between items-center">
                    <a href="{{ route('kritik.edit', $kritik->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>

                    <form action="{{ url('/kritik/'.$kritik->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection