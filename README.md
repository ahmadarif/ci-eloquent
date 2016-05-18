# Overview
Implementasi Eloquent ORM pada framework Codeigniter

# Tutorial Implementasi
- Pastikan composer sudah siap siap digunakan, jika belum silahkan main ke [sini](https://getcomposer.org)
- Pada root folder project buka atau buat file `composer.json`, kemudian isi tambahkan code berikut ini
```
"require": {
	"php": ">=5.2.4",
"illuminate/database": "5.0.28"
}
```
- Jalankan perintah `composer install` pada terminal/command prompt $..blablabla\proyek>[di sini]
- Buka `index.php`, kemudian tambahkan kode berikut di bagian atas sebelum kode asli codeigniter dipanggil
```
/*
 * --------------------------------------------------------------------
 * LOAD THE COMPOSER PACKAGE
 * --------------------------------------------------------------------
 */
require_once 'vendor/autoload.php';
```
- Buka `index.php`, kemudian tambahkan kode berikut di bagian paling bawah
```
/*
 * --------------------------------------------------------------------
 * Eloquent Setting
 * --------------------------------------------------------------------
 */
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $db['default']['hostname'],
    'database'  => $db['default']['database'],
    'username'  => $db['default']['username'],
    'password'  => $db['default']['password'],
    'charset'   => $db['default']['char_set'],
    'collation' => $db['default']['dbcollat'],
    'prefix'    => $db['default']['dbprefix'],
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
```
- Selesai! Lihat contoh implementasi di `models/User.php` dan `controllers/UserController.php`
- Belajar lebih lanjut tentang Eloquent main aja ke [sini](https://laravel.com/docs/5.2/eloquent)
