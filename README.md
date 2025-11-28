# tes-wordpress
Technical Test WordPress Internship.

Repository ini berisi hasil pengerjaan Technical Test untuk posisi Wordpress Developer Internship.
Project ini merupakan kustomisasi dari tema bawaan WordPress Twenty Twenty-Five.

 Fitur yang Dikerjakan
1. Custom Page Template: Membuat template halaman event (page-event-test.php).
2. Dynamic Data: Data event di-hardcode menggunakan PHP Array di functions.php.
3. Sorting System: Fitur pengurutan harga (Termurah/Termahal) menggunakan PHP Native (Server-side logic).
4. Shortcode: Menampilkan total event menggunakan shortcode (simple_event_count)
5. Responsive Layout: Menggunakan CSS Flexbox untuk tampilan grid card.

## Instruksi Instalasi (Cara Menjalankan)

Karena ini adalah modifikasi tema, berikut cara menjalankannya di Localhost:

1.   Siapkan WordPress
   - Install WordPress baru di XAMPP/Localhost.
   - Pastikan tema aktif adalah **Twenty Twenty-Five**.

2. pasang File:
   - Download kode dari repository ini.
   - Copy semua file (terutama page-event-test.php dan functions.php).
   - Paste (timpa/overwrite) ke dalam folder tema di komputer Anda:
     wp-content/themes/twentytwentyfive/

3. Setup Halaman:
   - Masuk ke Dashboard WordPress (/wp-admin).
   - Buat Halaman Baru (Pages -> Add New).
   - Beri Judul (misal: "Tes Event").
   - Di bagian Sidebar Kanan (Page Attributes), ubah Template menjadi "Event Page".
   - Klik Publish dan View Page.

  Tech Stack
- WordPress 6.8.3
- PHP Native
- HTML5 & CSS3
