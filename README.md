# News-Web-Laravel

🚧 **Proyek dalam Pengembangan** 🚧

## Deskripsi Proyek

Aplikasi web berita berbasis Laravel untuk pengembangan sistem informasi berita.

## Prasyarat

Sebelum memulai, pastikan Anda memiliki prasyarat berikut:

- PHP
- Composer
- Node.js
- npm

## Instalasi Proyek

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini:

### 1. Clone Repositori

```bash
git clone https://github.com/grantsam/News-Web-Laravel.git
cd News-Web-Laravel
```

### 2. Instalasi Dependensi

Instal dependensi PHP dan Node.js:

```bash
composer install
npm install
```

### 3. Setup Lingkungan

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

### 4. Generate Aplikasi Key

Jalankan perintah berikut untuk menghasilkan aplikasi key:

```bash
php artisan key:generate
```

### 5. Migrasi Database

Migrasi database dan isi dengan data contoh:

```bash
php artisan migrate --seed
```

### 6. Kompilasi Frontend

Kompilasi file frontend menggunakan npm:

```bash
npm run dev
```

### 7. Jalankan Server

Jalankan aplikasi Laravel di server lokal:

```bash
php artisan serve
```

## Cara Kontribusi

1. Fork repositori ini.
2. Buat branch untuk fitur baru.
3. Commit perubahan yang telah Anda buat.
4. Kirim pull request untuk perubahan Anda.

## Lisensi

Proyek ini dilisensikan di bawah MIT License.

## Dokumentasi

Untuk dokumentasi lebih lanjut, lihat [Laravel Documentation](https://laravel.com/docs).
```
