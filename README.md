# Laravel 11 UAS

## 📌 Deskripsi Proyek
Proyek ini adalah implementasi autentikasi dan keamanan web menggunakan Laravel 11. Fitur-fitur utama dalam proyek ini meliputi:

- **Autentikasi** dengan Laravel Breeze
- **Middleware XSS Protection** untuk mencegah serangan XSS
- **Tanda tangan digital dengan QR Code**
- **Captcha pada form login & registrasi** untuk menghindari serangan bot
- **Watermark logo** pada halaman login, navbar, dan footer

## 🚀 Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

1. **Clone repository**
   ```sh
   git clone https://github.com/noval-14/laravel-11-uas.git
   cd laravel-11-uas
   ```

2. **Install dependencies**
   ```sh
   composer install
   npm install && npm run build
   ```

3. **Konfigurasi environment**
   - Salin file `.env.example` menjadi `.env`
   - Atur konfigurasi database dan kunci reCAPTCHA di `.env`
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. **Migrasi database**
   ```sh
   php artisan migrate --seed
   ```

5. **Jalankan aplikasi**
   ```sh
   php artisan serve
   ```
   Aplikasi akan berjalan di `http://127.0.0.1:8000`

## 🔐 Fitur Keamanan

### 1️⃣ Middleware XSS Protection
Middleware ini secara otomatis membersihkan input pengguna dari karakter berbahaya untuk mencegah serangan XSS.

### 2️⃣ Captcha pada Form Login & Registrasi
Menggunakan Google reCAPTCHA untuk mencegah pendaftaran dan login bot.

### 3️⃣ Tanda Tangan Digital dengan QR Code
Membuat QR Code berisi informasi tanda tangan digital dan menampilkannya di halaman tertentu.

### 4️⃣ Watermark Logo
Menambahkan logo pada halaman login, navbar, dan footer menggunakan Laravel Blade.

## 📜 Lisensi
Proyek ini menggunakan lisensi **MIT**. Silakan gunakan dan modifikasi sesuai kebutuhan.

---

Jika ada pertanyaan atau ingin berkontribusi, silakan buat **issue** atau **pull request** di repository ini. ✨

