@extends('layout')
@section('container')

    <!-- Hero Section -->
    <section class="bg-green-600 text-white py-16" id="order">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Cara Pemesanan</h1>
            <p class="text-lg">Untuk memesan produk Skygie, ikuti langkah-langkah berikut ini. Pastikan pesanan Anda minimal 5 pcs!</p>
        </div>
    </section>

    <!-- Order Steps Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Langkah-Langkah Pemesanan</h2>
            <ol class="space-y-6">
                <!-- Step 1 -->
                <li class="flex items-center space-x-4">
                    <span class="w-10 h-10 flex items-center justify-center bg-green-600 text-white rounded-full font-bold">1</span>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Pilih Produk</h3>
                        <p class="text-gray-600">Pilih produk yang ingin Anda pesan. Pastikan jumlah yang Anda pesan minimal 5 pcs.</p>
                    </div>
                </li>

                <!-- Step 2 -->
                <li class="flex items-center space-x-4">
                    <span class="w-10 h-10 flex items-center justify-center bg-green-600 text-white rounded-full font-bold">2</span>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Isi Formulir Pemesanan</h3>
                        <p class="text-gray-600">Isi data pemesanan seperti jumlah produk dan alamat pengiriman.</p>
                    </div>
                </li>

                <!-- Step 3 -->
                <li class="flex items-center space-x-4">
                    <span class="w-10 h-10 flex items-center justify-center bg-green-600 text-white rounded-full font-bold">3</span>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Konfirmasi Pembayaran</h3>
                        <p class="text-gray-600">Lakukan pembayaran sesuai dengan total harga yang tertera.</p>
                    </div>
                </li>

                <!-- Step 4 -->
                <li class="flex items-center space-x-4">
                    <span class="w-10 h-10 flex items-center justify-center bg-green-600 text-white rounded-full font-bold">4</span>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Hubungi Kami di WhatsApp</h3>
                        <p class="text-gray-600">Setelah pembayaran selesai, hubungi kami untuk konfirmasi dan pengiriman barang melalui WhatsApp.</p>
                        <a href="https://wa.me/6281615546504?text=Halo,%20saya%20ingin%20memesan%20produk%20Skygie" target="_blank" class="inline-flex items-center mt-4 px-6 py-3 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600">
                            <span class="mr-2">Chat via WhatsApp</span>
                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M21 12l-18 8v-16l18 8z"></path>
                            </svg>
                        </a>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <!-- Order Form Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Form Pemesanan</h2>
            <form id="order-form" class="space-y-6">
                <div>
                    <label for="product" class="block text-gray-700 font-medium">Produk yang Dipesan</label>
                    <select id="product" name="product" class="w-full p-4 mt-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600">
                        <option value="produk1">T-Shirt</option>
                        <option value="produk2">Hoodie</option>
                        <option value="produk3">Tote Bag</option>
                    </select>
                </div>

                <div>
                    <label for="quantity" class="block text-gray-700 font-medium">Jumlah Pesanan</label>
                    <input type="number" id="quantity" name="quantity" class="w-full p-4 mt-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600" min="5" value="5" required>
                    <small class="text-gray-600">Minimal 5 pcs</small>
                </div>

                <button type="submit" class="w-full py-3 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600">
                    Kirim Pesanan
                </button>
            </form>

            <div id="order-response" class="mt-6 hidden text-center text-gray-600">
                <p class="font-semibold" id="order-text"></p>
            </div>
        </div>
    </section>

    <script>
        // Handle order form submission
        const form = document.getElementById('order-form');
        const responseMessage = document.getElementById('order-response');
        const responseText = document.getElementById('order-text');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting normally

            const quantity = document.getElementById('quantity').value;

            // Check if quantity is at least 5
            if (quantity < 5) {
                responseMessage.classList.remove('hidden');
                responseText.textContent = 'Jumlah pesanan minimal 5 pcs.';
                responseText.classList.add('text-red-600');
                return;
            }

            // Simulate successful order submission
            responseMessage.classList.remove('hidden');
            responseText.textContent = 'Pesanan Anda berhasil dikirim! Silakan lanjutkan ke WhatsApp untuk konfirmasi.';
            responseText.classList.add('text-green-600');

            // Reset form after submission
            form.reset();
        });
    </script>
@endsection