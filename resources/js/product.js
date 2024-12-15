// script.js
const unitPrice = 100000; // Harga satuan produk (Kaos Polos)
const quantityInput = document.getElementById('quantity');
const totalPriceElement = document.getElementById('total-price');
const productForm = document.getElementById('product-form');
const cartMessage = document.getElementById('cart-message');

function updateTotalPrice() {
    // Ambil jumlah dari input quantity
    const quantity = parseInt(quantityInput.value);
    
    // Hitung total harga
    const totalPrice = unitPrice * quantity;

    // Update elemen total harga di halaman
    totalPriceElement.innerText = totalPrice.toLocaleString('id-ID');
}

// Event listener untuk memperbarui total harga ketika jumlah produk berubah
quantityInput.addEventListener('input', updateTotalPrice);

// Inisialisasi total harga ketika halaman pertama kali dimuat
updateTotalPrice();

// Event listener untuk meng-handle form submit (tambah ke keranjang)
productForm.addEventListener('submit', function(e) {
    e.preventDefault();  // Mencegah form submit dan reload halaman

    // Ambil pilihan warna, ukuran, dan jumlah produk
    const color = document.getElementById('color').value;
    const size = document.getElementById('size').value;
    const quantity = quantityInput.value;

    // Menampilkan pesan bahwa produk berhasil ditambahkan ke keranjang
    const message = `Produk Kaos Polos dengan warna ${color}, ukuran ${size}, dan jumlah ${quantity} telah ditambahkan ke keranjang.`;

    // Menampilkan pesan di bagian bawah produk
    cartMessage.innerText = message;
});