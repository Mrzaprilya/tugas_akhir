<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Gie</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="bg-gray-900 border-gray-200 dark:bg-[#F1F0E8]">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="images/awan.png" class="h-10" alt="Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap text-[#629584]">SKYGIE</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <a href="cart">
        <button type="button" class="text-gray-900 bg-gray-300 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#4A628A] dark:hover:bg-[#4A628A] dark:focus:ring-[#4A628A]">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"/>
          </svg>
        </button>
      </a>

      <!-- Tombol Kritik dan Saran dengan jarak tambahan -->
      <a href="kritik" class="flex items-center space-x-2 ml-4"> <!-- Tambahkan ml-4 di sini -->
        <button type="button" class="text-gray-900 bg-gray-300 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#4A628A] dark:hover:bg-[#4A628A] dark:focus:ring-[#4A628A]">
          <!-- Ikon Kritik dan Saran -->
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z"/>
</svg>
        </button>
      </a>

      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-[#E5E1DA] rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#E5E1DA] dark:bg-[#E5E1DA] md:dark:bg-[#F1F0E8] dark:border-[#F1F0E8]">
        <li>
          <a href="home" class="block py-2 px-3 md:p-0 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-900 md:dark:hover:text-gray-500 dark:text-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
        </li>
        <li>
          <a href="about" class="block py-2 px-3 md:p-0 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-900 md:dark:hover:text-gray-500 dark:text-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
          <a href="shop" class="block py-2 px-3 md:p-0 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-900 md:dark:hover:text-gray-500 dark:text-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('container')

<footer class="bg-[#F1F0E8] text-black py-12">
    <div class="container mx-auto px-6 md:px-12">
        <!-- Bagian atas footer: Logo dan Slogan -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <img src="images/awan.png" alt="Skygie Collection Logo" class="h-12 mb-2">
                <p class="text-xl font-semibold">Skygie Collection</p>
            </div>
            <p class="text-lg italic">Beli tanpa ragu, nikmati tanpa batas</p>
        </div>

        <!-- Bagian link -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 mb-8">
            <div>
                <p class="font-semibold text-lg">Company</p>
                <ul class="space-y-2">
                    <li><a href="about" class="hover:text-[#CBD2A4]">About Us</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Careers</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Press</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Investor Relations</a></li>
                </ul>
            </div>
            <div>
                <p class="font-semibold text-lg">Customer Care</p>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#CBD2A4]">Help & FAQ</a></li>
                    <li><a href="contact" class="hover:text-[#CBD2A4]">Contact Us</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Order Status</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Returns</a></li>
                </ul>
            </div>
            <div>
                <p class="font-semibold text-lg">Connect</p>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#CBD2A4]">Facebook</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Instagram</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Twitter</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">LinkedIn</a></li>
                </ul>
            </div>
            <div>
                <p class="font-semibold text-lg">Quick Links</p>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#CBD2A4]">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Accessibility</a></li>
                    <li><a href="#" class="hover:text-[#CBD2A4]">Sitemap</a></li>
                </ul>
            </div>
        </div>

        <!-- Bagian bawah footer: Media Sosial dan Copyright -->
        <div class="flex justify-between items-center">
            <div class="flex space-x-6">
                <a href="#" class="text-black hover:text-[#CBD2A4]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 2l4 4m0 0l-4 4m4-4H6m8 8l-4 4m0 0l4 4m0-4h-8"/>
                    </svg>
                </a>
                <a href="#" class="text-black hover:text-[#CBD2A4]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18M3 12h18"/>
                    </svg>
                </a>
                <a href="#" class="text-black hover:text-[#CBD2A4]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7 3.134-7 7-7z"/>
                    </svg>
                </a>
            </div>

            <div>
                <p class="text-xs">&copy; 2024 Skygie Collection. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Import Flowbite JS -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.1/dist/flowbite.js"></script>


</body>
</html>