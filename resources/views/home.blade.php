@extends('layout')
@section('container')



<body>
<main>
<section class="hero">
  <div class="hero-image w-full h-full">
    <img src="images/apik2.jpg" alt="Model in hat" class="w-full h-full object-cover">
  </div>
</section>

    <section class="welcome flex items-center bg-white py-16 px-8">
    <!-- Bagian gambar -->
    <div class="w-1/3 pr-8">
        <img src="images/apik3.jpg" alt="Sablon Produk" class="w-full h-auto object-cover rounded-lg shadow-lg">
    </div>

    <!-- Bagian teks -->
    <div class="w-1/2 text-left pl-10">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-4" style="font-family: 'Roboto', sans-serif;">Welcome to Skygie</h2>
        <p class="text-lg text-gray-700 mb-6">
            Skygie adalah toko sablon yang menghadirkan kualitas terbaik untuk setiap kebutuhan sablon Anda. Kami menyediakan layanan sablon untuk kaos, tas, hoodie, dan berbagai produk lainnya dengan hasil yang tajam dan tahan lama. Di Skygie, kami percaya bahwa setiap desain harus memiliki sentuhan kreativitas yang unik dan memberikan kepuasan penuh bagi pelanggan kami. Dengan teknologi sablon terbaru dan bahan berkualitas tinggi, kami siap membantu Anda mewujudkan desain impian dalam waktu yang cepat dan harga yang kompetitif.
        </p>
        <!-- Box untuk 'Our Mission' -->
        <div >
            <a href="misi" class="btn bg-gray-100 text-black px-8 py-3 rounded-lg font-semibold hover:bg-gray-200 transition duration-300">Our Mission</a>
        </div>
    </div>
</section>

<section class="products py-16 px-8 bg-gray-100">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Produk 1 -->
    <div class="product bg-white p-6 rounded-lg shadow-lg text-center">
      <div class="aspect-w-3 aspect-h-4">
        <img src="images/mdl2.jpg" alt="Product 1" class="w-full h-full object-cover rounded-md mb-4">
      </div>
      <h3 class="text-2xl font-semibold text-gray-800 mb-2">You’re Amazing</h3>
      <p class="text-xl text-gray-600">Rp. 75.000-95.000</p>
    </div>
    
    <!-- Produk 2 -->
    <div class="product bg-white p-6 rounded-lg shadow-lg text-center">
      <div class="aspect-w-3 aspect-h-4">
        <img src="images/mdl3.jpg" alt="Product 2" class="w-full h-full object-cover rounded-md mb-4">
      </div>
      <h3 class="text-2xl font-semibold text-gray-800 mb-2">You’re Gorgeous</h3>
      <p class="text-xl text-gray-600">Rp. 105.000-205.000</p>
    </div>
    
    <!-- Produk 3 -->
    <div class="product bg-white p-6 rounded-lg shadow-lg text-center">
      <div class="aspect-w-3 aspect-h-4">
        <img src="images/mdl1.jpg" alt="Product 3" class="w-full h-full object-cover rounded-md mb-4">
      </div>
      <h3 class="text-2xl font-semibold text-gray-800 mb-2">You’re So Amazing</h3>
      <p class="text-xl text-gray-600">Rp. 32.000-70.000</p>
    </div>

  </div>
</section>


<section class="sale bg-cover bg-center bg-opacity-50 py-20 px-8 text-center rounded-lg shadow-xl" style="background-image: url('images/hero.jpg');">
    <h2 class="text-4xl font-extrabold text-gray-600 mb-6" style="font-family: 'Roboto', sans-serif;">Exclusive Sale</h2>
    <p class="text-lg text-gray-600 mb-8">Grab your favorite items at a discount before they’re gone!</p>
    <a href="shop" class="btn bg-gray-100 text-black px-8 py-3 rounded-full font-semibold hover:bg-gray-300 transition duration-300 transform hover:scale-105">
        Shop Now
    </a>
</section>

    <section class="adventure py-16 px-8 bg-gray-100 text-center">
    <h2 class="text-4xl font-extrabold text-gray-800 mb-8" style="font-family: 'Roboto', sans-serif;">Choose Your Adventure</h2>
    
    <!-- Pilihan petualangan -->
    <div class="adventure-options grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Opsi 1 -->
        <div class="adventure-option bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="images/as1.jpg" alt="Option 1" class="w-full h-64 object-cover">
        </div>
        
        <!-- Opsi 2 -->
        <div class="adventure-option bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="images/as2.jpg" alt="Option 2" class="w-full h-64 object-cover">
        </div>
        
        <!-- Opsi 3 -->
        <div class="adventure-option bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="images/as3.jpg" alt="Option 3" class="w-full h-64 object-cover">
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Talk To Our Staff</h2>
            <p class="text-gray-600 text-lg mb-6">Tanyakan pertanyaan mu disini.</p>
            <a href="contact">
            <button class="bg-black text-white px-8 py-3 rounded-md">Let's Talk</button>
            </a>
        </div>
    </section>
</body>
@endsection