@extends('layout')
@section('container')
   <!-- Hero Section -->
<section class="bg-white">
    <div class="container mx-auto px-4 py-16 flex items-center justify-between">
        <!-- Bagian teks -->
        <div class="w-1/2 text-left">
            <h1 class="text-3xl font-bold mb-4">About Us</h1>
            <p class="text-gray-600 mb-6">Selamat datang di Skygie, toko sablon terpercaya yang menghadirkan produk sablon berkualitas tinggi untuk berbagai kebutuhan Anda. Kami mengutamakan keakuratan, kreativitas, dan kepuasan pelanggan dalam setiap desain dan hasil sablon kami.
<br>
Dengan pengalaman dan keahlian dalam dunia sablon, Skygie siap membantu Anda mewujudkan berbagai proyek sablon, dari kaos, tas, hingga merchandise lainnya. Kami berkomitmen untuk memberikan hasil terbaik, tepat waktu, dan dengan harga yang bersaing.</p>
            <a href="pesan">
            <button class="bg-black text-white px-6 py-2 rounded">cara pemesanan</button>
            </a>
        </div>
        <!-- Bagian gambar -->
        <div class="w-1/3 pl-4"> <!-- Menambahkan padding kiri untuk spasi -->
            <img src="images/apik1.png" alt="Image Description" class="w-full h-auto object-cover rounded-md">
        </div>
    </div>
</section>



    <<!-- Featured Categories -->
    <section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 justify-center">
            <div class="text-center relative">
                <img src="images/boxyky2.jpg" alt="" class="w-full rounded-md mb-4">
                <h3 class="font-bold text-white absolute inset-0 flex items-center justify-center">T-SHIRT</h3>
            </div>
            <div class="text-center relative">
                <img src="images/boxyky.jpg" alt="" class="w-full rounded-md mb-4">
                <h3 class="font-bold text-gray-900 absolute inset-0 flex items-center justify-center">JACKET</h3>
            </div>
            <div class="text-center relative">
                <img src="images/bagky.jpg" alt="" class="w-full rounded-md mb-4">
                <h3 class="font-bold text-white absolute inset-0 flex items-center justify-center">TOTE BAG</h3>
            </div>
        </div>
    </div>
</section>


    <!-- Features Section -->
    <section class="bg-[#1A1A1D] py-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <h4 class="text-white font-bold mb-2">Fully Responsive</h4>
                <p class="text-white">Skygie adalah toko sablon yang menyediakan berbagai layanan sablon berkualitas untuk kebutuhan pribadi maupun bisnis. Kami berkomitmen untuk memberikan hasil terbaik dengan teknologi sablon terkini, memastikan setiap pesanan Anda mendapatkan perhatian dan detail yang maksimal.</p>
            </div>
            <div class="text-center">
                <h4 class="text-white font-bold mb-2">Amazing Clients</h4>
                <p class="text-white">Dengan pengalaman bertahun-tahun di industri sablon, Skygie telah dipercaya oleh banyak pelanggan untuk mencetak berbagai desain kreatif, dari kaos, hoodie, hingga tote bag. Kami menggunakan bahan dan tinta terbaik untuk memastikan warna yang tajam dan tahan lama pada setiap produk yang kami buat.</p>
            </div>
            <div class="text-center">
                <h4 class="text-white font-bold mb-2">Easy to Customize</h4>
                <p class="text-white">Kami juga menerima pesanan custom sesuai permintaan Anda, baik untuk kebutuhan pribadi, event, atau kebutuhan perusahaan. Dengan pelayanan yang ramah dan proses yang cepat, Skygie siap membantu Anda mewujudkan desain impian Anda ke dalam produk sablon berkualitas tinggi.</p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-2xl font-bold mb-6">WHAT YOU'RE GOOD AT</h2>
            <div class="mb-4">
                <h3 class="font-bold">Kaos</h3>
                <div class="w-full bg-gray-300 rounded-full h-2.5">
                    <div class="bg-black h-2.5 rounded-full" style="width: 90%;"></div>
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold">Hoodie</h3>
                <div class="w-full bg-gray-300 rounded-full h-2.5">
                    <div class="bg-black h-2.5 rounded-full" style="width: 85%;"></div>
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-bold">Tote bag</h3>
                <div class="w-full bg-gray-300 rounded-full h-2.5">
                    <div class="bg-black h-2.5 rounded-full" style="width: 75%;"></div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection