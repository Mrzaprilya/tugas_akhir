@extends('layout')

@section('container')

<div class="container mx-auto py-10">
    <h2 class="text-center text-4xl font-semibold text-gray-800 mb-8">Your Cart</h2>

    <!-- Menampilkan notifikasi jika checkout berhasil -->
    @if (session('success'))
        <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Daftar produk di keranjang -->
    <ul id="cart-list" class="list-none p-0">
        <!-- Produk akan dimuat melalui JavaScript -->
    </ul>

    <!-- Total harga -->
    <div id="total-price" class="text-xl font-semibold mt-4"></div>

    <!-- Tombol Checkout -->
    <button onclick="checkout()" class="bg-blue-500 text-white py-2 px-4 rounded mt-6 hover:bg-blue-600 transition">
        Checkout
    </button>
</div>

<script>
    // Muat produk dari LocalStorage
    function loadCart() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartList = document.getElementById("cart-list");
        const totalPriceElement = document.getElementById("total-price");

        cartList.innerHTML = ""; // Kosongkan daftar cart
        let totalPrice = 0;

        // Menambahkan item ke dalam daftar keranjang dan menghitung total harga
        cart.forEach(item => {
            const li = document.createElement("li");
            li.classList.add("mb-2", "text-lg");
            li.textContent = `${item.name} - Rp ${item.price.toLocaleString()}`;
            cartList.appendChild(li);
            totalPrice += item.price;
        });

        // Menampilkan total harga
        totalPriceElement.textContent = `Total: Rp ${totalPrice.toLocaleString()}`;
    }

    // Checkout: Kosongkan keranjang dan tampilkan pesan
    function checkout() {
        const confirmation = confirm("Apakah Anda yakin ingin checkout?");
        if (confirmation) {
            localStorage.removeItem('cart'); // Menghapus cart dari LocalStorage
            alert("Checkout berhasil! Terima kasih atas pembelian Anda.");
            location.reload(); // Memuat ulang halaman untuk memperbarui status
        }
    }

    // Panggil fungsi saat halaman dimuat
    window.onload = loadCart;
</script>

@endsection
