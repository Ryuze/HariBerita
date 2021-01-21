## Berita Harian
Project ini ada untuk memenuhi tugas kuliah web framework.

## Cara pemasangan
1. git clone project ini
2. buat database dengan nama "harian"
3. buka folder project dengan terminal kemudian ketik "composer install"
4. ketik kembali "npm install" dan "npm run dev"
5. ketik "php artisan migrate:fresh --seed"
6. periksa apakah ada folder "images" pada storage\app\public, jika tidak buat folder tersebut terlebih dahulu, jika ada langsung ke langkah 7
7. ketik php artisan storage:link
8. selesai