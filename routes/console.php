<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Artisan Console Command
|--------------------------------------------------------------------------
| File ini digunakan untuk mendefinisikan perintah Artisan kustom.
| Artisan adalah antarmuka command-line Laravel yang memungkinkan kita 
| menjalankan berbagai tugas otomatis, seperti migrasi, seeding, dan lainnya.
*/

Artisan::command('inspire', function () {
    // Mendefinisikan perintah baru bernama 'inspire' yang bisa dijalankan melalui terminal.
    
    $this->comment(Inspiring::quote());
    // Mengambil kutipan inspirasional dari kelas Inspiring dan menampilkannya sebagai komentar di terminal.
})->purpose('Display an inspiring quote')->hourly();
// Menetapkan tujuan perintah sebagai 'Display an inspiring quote' untuk dokumentasi CLI.
// Menjadwalkan perintah agar berjalan setiap jam dengan metode ->hourly().
