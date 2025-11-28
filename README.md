Technical Test WordPress Developer - Talenavi

Repository ini berisi source code hasil pengerjaan tes teknis untuk posisi WordPress Developer Internship. Project ini dikerjakan dengan memodifikasi tema bawaan Twenty Twenty-Five.

Cara Install
Karena project ini berupa modifikasi tema, tidak perlu instalasi plugin tambahan. Berikut langkah-langkahnya:

1. Pastikan sudah ada instalasi WordPress di Localhost (XAMPP/Laragon).
2. Pastikan tema yang aktif adalah Twenty Twenty-Five.
3. Download file functions.php dan page-event-test.php dari repository ini.
4. Copy kedua file tersebut.
5. Paste (timpa file lama jika diminta) ke dalam folder tema di komputer Anda. Lokasinya biasanya ada di:
   xampp/htdocs/nama-folder-wp/wp-content/themes/twentytwentyfive/

Cara Menjalankan
Setelah file terpasang, lakukan setup di Dashboard WordPress:

1. Login ke wp-admin.
2. Masuk ke menu Pages (Laman) > Add New Page.
3. Beri judul halaman, misalnya "Tes Event".
4. Di sidebar sebelah kanan (bagian Page Attributes/Template), ganti Template dari Default menjadi Event Page.
5. Klik Publish.
6. Klik View Page untuk melihat hasilnya.
7. Coba fitur dropdown sorting untuk menguji fungsi pengurutan harga.

Penjelasan Singkat Logic
Berikut adalah alur logika dari kode yang saya buat:

1. Data Dummy
Saya tidak menyimpan data di database, melainkan menggunakan Array PHP yang disimpan dalam fungsi ambil_data_event() di file functions.php. Ini agar data terpusat dan mudah dipanggil.

2. Fitur Sorting (Server Side)
Sesuai instruksi, sorting dilakukan menggunakan PHP, bukan JavaScript.
- Logic ada di file page-event-test.php.
- Saya menggunakan parameter URL ($_GET) untuk menangkap pilihan user.
- Jika user memilih 'murah' atau 'mahal', kode akan menjalankan fungsi usort() bawaan PHP untuk mengurutkan array harga dari kecil ke besar atau sebaliknya.

3. Shortcode
Saya membuat custom shortcode bernama [simple_event_count]. Logic-nya sederhana: fungsi ini memanggil data array tadi, menghitung jumlah datanya menggunakan count(), lalu mengembalikannya dalam bentuk teks HTML tebal.

4. Tampilan (Frontend)
Layout dibuat menggunakan CSS Flexbox agar card berjejer rapi (grid) dan tetap responsif saat dibuka di layar kecil.


## Link Video
https://www.loom.com/share/3822e2d3e9c74a6bad518af45c0e3820
