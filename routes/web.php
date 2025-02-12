<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Menentukan jenis dokumen sebagai HTML5 dan 
         mengatur atribut "lang" secara dinamis berdasarkan lokal aplikasi Laravel. 
         Fungsi str_replace digunakan untuk mengganti "_" dengan "-" agar sesuai dengan format standar bahasa. -->

    <head>
        <meta charset="utf-8">
        <!-- Menentukan karakter set halaman sebagai UTF-8 untuk mendukung berbagai karakter dan simbol. -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Mengatur tampilan agar responsif, memastikan halaman dapat menyesuaikan dengan berbagai ukuran layar perangkat. -->

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <!-- Menentukan judul halaman yang diambil dari konfigurasi aplikasi Laravel.
             Jika nama aplikasi tidak tersedia, maka akan menggunakan "Laravel" sebagai default.
             "inertia" adalah atribut khusus untuk Inertia.js yang memungkinkan perubahan judul halaman secara dinamis. -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <!-- Mengoptimalkan koneksi ke penyedia font eksternal dengan melakukan preconnect, 
             sehingga mempercepat proses pemuatan font. -->

        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Memuat font "Figtree" dengan ketebalan 400 (normal), 500 (medium), dan 600 (semi-bold).
             Font ini akan diterapkan ke seluruh elemen dalam halaman. -->

        <!-- Scripts -->
        @routes
        <!-- Directive Blade untuk membuat rute frontend yang dapat diakses di dalam JavaScript. 
             Berguna saat menggunakan Ziggy untuk menangani rute Laravel di frontend. -->

        @viteReactRefresh
        <!-- Mengaktifkan fitur hot module replacement (HMR) dari Vite untuk React, 
             memungkinkan pengembang melihat perubahan kode secara langsung tanpa perlu reload halaman. -->

        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        <!-- Memuat file JavaScript utama aplikasi (app.jsx) dan komponen halaman yang sesuai dari Inertia.js.
             "$page['component']" akan diisi dengan nama komponen yang sedang diakses oleh pengguna, 
             sehingga hanya halaman yang dibutuhkan yang akan dimuat. -->

        @inertiaHead
        <!-- Memasukkan elemen-elemen head tambahan yang diperlukan oleh Inertia.js, 
             seperti metadata yang mungkin dibutuhkan untuk navigasi berbasis JavaScript. -->
    </head>

    <body class="font-sans antialiased">
        <!-- Menggunakan kelas "font-sans" agar font default halaman menggunakan sans-serif, 
             serta "antialiased" untuk tampilan teks yang lebih halus. -->

        @inertia
        <!-- Directive Blade untuk merender root aplikasi Inertia.js. 
             Inertia akan menggantikan bagian ini dengan komponen React sesuai dengan halaman yang sedang diakses. -->
    </body>
</html>
