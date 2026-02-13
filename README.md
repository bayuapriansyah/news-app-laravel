# News App Laravel

**Aplikasi berita dengan laravel 12**. Proyek ini merupakan aplikasi berbasis web yang dirancang untuk pengelolaan dan penyajian berita secara efisien menggunakan fitur-fitur terbaru dari framework Laravel.

## Fitur Utama

Berdasarkan kapabilitas framework yang digunakan, aplikasi ini mendukung:
- **Sistem Routing yang Cepat:** Menggunakan engine routing Laravel untuk navigasi yang lancar.
- **Manajemen Database (ORM):** Pemetaan database yang intuitif dan ekspresif menggunakan Eloquent ORM.
- **Sistem Migrasi:** Manajemen skema database yang agnostik untuk kemudahan deployment.
- **Blade Templating:** Antarmuka pengguna yang dinamis menggunakan engine templating Blade.
- **Pemrosesan Job Latar Belakang:** Untuk menangani tugas-tugas berat secara efisien.

## Teknologi yang Digunakan

Proyek ini dibangun dengan teknologi modern berikut:
- **Framework Utama:** [Laravel 12](https://laravel.com).
- **Bahasa Pemrograman:** PHP dan Blade.
- **Build Tools & Styling:**
  - **Vite:** Untuk kompilasi aset frontend yang cepat.
  - **Tailwind CSS:** Untuk desain antarmuka yang responsif dan modern.
  - **PostCSS:** Digunakan dalam alur kerja pemrosesan CSS.
- **Dependency Management:** Composer (PHP) dan NPM/Package Lock (JavaScript).

## Prasyarat Instalasi

Sebelum menjalankan proyek ini, pastikan perangkat Anda telah terpasang:
1. **PHP >= 8.x** (Sesuai kebutuhan Laravel 12).
2. **Composer** untuk mengelola dependensi PHP.
3. **Node.js & NPM** untuk mengelola aset frontend.
4. **Database Engine** (seperti MySQL, PostgreSQL, atau SQLite).

**Langkah Instalasi:**
1. Clone repositori ini.
2. Jalankan `composer install` untuk memasang library PHP.
3. Jalankan `npm install && npm run dev` untuk menyiapkan aset frontend.
4. Salin `.env.example` menjadi `.env` dan sesuaikan konfigurasi database.
5. Jalankan `php artisan key:generate` dan `php artisan migrate`.

## Struktur Proyek

Susunan folder dalam proyek ini mengikuti standar Laravel:
- `app/`: Berisi logika inti aplikasi.
- `database/`: Berisi migrasi database dan seeders.
- `public/`: Titik masuk aplikasi dan aset publik.
- `resources/`: Berisi tampilan Blade dan aset CSS/JS mentah.
- `routes/`: Definisi rute aplikasi.
- `tests/`: File untuk pengujian otomatis (PHPUnit).

## Kegunaan
Aplikasi ini dapat digunakan sebagai platform dasar untuk membangun portal berita, blog pribadi, atau sistem manajemen konten (CMS) yang memerlukan performa tinggi dan keamanan yang baik.

## Kontribusi
Kami menerima kontribusi dengan senang hati! Jika Anda ingin berkontribusi:
1. Fork repositori ini.
2. Buat branch fitur baru.
3. Lakukan commit perubahan Anda.
4. Kirimkan Pull Request untuk ditinjau.

## Lisensi
Proyek ini bersifat open-source dan dilisensikan di bawah **[MIT license](https://opensource.org/licenses/MIT)**.
