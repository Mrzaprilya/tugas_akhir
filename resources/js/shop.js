
    function updatePrice() {
        var size = document.getElementById("size").value.toUpperCase();
        var priceElement = document.getElementById("size-price");
        var basePrice = 75000;  // Harga dasar

        var extraCost = 5000;

        // Menentukan harga tambahan berdasarkan ukuran
        if (size === "L" || size === "XL") {
            extraCost = 5000;  // Contoh harga tambahan untuk L dan XL
        }

        // Menampilkan harga total
        priceElement.textContent = "Harga tambahan: Rp.5000 " + extraCost;

        // Update harga total produk
        var totalPrice = basePrice + extraCost;
        document.getElementById("product-price").textContent = "Rp. " + totalPrice;
    }

