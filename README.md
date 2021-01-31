## Berita Harian
Project ini ada untuk memenuhi tugas kuliah web framework.

## Creator yang berkontribusi
1. Abdurahman Azis Lasawali (1710631170030)
2. Alfian Yunianto Suseno (1710631170045)
3. Alfin Miftahudin (1710631170046)
4. Chaerul Hadad (1710631170075)
5. Dwi Septa Kariza (1710631170086)
6. Izhari Alwansyah (1710631170120)
7. Mohammad Sholahuddin Al Ayyubi (1710631170138)

## Cara pemasangan
1. git clone project ini
2. buat database dengan nama "harian"
3. buka folder project dengan terminal kemudian ketik "composer install"
4. ketik kembali "npm install" dan "npm run dev"
5. ketik "php artisan migrate:fresh --seed"
6. periksa apakah ada folder "images" pada storage\app\public, jika tidak buat folder tersebut terlebih dahulu, jika ada langsung ke langkah 7
7. ketik php artisan storage:link
8. selesai