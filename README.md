# Laravel 11 Project

## 📌 Deskripsi Proyek

Proyek ini adalah aplikasi berbasis web yang dibangun menggunakan **Laravel 11**. Aplikasi ini memiliki fitur autentikasi, proteksi XSS, CAPTCHA, tanda tangan digital menggunakan QR Code, serta tampilan profesional dengan watermark logo.

## 🔧 Fitur Utama

1. **Autentikasi Laravel Breeze** – Login, register, dan reset password.
2. **Proteksi XSS** – Middleware untuk mencegah serangan XSS.
3. **Watermark Logo** – Logo tampil di halaman login, navbar, dan footer.
4. **QR Code Digital Signature** – Generate QR Code untuk tanda tangan digital.
5. **Google reCAPTCHA** – Mencegah bot melakukan login/registrasi otomatis.

## 🚀 Instalasi & Konfigurasi

### 1️⃣ **Clone Repository**

```bash
git clone https://github.com/noval-14/nama-repo.git
cd nama-repo
```

### 2️⃣ **Instal Dependensi**

```bash
composer install
npm install && npm run dev
```

### 3️⃣ **Konfigurasi Environment**

Salin file `.env.example` dan ubah menjadi `.env`, lalu sesuaikan pengaturan database & reCAPTCHA:

```bash
cp .env.example .env
php artisan key:generate
```

Tambahkan reCAPTCHA credentials di `.env`:

```env
NOCAPTCHA_SITEKEY=your-site-key
NOCAPTCHA_SECRET=your-secret-key
```

### 4️⃣ **Migrasi Database**

```bash
php artisan migrate --seed
```

### 5️⃣ **Jalankan Server**

```bash
php artisan serve
```

Akses aplikasi di: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

## 🛠 Teknologi yang Digunakan

- **Laravel 11** – Framework utama
- **Laravel Breeze** – Sistem autentikasi
- **Anhskohbo/no-captcha** – Google reCAPTCHA
- **Simple-QrCode** – Generate QR Code untuk tanda tangan digital

## 📜 Lisensi

Proyek ini menggunakan lisensi **MIT**. Silakan gunakan dan kembangkan sesuai kebutuhan! 🚀

---

NOVALDY BRAYN RUMTEH
# laravel-11-uas
