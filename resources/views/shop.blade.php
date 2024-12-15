@extends('layout')
@section('container')

<!-- Special T-shirts Section -->
<section class="py-10 bg-beige-light">
  <div class="container mx-auto px-4">
    <h2 class="text-center text-4xl font-semibold text-gray-800 mb-8">Our Special T-shirt Collection</h2>
    <div class="relative">
      <div class="flex overflow-x-auto space-x-6 pb-6 scroll-smooth">
        
        <!-- T-shirt Card -->
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/ini1.jpg" alt="Space Universe T-shirt" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Space Universe T-shirt</h3>
            <p class="text-sm text-gray-600">Rp. 79.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Space Universe T-shirt', 79999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>

        <!-- Other T-shirts -->
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/ini2.jpg" alt="Cat Adopt T-shirt" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Cat Adopt T-shirt</h3>
            <p class="text-sm text-gray-600">Rp. 79.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Cat Adopt T-shirt', 79999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/ini3.jpg" alt="Japanese Tea Letters T-shirt" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Japanese Tea Letters T-shirt</h3>
            <p class="text-sm text-gray-600">Rp. 79.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Japanese Tea Letters T-shirt', 79999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/ini4.jpg" alt="Men Bear T-shirt" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Men Bear T-shirt</h3>
            <p class="text-sm text-gray-600">Rp. 76.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Men Bear T-shirt', 76999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/ini5.jpg" alt="Car Outside T-shirt" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Car Outside T-shirt</h3>
            <p class="text-sm text-gray-600">Rp. 76.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Car Outside T-shirt', 76999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/ini6.jpg" alt="Skull Flower T-shirt" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Skull Flower T-shirt</h3>
            <p class="text-sm text-gray-600">Rp. 74.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Skull Flower T-shirt', 74999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>

      </div>
      <!-- Scroll Arrows (optional) -->
      <div class="absolute top-1/2 left-0 transform -translate-y-1/2 text-2xl text-gray-600 cursor-pointer hover:text-yellow-500">
        <i class="fa fa-chevron-left"></i>
      </div>
      <div class="absolute top-1/2 right-0 transform -translate-y-1/2 text-2xl text-gray-600 cursor-pointer hover:text-yellow-500">
        <i class="fa fa-chevron-right"></i>
      </div>
    </div>
  </div>
</section>

<!-- Special Jackets Section -->
<section class="py-10 bg-beige-light">
  <div class="container mx-auto px-4">
    <h2 class="text-center text-4xl font-semibold text-gray-800 mb-8">Our Stylish Jackets</h2>
    <div class="relative">
      <div class="flex overflow-x-auto space-x-6 pb-6 scroll-smooth">
        <!-- Jacket Card -->
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/boxy1.jpg" alt="Butterfly Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Bear Exclusive Jacket</h3>
            <p class="text-sm text-gray-600">Rp. 199.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Bear Exclusive Jacket', 199999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>

        <!-- Other Jackets -->
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/boxy2.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Gravity Bear Jacket</h3>
            <p class="text-sm text-gray-600">Rp. 199.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Gravity Bear Jacket', 199999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/boxy3.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Stary Sky Jacket</h3>
            <p class="text-sm text-gray-600">Rp. 204.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Stary Sky Jacket', 204999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/boxy4.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Blue Butterfly Jacket</h3>
            <p class="text-sm text-gray-600">Rp. 189.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Blue Butterfly Jacket', 189999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/boxy5.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Black Butterfly Jacket</h3>
            <p class="text-sm text-gray-600">Rp. 189.999</p>
            <a href="javascript:void(0);" onclick="addToCart('Black Butterfly Jacket', 189999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/boxy6.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">NASA Astronout Jacket</h3>
            <p class="text-sm text-gray-600">Rp. 159.999</p>
            <a href="javascript:void(0);" onclick="addToCart('NASA Astronout Jacket', 159999)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
      </div>
      <!-- Scroll Arrows (optional) -->
      <div class="absolute top-1/2 left-0 transform -translate-y-1/2 text-2xl text-gray-600 cursor-pointer hover:text-yellow-500">
        <i class="fa fa-chevron-left"></i>
      </div>
      <div class="absolute top-1/2 right-0 transform -translate-y-1/2 text-2xl text-gray-600 cursor-pointer hover:text-yellow-500">
        <i class="fa fa-chevron-right"></i>
      </div>
    </div>
  </div>
</section>

<!-- Special Tote Bag Section -->
<section class="py-10 bg-beige-light">
  <div class="container mx-auto px-4">
    <h2 class="text-center text-4xl font-semibold text-gray-800 mb-8">Our Exclusive Tote Bags</h2>
    <div class="relative">
      <div class="flex overflow-x-auto space-x-6 pb-6 scroll-smooth">
        <!-- Tote Bag Card -->
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/kupu1.jpg" alt="Butterfly Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Butterfly Tote Bag</h3>
            <p class="text-sm text-gray-600">Rp. 69.000</p>
            <a href="javascript:void(0);" onclick="addToCart('Butterfly Tote Bag', 69000)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>

        <!-- Other Tote Bags -->
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/love1.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Love Purple Tote Bag</h3>
            <p class="text-sm text-gray-600">Rp. 59.000</p>
            <a href="javascript:void(0);" onclick="addToCart('Love Purple Tote Bag', 59000)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/love2.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Love Blue Tote Bag</h3>
            <p class="text-sm text-gray-600">Rp. 59.000</p>
            <a href="javascript:void(0);" onclick="addToCart('Love Blue Tote Bag', 59000)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/love3.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Love Green Tote Bag</h3>
            <p class="text-sm text-gray-600">Rp. 59.000</p>
            <a href="javascript:void(0);" onclick="addToCart('Love Green Tote Bag', 59000)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/love4.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Love Brown Tote Bag</h3>
            <p class="text-sm text-gray-600">Rp. 59.000</p>
            <a href="javascript:void(0);" onclick="addToCart('Love Brown Tote Bag', 59000)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
        <div class="bg-white shadow-xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
          <img src="images/love5.jpg" alt="Love Purple Tote Bag" class="w-full h-64 object-cover transition-transform transform hover:scale-110">
          <div class="p-6 text-center">
            <h3 class="font-semibold text-xl text-gray-700">Love Pink Tote Bag</h3>
            <p class="text-sm text-gray-600">Rp. 59.000</p>
            <a href="javascript:void(0);" onclick="addToCart('Love Pink Tote Bag', 59000)" class="mt-4 block w-full bg-yellow-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition">Order Now</a>
          </div>
        </div>
      </div>
      <!-- Scroll Arrows (optional) -->
      <div class="absolute top-1/2 left-0 transform -translate-y-1/2 text-2xl text-gray-600 cursor-pointer hover:text-yellow-500">
        <i class="fa fa-chevron-left"></i>
      </div>
      <div class="absolute top-1/2 right-0 transform -translate-y-1/2 text-2xl text-gray-600 cursor-pointer hover:text-yellow-500">
        <i class="fa fa-chevron-right"></i>
      </div>
    </div>
  </div>
</section>
</form>

<!-- Testimonials Section -->
<section class="py-10 bg-gray-50">
  <div class="container mx-auto px-4">
    <h2 class="text-center text-4xl font-semibold text-gray-800 mb-8">Our Happy Customers</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Testimonial Card -->
      <div class="bg-white shadow-xl rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-2xl">
        <p class="text-sm text-gray-600">"I loved the service. Definitely coming back!"</p>
        <div class="mt-4 flex items-center space-x-4">
          <img src="https://via.placeholder.com/50" alt="Customer" class="w-12 h-12 rounded-full">
          <div>
            <p class="font-semibold">Jane Adams</p>
            <p class="text-xs text-yellow-500">★★★★★</p>
          </div>
        </div>
      </div>

      <!-- Repeat for other testimonials -->
      <div class="bg-white shadow-xl rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-2xl">
        <p class="text-sm text-gray-600">"Best shopping experience ever. Love the products!"</p>
        <div class="mt-4 flex items-center space-x-4">
          <img src="https://via.placeholder.com/50" alt="Customer" class="w-12 h-12 rounded-full">
          <div>
            <p class="font-semibold">John Doe</p>
            <p class="text-xs text-yellow-500">★★★★★</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
<script>
    function addToCart(productName, productPrice) {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push({ name: productName, price: productPrice });
        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${productName} telah ditambahkan ke keranjang.`);
    }
</script>
