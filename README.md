<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

##
1. Pengertian Framework dan Contohnya (TMS)
Framework adalah kerangka kerja dalam pengembangan aplikasi atau web yang menyediakan struktur dasar, aturan, dan kumpulan library agar proses pengembangan menjadi lebih cepat, terstruktur, dan efisien.
Framework membantu developer agar tidak perlu menulis kode dari nol serta meminimalkan kesalahan.
TMS (Transaction Management System) adalah framework/sistem yang digunakan untuk mengelola transaksi, seperti pencatatan data, validasi transaksi, dan pengolahan laporan.
Contoh framework yang diketahui:
Laravel (PHP)
CodeIgniter (PHP)
Spring (Java)
Django (Python)
2. Framework Lama Tidak Support Versi Terbaru
Jika framework yang digunakan sudah lama dan tidak mendukung versi terbaru, maka yang perlu dilakukan adalah:
Melakukan upgrade framework ke versi yang lebih baru agar kompatibel dengan sistem terbaru.
Jika upgrade tidak memungkinkan, maka migrasi ke framework lain yang masih aktif dikembangkan.
Menyesuaikan kode program agar sesuai dengan standar framework versi terbaru.
Tujuannya agar aplikasi tetap aman, stabil, dan dapat berjalan di perangkat terbaru.
3. Solusi Aplikasi Web (TRS) Saat Laptop Mati
Permasalahan terjadi karena aplikasi berbasis web membutuhkan koneksi online, sementara laptop mati akibat baterai habis.
Solusi yang dapat dilakukan:
Menyediakan fitur auto-save agar data tersimpan otomatis.
Menggunakan local storage atau cache agar data sementara tetap tersimpan.
Menggunakan server online/cloud, sehingga aplikasi tetap dapat diakses dari perangkat lain.
Menyediakan UPS atau power bank laptop sebagai antisipasi kehabisan daya.
Dengan solusi ini, pekerjaan tetap aman dan tidak hilang meskipun perangkat mati.
4. Kode Program OOP – Class Mobil (IRES)
Berikut contoh kode program berorientasi objek (OOP) dengan class Mobil yang memiliki atribut dan menggunakan prinsip Inheritance, Encapsulation, dan Class:
Contoh (PHP):
<?php
class Mobil {
    public string $warna;
    public string $merk;
    public int $tahunProduksi;

    public function __construct($warna, $merk, $tahunProduksi) {
        $this->warna = $warna;
        $this->merk = $merk;
        $this->tahunProduksi = $tahunProduksi;
    }

    public function infoMobil() {
        return "Mobil ini bermerk $this->merk, berwarna $this->warna, tahun $this->tahunProduksi";
    }
}

// Membuat objek
$mobil1 = new Mobil("Hitam", "Toyota", 2022);
echo $mobil1->infoMobil();
?>
Kode di atas menunjukkan:
Class: Mobil
Atribut: warna (String), merk (String), tahunProduksi (Integer)
Object: $mobil1
