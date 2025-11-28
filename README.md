# Technical Test WordPress Developer - Talenavi

Repository ini dibuat untuk pengumpulan tes teknis posisi WordPress Developer Internship. Project ini dikerjakan dengan memodifikasi tema bawaan Twenty Twenty-Five.

## Fitur Implementasi
Berikut adalah fitur-fitur yang sudah saya kerjakan sesuai instruksi:

1. Custom Page Template: Membuat template khusus untuk halaman event (file: page-event-test.php).
2. Data Dummy: Menggunakan array PHP yang ditaruh di functions.php (hardcode).
3. Fitur Sorting: Logic pengurutan harga (termurah/termahal) menggunakan PHP Native di sisi server.
4. Shortcode: Membuat shortcode [simple_event_count] untuk menampilkan jumlah total event.
5. Layout Responsif: Tampilan menggunakan CSS Flexbox agar rapi berupa grid card.

## Cara Install dan Menjalankan

Karena project ini berupa modifikasi tema, berikut langkah-langkah setup di Localhost:

1. Persiapan WordPress
Pastikan sudah install WordPress di XAMPP/Localhost dan tema yang aktif adalah Twenty Twenty-Five.

2. Pemasangan File
- Download file dari repository ini.
- Copy file page-event-test.php dan functions.php.
- Paste (timpa) file tersebut ke dalam folder tema di komputer: wp-content/themes/twentytwentyfive/

3. Pengaturan Halaman
- Login ke Dashboard WordPress (/wp-admin).
- Buat Halaman Baru (Pages > Add New).
- Beri judul halaman, misalnya "Tes Event".
- Lihat sidebar sebelah kanan, cari bagian Page Attributes/Template.
- Ubah Template menjadi Event Page.
- Klik Publish dan lihat hasilnya (View Page).

## Tech Stack
- WordPress 6.8.3
- PHP Native
- HTML5 & CSS3
