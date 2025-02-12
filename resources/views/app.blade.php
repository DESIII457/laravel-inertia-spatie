<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <!-- Menentukan bahasa halaman berdasarkan konfigurasi Laravel -->

    <head>
        <meta charset="utf-8">
        <!-- Menentukan karakter set halaman sebagai UTF-8 untuk mendukung berbagai karakter -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Mengatur tampilan agar responsif di berbagai perangkat -->

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <!-- Menentukan judul halaman, default-nya diambil dari konfigurasi aplikasi Laravel -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <!-- Mempercepat koneksi ke penyedia font eksternal -->

        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Mengimpor font "Figtree" dengan beberapa variasi ketebalan -->

        <!-- Scripts -->
        @routes
        <!-- Menggunakan directive Blade untuk mendefinisikan rute agar bisa diakses di frontend -->

        @viteReactRefresh
        <!-- Mengaktifkan fitur hot module replacement untuk React di Vite -->

        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        <!-- Memuat file utama React (app.jsx) dan komponen halaman yang sesuai berdasarkan data dari Inertia.js -->

        @inertiaHead
        <!-- Memasukkan elemen-elemen head tambahan yang diperlukan oleh Inertia.js -->
    </head>

    <body class="font-sans antialiased">
        @inertia
        <!-- Menyediakan elemen root untuk Inertia.js agar dapat merender halaman React -->
    </body>
</html>
