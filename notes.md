Aplikasi Rental Kendaraan menggunakan Framework Laravel
1. composer create-project --prefer-dist laravel/laravel aplikasi-rental
2. setting koneksi database di file .env
3. php artisan make:model Produk -m
4. edit file migration produks sesuai field yang diinginkan
5. php artisan migrate      
6. Buat Model untuk ProdukHarga dengan perintah php artisan make:model ProdukHarga -m
7. Edit file migration ProdukHarga (termasuk buat relasi tablenya)
8. Buat Model untuk Pelanggan dengan perintah php artisan make:model Pelanggan -m
9. Edit file migration Pelanggan
10. php artisan migrate
11. Buat Model untuk Transaksi dengan perintah php artisan make:model Transaksi -m
12. Templating, install composer require laravel/ui
13. php artisan ui vue --auth
14. Buat user seeder dengan perintah php artisan make:seeder UserTableSeeder
15. Edit file Seeder terkait
16. Jalankan seeder dengan perintah php artisan db:seed --class=UserTableSeeder
17. 



