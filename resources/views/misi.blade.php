@extends('layout')

@section('container')
<div class="container mx-auto px-6 py-16">
    <!-- Hero Section -->
    <section class="text-center mb-16">
        <h1 class="text-4xl font-semibold mb-4 text-blue-800">Selamat Datang di Skygie</h1>
        <p class="text-xl text-gray-700 mb-6">Kami menyediakan kaos, hoodie, dan tote bag dengan desain custom dan sablon berkualitas tinggi.</p>
        <a href="shop" class="mt-6 inline-block bg-blue-600 text-white py-2 px-6 rounded-md hover:bg-blue-700 transition">Lihat Produk Kami</a>
    </section>

    <!-- Misi Kami -->
    <section id="misi" class="mb-16">
        <h2 class="text-3xl font-semibold text-center mb-6 text-blue-800">Misi Kami</h2>
        <div class="max-w-4xl mx-auto text-lg space-y-6 text-gray-700">
            <p>
                Di Skygie, kami berkomitmen untuk memberikan produk sablon berkualitas tinggi yang tidak hanya mencerminkan kreativitas dan gaya, tetapi juga kenyamanan dan ketahanan. Kami ingin menjadi pilihan utama bagi individu dan perusahaan yang mencari produk custom dengan desain yang unik.
            </p>
            <p>
                Kami berfokus pada kualitas sablon yang tahan lama, bahan berkualitas tinggi, dan proses produksi yang presisi. Kami juga mendukung ekspresi kreatif melalui desain custom yang mencerminkan kepribadian dan nilai dari setiap pelanggan.
            </p>
            <p>
                Selain itu, Skygie berkomitmen untuk menjaga keberlanjutan dan menggunakan bahan yang ramah lingkungan dalam setiap produk yang kami buat.
            </p>
        </div>
    </section>

    <!-- Produk Kami -->
    <section id="produk" class="mb-16">
        <h2 class="text-3xl font-semibold text-center mb-6 text-blue-800">Produk Kami</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Kaos -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">Kaos Custom</h3>
                <p class="text-gray-600">Kaos berkualitas dengan desain yang bisa disesuaikan sesuai keinginan Anda. Tersedia berbagai ukuran dan warna.</p>
            </div>

            <!-- Hoodie -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">Hoodie Custom</h3>
                <p class="text-gray-600">Hoodie dengan sablon yang awet dan desain yang unik, cocok untuk berbagai acara atau gaya sehari-hari.</p>
            </div>

            <!-- Tote Bag -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">Tote Bag Custom</h3>
                <p class="text-gray-600">Tote bag dengan desain personal yang dapat digunakan untuk berbagai keperluan, dari belanja hingga acara santai.</p>
            </div>
        </div>
    </section>

    
</div>
@endsection
